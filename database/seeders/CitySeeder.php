<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [
                'name' => 'Dubai',
                'price' => 29.9,
            ],
            [
                'name' => 'Sharjah',
                'price' => 39.5,
            ],
            [
                'name' => 'Abu Dhabi',
                'price' => 35,
            ],
        ]);
    }
}
