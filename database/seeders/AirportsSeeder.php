<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AirportsSeeder extends Seeder
{
    public function run(): void
    {
        $jsonFile = storage_path('app/data/airports.json');

        $airports = json_decode(File::get($jsonFile), true);

        foreach ($airports as $code => $airport) {
            DB::table('airports')->insert([
                'code' => $code,
                'city_name_en' => $airport['cityName']['en'],
                'city_name_ru' => $airport['cityName']['ru'] ?? null,
                'area' => $airport['area'] ?? null,
                'country' => $airport['country'],
                'timezone' => $airport['timezone'],
                'lat' => $airport['lat'] ?? null,
                'lng' => $airport['lng'] ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
