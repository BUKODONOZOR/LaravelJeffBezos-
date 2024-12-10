<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    public function run()
    {
        $countries = [
            ['name' => 'Argentina'],
            ['name' => 'Brazil'],
            ['name' => 'Chile'],
            ['name' => 'Colombia'],
            // Añade más países según sea necesario
        ];

        DB::table('countries')->insert($countries);
    }
}
