<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use App\Services\ProvinceCityService;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;

class ProvinceCityTest extends TestCase
{
    // use RefreshDatabase;

    private $url = '/api/search/provinces';
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
        $this->setUpFaker();
    }

    public function user()
    {
        return User::where('email', 'user@example.com')->first();
    }

    public function testGetProvinces()
    {
        // Simulasi penggunaan database
        $user = $this->user();
        $this->actingAs($user);
        config(['services.rajaongkir.use_database' => true]);
        $response = $this->get('/api/search/provinces');
        $response->assertStatus(200);
    }

    public function testGetCities()
    {
        // Simulasi penggunaan database
        $user = $this->user();
        $this->actingAs($user);
        config(['services.rajaongkir.use_database' => true]);
        $response = $this->get('/api/search/cities');
        $response->assertStatus(200);
    }
}
