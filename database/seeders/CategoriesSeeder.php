<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['name' => 'Electronics'],
            ['name' => 'Furniture'],
            ['name' => 'Food'],
            ['name' => 'Clothing & Cosmetics: Shoes, Clothes'],
            ['name' => 'Home'],
            ['name' => 'Office Items eg. Stationeries'],
            ['name' => 'Building & Construction'],
            ['name' => 'Proffesional Services'],
            ['name' => 'Shopping and Related'],
            ['name' => 'Transport and Delivery'],
            ['name' => 'Vehicles: Parts and Essentials'],
            ['name' => 'Pharamaceutical & Hospital Equipment'],
            ['name' => 'Manual Work']
        ];
        foreach ($array as $item) {
            Categories::create($item);
        }
    }
}
