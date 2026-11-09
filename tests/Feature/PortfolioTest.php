<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    public function test_portfolio_page_loads_successfully_with_all_sections(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Vanesa Mardiana Putri');
        $response->assertSee('Backend-Focused Full-Stack');
        $response->assertSee('Polinema');
        $response->assertSee('Workshop Riset Informatika');
        $response->assertSee('Intercomp JTI');
        $response->assertSee('Laravel');
        $response->assertSee('Node.js');
        $response->assertSee('Express.js');
        $response->assertSee('PostgreSQL');
        $response->assertSee('MySQL');
        $response->assertSee('DBeaver');
        $response->assertSee('Google Colab');
        $response->assertSee('Figma');
        $response->assertSee('KopiKita');
        $response->assertSee('SiGizi');
        $response->assertSee('EcoCare');
        $response->assertSee('HealthEase');
        $response->assertSee('FinVibe');
        $response->assertSee('github.com/vanesamrd');
        $response->assertSee('linkedin.com/in/vanesa-mardiana-putri06');
        $response->assertSee('paneja436@gmail.com');
    }
}
