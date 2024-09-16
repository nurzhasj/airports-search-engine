<?php

namespace Tests\Feature;

use App\Models\Airport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchAirportsTest extends TestCase
{
    use RefreshDatabase;

    public function test_if_it_can_search_airports()
    {
        Airport::factory()->create([
            'code' => 'LAX',
            'city_name_en' => 'Los Angeles',
            'city_name_ru' => 'Лос-Анджелес',
            'country' => 'US',
            'timezone' => 'America/Los_Angeles'
        ]);

        $response = $this->getJson('/api/search?keyword=Los Angeles');

        $response->assertStatus(200)
            ->assertJsonFragment([
                'city_name_en' => 'Los Angeles',
                'country' => 'US'
            ]);
    }
}
