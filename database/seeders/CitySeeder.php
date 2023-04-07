<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filekota = file_get_contents(base_path('/database/kota.json'));
        $filekabupaten = file_get_contents(base_path('/database/kabupaten.json'));

        $datakota = json_decode($filekota, true);
        $datakabupaten = json_decode($filekabupaten, true);

        City::insert($datakota);
        City::insert($datakabupaten);
    }
}
