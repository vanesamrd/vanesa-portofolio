<?php

/**
 * Renders the Laravel portfolio page to static HTML so it can be hosted on Netlify.
 * Output: dist/index.html plus the public assets (images, favicon, robots.txt).
 */

$root = dirname(__DIR__);
$dist = $root.'/dist';

require $root.'/vendor/autoload.php';

// Safe defaults for a build-time render (no database, sessions or encryption needed).
foreach ([
    'APP_ENV' => 'production',
    'APP_DEBUG' => 'false',
    'APP_URL' => '',
    'LOG_CHANNEL' => 'stderr',
    'CACHE_STORE' => 'array',
    'SESSION_DRIVER' => 'array',
    'DB_CONNECTION' => 'sqlite',
] as $key => $value) {
    if (getenv($key) === false) {
        putenv("$key=$value");
        $_ENV[$key] = $_SERVER[$key] = $value;
    }
}

$app = require $root.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Generate root-relative asset URLs (e.g. /images/avatar.svg).
$placeholder = 'http://static-root.invalid';
$app['url']->forceRootUrl($placeholder);

$html = $app->make(App\Http\Controllers\PortfolioController::class)->index()->render();
$html = str_replace($placeholder.'/', '/', $html);

$copy = function (string $src, string $dst) use (&$copy) {
    if (is_dir($src)) {
        @mkdir($dst, 0755, true);
        foreach (scandir($src) as $item) {
            if ($item !== '.' && $item !== '..') {
                $copy("$src/$item", "$dst/$item");
            }
        }
    } else {
        copy($src, $dst);
    }
};

$rm = function (string $path) use (&$rm) {
    if (is_dir($path)) {
        foreach (scandir($path) as $item) {
            if ($item !== '.' && $item !== '..') {
                $rm("$path/$item");
            }
        }
        rmdir($path);
    } elseif (file_exists($path)) {
        unlink($path);
    }
};

$rm($dist);
mkdir($dist, 0755, true);
file_put_contents($dist.'/index.html', $html);

foreach (['images', 'favicon.ico', 'robots.txt'] as $asset) {
    if (file_exists($root.'/public/'.$asset)) {
        $copy($root.'/public/'.$asset, $dist.'/'.$asset);
    }
}

echo "Static site written to dist/\n";
