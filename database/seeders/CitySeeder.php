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
        $Cities = [
            [
                "id" => 1,
                "name" => "Miami",
                "lat" => "25.7743",
                "long" => "-80.1937",
                "img" => "miami.jpg",
            ],
            [
                "id" => 2,
                "name" => "New York",
                "lat" => "40.7143",
                "long" => "-74.006",
                "img" => "newyork.jpg",
            ],
            [
                "id" => 3,
                "name" => "Orlando",
                "lat" => "28.5383",
                "long" => "-81.3792",
                "img" => "orlando.jpg",
            ],
        ];

        City::insert($Cities);
    }
}
