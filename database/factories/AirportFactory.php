<?php

namespace Database\Factories;

use App\Models\Airport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Airport>
 */
class AirportFactory extends Factory
{
    protected $model = Airport::class;

    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->countryCode,
            'city_name_en' => $this->faker->city(),
            'city_name_ru' => $this->faker->optional()->city(),
            'country' => strtoupper($this->faker->lexify('??')),
            'timezone' => $this->faker->timezone,
        ];
    }
}
