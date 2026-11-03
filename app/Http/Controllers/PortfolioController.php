<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Vanesa Mardiana Putri',
            'nickname' => 'Vanesa',
            'role' => 'Backend-Focused Full-Stack Developer & UI/UX Designer',
            'subtitle' => 'Laravel · Node.js · Express.js · PostgreSQL · MySQL · Google Colab ML',
            'bio' => 'Halo! Aku Vanesa Mardiana Putri, mahasiswi Politeknik Negeri Malang (POLINEMA) yang berfokus pada Backend Engineering dan arsitektur sistem web (Laravel, Node.js, Express.js), manajemen basis data (MySQL, PostgreSQL, DBeaver), serta UI/UX Design di Figma dan Machine Learning di Google Colab. Aktif sebagai pengurus HRD di Workshop Riset Informatika (WRI) dan Finalis Team Lead kompetisi web development.',
            'avatar' => '/images/avatar-vanesa.svg',
            'location' => 'Indonesia',
            'status' => 'Tersedia untuk Magang, Freelance & Full-time Backend / Fullstack',
            'stats' => [
                ['label' => 'Proyek Selesai', 'value' => '12+'],
                ['label' => 'Tahun Koding & Kuliah', 'value' => '3+'],
                ['label' => 'Database & Framework', 'value' => '8+'],
                ['label' => 'Model Akurasi R² / SUS', 'value' => '91%+'],
            ],
            'socials' => [
                'github' => 'https://github.com/vanesamrd',
                'linkedin' => 'https://www.linkedin.com/in/vanesa-mardiana-putri06/',
                'email' => 'paneja436@gmail.com',
            ]
        ];

        // Running tech stack marquee (Logo yang bisa berjalan)
        $runningSkills = [
            [
                'name' => 'Laravel',
                'color' => '#FF2D20',
                'svg' => '<path fill="#FF2D20" d="M12 2.5l8.5 4.9v9.8L12 22.1l-8.5-4.9V7.4L12 2.5zm0 2.3L5.5 8.5v7.2L12 19.4l6.5-3.7V8.5L12 4.8zm0 2.4l4.2 2.4v4.9L12 16.9l-4.2-2.4V9.6L12 7.2z"/>',
            ],
            [
                'name' => 'Node.js',
                'color' => '#339933',
                'svg' => '<path fill="#339933" d="M12 2l10 5.7v11.5L12 25l-10-5.8V7.7L12 2zm0 2.3L4 8.9v9.2l8 4.6 8-4.6V8.9l-8-4.6zm-1.5 5.5h3v7h-3v-7zm1.5-3.5a1.8 1.8 0 1 1 0 3.6 1.8 1.8 0 0 1 0-3.6z"/>',
            ],
            [
                'name' => 'Express.js',
                'color' => '#FFFFFF',
                'svg' => '<path fill="#FFFFFF" d="M3 6h4l3 6-3 6H3l3.5-6L3 6zm8 0h3l5 7.5L24 6h-3l-3.5 5.2L14 6h-3v12h2.5v-7.8l3 4.8 3-4.8V18H21V6z"/>',
            ],
            [
                'name' => 'PHP',
                'color' => '#777BB4',
                'svg' => '<path fill="#777BB4" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-5.5 13.5l1.2-6.5h3.2c1.6 0 2.6.8 2.3 2.5-.3 1.6-1.5 2.5-3 2.5h-1.6l-.7 4H6.5zm7.5 0l1.2-6.5h3.2c1.6 0 2.6.8 2.3 2.5-.3 1.6-1.5 2.5-3 2.5h-1.6l-.7 4H14zm-4.4-4.8h1.2c.6 0 1-.3 1.1-.9.1-.6-.2-.9-.8-.9h-1.1l-.4 1.8zm7.5 0h1.2c.6 0 1-.3 1.1-.9.1-.6-.2-.9-.8-.9H17l-.4 1.8z"/>',
            ],
            [
                'name' => 'PostgreSQL',
                'color' => '#4169E1',
                'svg' => '<path fill="#4169E1" d="M12 2C6.5 2 2 6.5 2 12c0 4.1 2.5 7.6 6.1 9.1-.1-.7-.1-1.6.2-2.3l1.3-4.4c-.3-.6-.5-1.4-.5-2.2 0-2.1 1.2-3.6 2.7-3.6 1.3 0 1.9 1 1.9 2.1 0 1.3-.8 3.2-1.3 5-.4 1.5.8 2.8 2.3 2.8 2.7 0 4.8-2.9 4.8-7 0-3.7-2.6-6.2-6.4-6.2-4.4 0-6.9 3.3-6.9 6.7 0 1.3.5 2.8 1.2 3.6.1.2.2.3.1.6l-.4 1.8c-.1.3-.3.4-.6.3-2.1-1-3.4-4-3.4-6.5C2.5 6.9 6.8 3.5 12.4 3.5c4.7 0 8.4 3.4 8.4 7.9 0 4.7-3 8.5-7.1 8.5-1.4 0-2.7-.7-3.2-1.6l-.9 3.3c-.3 1.2-1.1 2.6-1.7 3.5 1.3.4 2.7.6 4.1.6 5.5 0 10-4.5 10-10S17.5 2 12 2z"/>',
            ],
            [
                'name' => 'MySQL',
                'color' => '#4479A1',
                'svg' => '<path fill="#4479A1" d="M12 3C7 3 3 5.2 3 8v8c0 2.8 4 5 9 5s9-2.2 9-5V8c0-2.8-4-5-9-5zm0 2c4.1 0 7 1.7 7 3s-2.9 3-7 3-7-1.7-7-3 2.9-3 7-3zm7 6.3c-.8.8-2.6 1.7-5.5 1.7-2.9 0-4.7-.9-5.5-1.7V11c1.4.9 3.6 1.5 5.5 1.5s4.1-.6 5.5-1.5v.3zm0 4c-.8.8-2.6 1.7-5.5 1.7-2.9 0-4.7-.9-5.5-1.7V15c1.4.9 3.6 1.5 5.5 1.5s4.1-.6 5.5-1.5v.3z"/>',
            ],
            [
                'name' => 'DBeaver',
                'color' => '#8B5A2B',
                'svg' => '<circle cx="12" cy="12" r="10" fill="#6B4423"/><path fill="#D2B48C" d="M8 9c0-1.5 1.5-3 4-3s4 1.5 4 3v3c0 3-1.8 5-4 5s-4-2-4-5V9z"/><circle cx="10" cy="10" r="1.2" fill="#222"/><circle cx="14" cy="10" r="1.2" fill="#222"/><rect x="11.2" y="12" width="1.6" height="2" rx="0.4" fill="#FFFFFF"/>',
            ],
            [
                'name' => 'Google Colab',
                'color' => '#F9AB00',
                'svg' => '<path fill="#F9AB00" d="M16.9 8.2c-1.5-1.4-3.5-2.2-5.7-2.2-4.4 0-8 3.6-8 8s3.6 8 8 8c2.2 0 4.2-.8 5.7-2.2l-2-2c-1 1-2.3 1.5-3.7 1.5-3 0-5.3-2.4-5.3-5.3s2.4-5.3 5.3-5.3c1.4 0 2.7.5 3.7 1.5l2-2z"/><path fill="#E37400" d="M12 9.5a4.5 4.5 0 1 0 0 9 4.5 4.5 0 0 0 0-9zm6.8-1.3l-2 2c1 1 1.5 2.3 1.5 3.8s-.5 2.8-1.5 3.8l2 2c1.5-1.5 2.2-3.5 2.2-5.8s-.7-4.3-2.2-5.8z"/>',
            ],
            [
                'name' => 'Python',
                'color' => '#3776AB',
                'svg' => '<path fill="#3776AB" d="M11.9 2c-3.1 0-5 1.4-5 3.3v2.2h5.1V8H4.6C2.6 8 1 9.6 1 11.6c0 2.2 1.6 3.4 3.6 3.4h1.7v-2.2c0-1.8 1.6-3.3 3.4-3.3h5.2V7.1C14.9 3.9 13.3 2 11.9 2zm-1.8 1.6c.5 0 .9.4.9.9s-.4.9-.9.9-.9-.4-.9-.9.4-.9.9-.9z"/><path fill="#FFD43B" d="M12.1 22c3.1 0 5-1.4 5-3.3v-2.2h-5.1V16h7.4c2 0 3.6-1.6 3.6-3.6 0-2.2-1.6-3.4-3.6-3.4h-1.7v2.2c0 1.8-1.6 3.3-3.4 3.3H9.1v2.4c0 3.2 1.6 5.1 3 5.1zm1.8-1.6c-.5 0-.9-.4-.9-.9s.4-.9.9-.9.9.4.9.9-.4.9-.9.9z"/>',
            ],
            [
                'name' => 'JavaScript',
                'color' => '#F7DF1E',
                'svg' => '<rect width="24" height="24" rx="4" fill="#F7DF1E"/><path d="M6 18.5c1 .6 2.2 1 3.4 1 2.3 0 3.7-1.1 3.7-3.2v-7.1H10.5v7c0 1.2-.7 1.8-1.8 1.8-.7 0-1.4-.3-1.8-.7l-.9 1.2zm8.5-.2c1.1.7 2.4 1.1 3.9 1.1 2.3 0 3.6-1.2 3.6-2.9 0-1.7-1.1-2.5-2.8-3.3-1.4-.7-2-1.1-2-1.8 0-.7.6-1.3 1.7-1.3 1 0 1.9.4 2.5.8l.7-1.4c-.7-.5-1.8-.9-3.2-.9-2.3 0-3.6 1.3-3.6 2.9 0 1.7 1.1 2.6 2.8 3.3 1.4.6 2 1.1 2 1.9 0 .8-.8 1.4-2 1.4-1.2 0-2.3-.5-3.1-1.1l-.7 1.4z"/>',
            ],
            [
                'name' => 'Figma',
                'color' => '#F24E1E',
                'svg' => '<path fill="#F24E1E" d="M8 2h4v5H8z"/><path fill="#A259FF" d="M8 7h4v5H8z"/><path fill="#0ACF83" d="M8 12h4v5H8z"/><path fill="#FF7262" d="M12 2h4a3 3 0 0 1 0 6h-4V2z"/><circle fill="#1ABCFE" cx="14" cy="9.5" r="2.5"/><path fill="#0ACF83" d="M8 17a2.5 2.5 0 0 0 2.5 2.5c1.4 0 2.5-1.1 2.5-2.5V17H8z"/>',
            ],
            [
                'name' => 'HTML5',
                'color' => '#E34F26',
                'svg' => '<path fill="#E34F26" d="M12 2L3 5l2.6 14.5L12 22l6.4-2.5L21 5l-9-3z"/><path fill="#EF652A" d="M12 3.8v16.4l5.1-2 2.1-11.8L12 3.8z"/><path fill="#FFF" d="M12 8.3H7.8l.2 2.2H12v2.2H8.2l.3 3.3 3.5 1 3.5-1 .4-4.5H12V9.3h5.7l-.6 6.8-5.1 1.4-5.1-1.4-.4-4.4h9.8l.2-2.2H8l-.2-2.2H16l.2-2.2H7.6l-.2-2.2H12v2.2z"/>',
            ],
            [
                'name' => 'Tailwind CSS',
                'color' => '#06B6D4',
                'svg' => '<path fill="#06B6D4" d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.9.2 1.5.9 2.2 1.6 1.1 1.2 2.5 2.6 5.6 2.6 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.9-.2-1.5-.9-2.2-1.6-1.1-1.2-2.5-2.6-5.6-2.6zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.9.2 1.5.9 2.2 1.6 1.1 1.2 2.5 2.6 5.6 2.6 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.9-.2-1.5-.9-2.2-1.6-1.1-1.2-2.5-2.6-5.6-2.6z"/>',
            ],
            [
                'name' => 'Scikit-Learn',
                'color' => '#F7931E',
                'svg' => '<circle cx="7" cy="12" r="4.5" fill="#3499CD"/><circle cx="17" cy="12" r="4.5" fill="#F7931E"/><path d="M12 7.8c1.3 1.1 2 2.6 2 4.2s-.7 3.1-2 4.2c-1.3-1.1-2-2.6-2-4.2s.7-3.1 2-4.2z" fill="#2E7D32"/>',
            ],
            [
                'name' => 'Git & GitHub',
                'color' => '#F05032',
                'svg' => '<path fill="#F05032" d="M21.6 11.2l-8.8-8.8c-.8-.8-2-.8-2.8 0L8.4 4c-.2.2-.4.5-.4.8 0 .3.2.6.4.8l2.6 2.6v4.6c-.6.3-1 .8-1.2 1.5-.4.1-.9.2-1.3.4l-2.6-2.6c.1-.3.2-.6.2-.9 0-1.1-.9-2-2-2s-2 .9-2 2 .9 2 2 2c.4 0 .7-.1 1-.3l2.5 2.5c-.3.7-.3 1.5 0 2.2.5 1.1 1.7 1.8 2.9 1.6.8-.2 1.5-.7 1.8-1.5h4.4c.4 1.1 1.5 1.9 2.8 1.8 1.5-.1 2.7-1.3 2.8-2.8.1-1.2-.6-2.4-1.7-2.8v-3.7l2.8-2.8c.8-.8.8-2 0-2.8z"/>',
            ],
        ];

        // Keahlian categorized
        $skillCategories = [
            [
                'category' => 'Backend & Full-Stack Development',
                'icon' => 'code',
                'description' => 'Membangun arsitektur server, RESTful API, otentikasi aman, dan logika backend yang tangguh.',
                'skills' => [
                    ['name' => 'Laravel (PHP 8+)', 'level' => 92, 'desc' => 'MVC architecture, Eloquent ORM, REST API, Middleware, Service Providers, Artisan'],
                    ['name' => 'Node.js & Express.js', 'level' => 88, 'desc' => 'Asynchronous event-driven I/O, modular routing, middleware pipeline, JWT auth'],
                    ['name' => 'RESTful API Engineering', 'level' => 90, 'desc' => 'API design, JSON payload validation, status codes, CORS, Postman testing'],
                    ['name' => 'Full-Stack Integration (Tailwind & JS)', 'level' => 86, 'desc' => 'Blade templating, frontend consuming API, dynamic responsive UI'],
                ],
            ],
            [
                'category' => 'Database Management & Tools',
                'icon' => 'cpu',
                'description' => 'Perancangan skema relasional, optimasi query, manajemen transaksi data, dan administrasi database.',
                'skills' => [
                    ['name' => 'PostgreSQL', 'level' => 88, 'desc' => 'Relational schemas, foreign keys, complex joins, indexing, and JSONB fields'],
                    ['name' => 'MySQL Database', 'level' => 90, 'desc' => 'Database migrations, indexing, query optimization, normalization'],
                    ['name' => 'DBeaver', 'level' => 92, 'desc' => 'Multi-database GUI client, ERD schema visualization, query builder, data export'],
                ],
            ],
            [
                'category' => 'Machine Learning (Regression & Predictive)',
                'icon' => 'tool',
                'description' => 'Eksplorasi data, rekayasa fitur, dan pemodelan prediktif berbasis Regresi di lingkungan Google Colab.',
                'skills' => [
                    ['name' => 'Google Colab Environment', 'level' => 94, 'desc' => 'Cloud notebooks, GPU/CPU runtime, integration with Google Drive and dataset pipelines'],
                    ['name' => 'Regression Algorithms', 'level' => 89, 'desc' => 'Linear Regression, Ridge/Lasso, Random Forest Regressor, Polynomial Regression'],
                    ['name' => 'Python (Pandas, NumPy, Scikit-Learn)', 'level' => 88, 'desc' => 'Data wrangling, cleaning missing values, outliers, feature scaling, model fitting'],
                    ['name' => 'Model Evaluation & Metrics', 'level' => 87, 'desc' => 'R² Score (Coefficient of Determination), RMSE, MAE, Residual Error Analysis'],
                ],
            ],
            [
                'category' => 'UI/UX Design & Collaborative Tools',
                'icon' => 'palette',
                'description' => 'Merancang alur pengalaman pengguna dan berkolaborasi menggunakan perkakas modern.',
                'skills' => [
                    ['name' => 'Figma & Prototyping', 'level' => 90, 'desc' => 'Interactive UI components, wireframing, high-fidelity prototypes, design tokens'],
                    ['name' => 'Git & GitHub Workflow', 'level' => 89, 'desc' => 'Branching strategies, commits, pull requests, resolving conflicts'],
                    ['name' => 'Postman API Testing', 'level' => 91, 'desc' => 'Endpoint validation, environment variables, automated collection testing'],
                ],
            ],
        ];

        // Portfolio Projects
        $projects = [
            // ML Project (Regression Model on Google Colab)
            [
                'id' => 'ml-sales-regression',
                'title' => 'Prediksi Penjualan & Kebutuhan Stok Menggunakan Machine Learning Regresi',
                'category' => 'Machine Learning',
                'category_slug' => 'machine-learning',
                'badge' => 'Featured ML Regression Project',
                'short_desc' => 'Pemodelan Machine Learning berbasis Regresi (Linear & Random Forest Regressor) yang dikembangkan di Google Colab untuk memprediksi kuantitas penjualan harian dan estimasi restock bahan baku secara akurat.',
                'full_desc' => 'Mengembangkan pipeline machine learning prediktif berbasis Regresi menggunakan Python di Google Colab. Proyek ini melatih model untuk memprediksi volume penjualan harian produk kedai kopi berdasarkan fitur riwayat transaksi (53.820 struk), efek akhir pekan (weekend effect), moving average 7 hari, dan harga satuan. Model terbaik (Random Forest Regressor) mencapai skor R² sebesar 0.912 dengan Mean Absolute Error (MAE) yang sangat rendah, membantu mencegah understocking maupun penumpukan bahan baku (waste).',
                'image' => '/images/projects/project-ml-regression.svg',
                'tags' => ['Python', 'Google Colab', 'Scikit-Learn', 'Linear Regression', 'Random Forest Regressor', 'Pandas', 'Feature Engineering'],
                'metrics' => [
                    ['label' => 'R² Score (Akurasi)', 'value' => '0.912 (91.2%)'],
                    ['label' => 'Environment', 'value' => 'Google Colab'],
                    ['label' => 'Metode', 'value' => 'Regresi Prediktif'],
                    ['label' => 'Data Sampel', 'value' => '53.820 Struk'],
                ],
                'highlights' => [
                    'Eksplorasi data dan penanganan missing values serta pembersihan deret transaksi di Google Colab.',
                    'Rekayasa fitur regresi: moving average penjualan 7 hari, momentum 30 hari, rasio weekend vs weekday, dan variasi harga.',
                    'Komparasi model: Multiple Linear Regression, Ridge Regression, dan Random Forest Regressor.',
                    'Model Random Forest Regressor unggul dengan R² = 0.912 dan Root Mean Squared Error (RMSE) terendah.',
                    'Analisis Feature Importance: moving average harian dan tren akhir pekan menjadi prediktor paling signifikan terhadap volume penjualan.',
                    'Hasil model diekspor untuk dapat diintegrasikan dengan backend API Laravel & Node.js untuk kalkulasi otomatis stok minimum.',
                ],
                'repo_link' => 'https://github.com/vanesamrd',
                'demo_link' => null,
                'featured' => true,
            ],

            // Web Development Project 1 (Backend Focused)
            [
                'id' => 'web-kopikita-backend',
                'title' => 'KopiKita - Point of Sale (POS) & Multi-Store Inventory Backend',
                'category' => 'Web Development',
                'category_slug' => 'web-development',
                'badge' => 'Laravel & MySQL Backend',
                'short_desc' => 'Arsitektur web POS multi-outlet kedai kopi berbasis Laravel dengan manajemen inventaris real-time, API transaksi cepat, dan database terstruktur.',
                'full_desc' => 'Dikembangkan dengan arsitektur backend Laravel yang bersih dan aman. Dilengkapi RESTful API untuk pemrosesan order cepat di bawah 5 detik, manajemen stok bahan baku multi-gudang, relasi basis data MySQL yang dinormalisasi dan dikelola menggunakan DBeaver, serta dashboard analitik keuangan.',
                'image' => '/images/projects/project-web-pos.svg',
                'tags' => ['Laravel', 'PHP 8', 'MySQL', 'DBeaver', 'REST API', 'Tailwind CSS'],
                'metrics' => [
                    ['label' => 'Arsitektur', 'value' => 'MVC & REST API'],
                    ['label' => 'Database', 'value' => 'MySQL / DBeaver'],
                    ['label' => 'Response Time', 'value' => '< 120ms'],
                ],
                'highlights' => [
                    'Perancangan skema relasional tabel transaksi, stok gudang, dan rincian item pesanan dengan DBeaver.',
                    'Endpoint RESTful API kasir cepat dengan proteksi CSRF, validasi request ketat, dan database transactions.',
                    'Notifikasi otomatis via alert sistem ketika persediaan bahan baku berada di bawah safety stock.',
                    'Ekspor laporan keuangan otomatis dalam format PDF dan spreadsheet.',
                ],
                'repo_link' => 'https://github.com/vanesamrd',
                'demo_link' => '#',
                'featured' => true,
            ],

            // Web Development Project 2 (Node.js & Express / PostgreSQL)
            [
                'id' => 'web-eduportal-service',
                'title' => 'EduPortal - Academic Management System & Microservices API',
                'category' => 'Web Development',
                'category_slug' => 'web-development',
                'badge' => 'Laravel & Express.js API',
                'short_desc' => 'Sistem informasi akademik kampus untuk KRS online, validasi kuota kelas instan, dan kalkulasi IPK mahasiswa dengan PostgreSQL & DBeaver.',
                'full_desc' => 'Sistem backend komprehensif untuk operasional akademik universitas dengan 3 level otorisasi: Mahasiswa, Dosen, dan Admin. Menggunakan PostgreSQL sebagai basis data utama yang dimonitor via DBeaver, serta backend Express.js & Laravel untuk menangani beban konkurensi saat jadwal pengisian KRS serentak.',
                'image' => '/images/projects/project-web-academic.svg',
                'tags' => ['Laravel', 'Node.js', 'Express.js', 'PostgreSQL', 'DBeaver', 'JWT Auth'],
                'metrics' => [
                    ['label' => 'Database', 'value' => 'PostgreSQL'],
                    ['label' => 'Autentikasi', 'value' => 'Role-Based & JWT'],
                    ['label' => 'Alat DB', 'value' => 'DBeaver'],
                ],
                'highlights' => [
                    'Pencegahan bentrok jadwal dan over-capacity kelas menggunakan PostgreSQL database row-locking.',
                    'Validasi otomatis batas SKS berdasarkan perolehan IPK semester sebelumnya.',
                    'Implementasi middleware otentikasi role-based untuk mengamankan data nilai dan transkrip mahasiswa.',
                ],
                'repo_link' => 'https://github.com/vanesamrd',
                'demo_link' => '#',
                'featured' => false,
            ],

            // Web Development Project 3
            [
                'id' => 'web-ecocare-recycle',
                'title' => 'EcoCare - Platform Penjemputan Sampah Daur Ulang & Reward API',
                'category' => 'Web Development',
                'category_slug' => 'web-development',
                'badge' => 'Full-Stack RESTful Platform',
                'short_desc' => 'Platform web interaktif yang menghubungkan masyarakat dengan bank sampah lokal, penjadwalan pickup sampah anorganik, dan konversi reward poin.',
                'full_desc' => 'Platform web ramah lingkungan yang dibangun untuk menggalakkan gerakan daur ulang sampah rumah tangga. Backend mengelola penjadwalan kurir penjemputan, kalkulasi taksiran bobot sampah terpilah, dan saldo poin reward pengguna.',
                'image' => '/images/projects/project-web-ecocare.svg',
                'tags' => ['Laravel API', 'Node.js', 'MySQL', 'Leaflet.js', 'Tailwind CSS'],
                'metrics' => [
                    ['label' => 'Endpoint API', 'value' => '18 Endpoints'],
                    ['label' => 'Sistem Poin', 'value' => 'Gamified Logic'],
                    ['label' => 'Peta Interaktif', 'value' => 'Leaflet OSM'],
                ],
                'highlights' => [
                    'Formulir booking penjemputan cerdas dengan kalkulator taksiran bobot sampah dan estimasi perolehan poin.',
                    'Peta sebaran drop-point bank sampah menggunakan Leaflet.js dengan penunjuk rute terdekat.',
                    'Dashboard admin bank sampah untuk verifikasi bobot aktual dan top-up poin otomatis ke akun warga.',
                ],
                'repo_link' => 'https://github.com/vanesamrd',
                'demo_link' => '#',
                'featured' => false,
            ],

            // UI/UX Project 1
            [
                'id' => 'uiux-kopikita-mobile',
                'title' => 'KopiKita Mobile - Coffee Ordering & Digital Loyalty App UX',
                'category' => 'UI/UX Design',
                'category_slug' => 'ui-ux',
                'badge' => 'High-Fidelity Mobile UX Case Study',
                'short_desc' => 'Perancangan desain antarmuka aplikasi pemesanan kopi siap ambil (takeaway) dengan kartu loyalitas digital dan alur checkout kilat 3 ketukan.',
                'full_desc' => 'Case study UI/UX lengkap mulai dari user research, empathy mapping, user persona, user journey, wireframing (Lo-Fi), design system komprehensif, hingga interactive prototype di Figma. Berhasil memangkas waktu pemesanan kopi takeaway sebesar 45% dan meningkatkan retensi pelanggan melalui gamifikasi stamp card.',
                'image' => '/images/projects/project-uiux-coffee.svg',
                'tags' => ['Figma', 'User Research', 'Design System', 'Prototyping', 'SUS Testing', 'Mobile UI'],
                'metrics' => [
                    ['label' => 'SUS Score', 'value' => '87.5 (Grade A)'],
                    ['label' => 'Task Completion', 'value' => '96%'],
                    ['label' => 'Layar Didesain', 'value' => '32 Screens'],
                ],
                'highlights' => [
                    'User research kualitatif terhadap 20 pelanggan kedai kopi untuk mengidentifikasi pain points antrean kasir jam sibuk.',
                    'Fitur unggulan "Quick Re-order" untuk memesan menu favorit harian hanya dalam 3 ketukan.',
                    'Sistem kartu loyalitas interaktif dengan animasi pembukaan stamp reward yang memicu kepuasan emosional pengguna.',
                    'Pengujian kegunaan (Usability Testing) menghasilkan skor System Usability Scale (SUS) 87.5 (kategori Excellent).',
                ],
                'repo_link' => null,
                'demo_link' => 'https://figma.com',
                'featured' => true,
            ],

            // UI/UX Project 2
            [
                'id' => 'uiux-healthease-app',
                'title' => 'HealthEase - Telemedicine & Clinic Appointment Mobile App',
                'category' => 'UI/UX Design',
                'category_slug' => 'ui-ux',
                'badge' => 'Accessible Healthcare UX',
                'short_desc' => 'Desain aplikasi kesehatan ramah lansia untuk konsultasi dokter spesialis secara daring, booking nomor antrean klinik, dan alarm minum obat.',
                'full_desc' => 'Proyek desain UI/UX berstandar aksesibilitas tinggi (WCAG 2.1 AA) dengan tipografi yang mudah dibaca, kontras warna yang nyaman di mata, dan navigasi yang sangat sederhana untuk menjangkau pengguna segala usia, khususnya pengguna lanjut usia dan keluarga mereka.',
                'image' => '/images/projects/project-uiux-health.svg',
                'tags' => ['Figma', 'WCAG 2.1 Accessibility', 'User Personas', 'Wireframing', 'Healthcare UI'],
                'metrics' => [
                    ['label' => 'Standar Aksesibilitas', 'value' => 'WCAG 2.1 AA'],
                    ['label' => 'User Satisfaction', 'value' => '4.8 / 5.0'],
                    ['label' => 'Mode Khusus', 'value' => 'Senior Friendly'],
                ],
                'highlights' => [
                    'Desain antarmuka dengan opsi tombol berukuran besar dan mode pembaca layar yang intuitif.',
                    'Alur booking jadwal dokter dengan kalender visual dan konfirmasi jadwal instan via WhatsApp/SMS.',
                    'Fitur pengingat minum obat harian dengan notifikasi visual yang jelas dan tombol konfirmasi "Sudah Minum".',
                ],
                'repo_link' => null,
                'demo_link' => 'https://figma.com',
                'featured' => false,
            ],

            // UI/UX Project 3
            [
                'id' => 'uiux-finvibe-dashboard',
                'title' => 'FinVibe - Personal Finance & Budget Planner Dashboard',
                'category' => 'UI/UX Design',
                'category_slug' => 'ui-ux',
                'badge' => 'Web App & Dashboard UI',
                'short_desc' => 'Desain dashboard keuangan modern untuk generasi muda dalam mengelola alokasi anggaran bulanan (50/30/20 rule) dan visualisasi tabungan impian.',
                'full_desc' => 'Perancangan desain antarmuka dashboard keuangan responsif (desktop & tablet) yang mengubah pencatatan keuangan membosankan menjadi visual yang estetik, segar, dan mudah dipahami dengan palet warna dark/light mode yang elegan.',
                'image' => '/images/projects/project-uiux-finance.svg',
                'tags' => ['Figma', 'Dashboard Design', 'Data Visualization', 'Dark Mode UI', 'Micro-interactions'],
                'metrics' => [
                    ['label' => 'Komponen UI', 'value' => '65+ Variasi'],
                    ['label' => 'Dukungan Tema', 'value' => 'Light & Dark'],
                    ['label' => 'Responsivitas', 'value' => '100% Fluid'],
                ],
                'highlights' => [
                    'Visualisasi interaktif alokasi pengeluaran bulanan menggunakan diagram donat dan kartu budget dinamis.',
                    'Widget pelacak tujuan tabungan (Saving Goals) dengan progress bar bertahap yang memotivasi.',
                    'Sistem komponen design token lengkap di Figma: tipografi, varian tombol, status tag, dan charting guidelines.',
                ],
                'repo_link' => null,
                'demo_link' => 'https://figma.com',
                'featured' => false,
            ],
        ];

        // College & Experience Milestones (Polinema, WRI, & Intercomp JTI)
        $experiences = [
            [
                'period' => '2026',
                'role' => 'Finalis & Lead Tim Web Development',
                'institution' => 'Intercomp JTI Politeknik Negeri Malang',
                'desc' => 'Memimpin tim pengembang hingga berhasil lolos ke babak Finalis dalam ajang kompetisi tahunan Intercomp Jurusan Teknologi Informasi (JTI) Polinema; mengarahkan arsitektur backend, integrasi RESTful API, dan perancangan prototipe produk digital.',
            ],
            [
                'period' => '2025 - Sekarang',
                'role' => 'Human Resource Development (HRD)',
                'institution' => 'Workshop Riset Informatika (WRI) · Sub-Internal Division',
                'desc' => 'Bertanggung jawab dalam divisi HRD Sub-Internal komunitas Workshop Riset Informatika (WRI) Polinema; mengelola program bonding anggota, memfasilitasi pengembangan potensi dan soft skill anggota riset, serta menjaga keselarasan komunikasi internal organisasi.',
            ],
            [
                'period' => '2024 - Sekarang',
                'role' => 'Mahasiswi Jurusan Teknologi Informasi',
                'institution' => 'Politeknik Negeri Malang (POLINEMA)',
                'desc' => 'Menempuh studi vokasi di Polinema dengan fokus mendalam pada rekayasa perangkat lunak, sistem backend (Laravel, Node.js, Express.js), basis data (MySQL, PostgreSQL, DBeaver), dan eksplorasi machine learning di Google Colab.',
            ],
        ];

        return view('portfolio', compact('profile', 'runningSkills', 'skillCategories', 'projects', 'experiences'));
    }
}
