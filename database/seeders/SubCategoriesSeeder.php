<?php

namespace Database\Seeders;

use App\Models\SubCategories;
use Illuminate\Database\Seeder;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['name' => 'TVs and Sound Systems', 'category_id' => 1],
            ['name' => 'Computers and Phones', 'category_id' => 1],
            ['name' => 'Kitchen Appliances', 'category_id' => 1],
            ['name' => 'Home Furniture', 'category_id' => 2],
            ['name' => 'Office Furniture', 'category_id' => 2],
            ['name' => 'Restaurant Food', 'category_id' => 3],
            ['name' => 'Agricultural Food', 'category_id' => 3],
            ['name' => 'Clothing & Cosmetics: Shoes, Clothes', 'category_id' => 4],
            ['name' => 'Decorations', 'category_id' => 5],
            ['name' => 'Water', 'category_id' => 5],
            ['name' => 'Note Books', 'category_id' => 6],
            ['name' => 'Pens and Stress Balls', 'category_id' => 6],
            ['name' => 'Doors', 'category_id' => 7],
            ['name' => 'Window Panes', 'category_id' => 7],
            ['name' => 'Cement', 'category_id' => 7],
            ['name' => 'Tutors', 'category_id' => 8],
            ['name' => 'Legal', 'category_id' => 8],
            ['name' => 'Graphic Design', 'category_id' => 8],
            ['name' => 'Counselling Services', 'category_id' => 8],
            ['name' => 'Software Development', 'category_id' => 8],
            ['name' => 'Foodstuffs', 'category_id' => 9],
            ['name' => 'Cleaning Stuff', 'category_id' => 9],
            ['name' => 'Food Delivery', 'category_id' => 10],
            ['name' => 'Office Deliveries', 'category_id' => 10],
            ['name' => 'Vehicles Spare Parts', 'category_id' => 11],
            ['name' => 'Vehicle Essentials: Oil, Gas', 'category_id' => 11],
            ['name' => 'Vehicle Upgrades', 'category_id' => 11],
            ['name' => 'Medicine', 'category_id' => 12],
            ['name' => 'Blood Tests', 'category_id' => 12],
            ['name' => 'Physical Assesments', 'category_id' => 12],
            ['name' => 'Jua Kali', 'category_id' => 13],
            ['name' => 'Home Workers', 'category_id' => 13],
            ['name' => 'Office Workers', 'category_id' => 13],
            ['name' => 'Construction Workers', 'category_id' => 13]
        ];

        foreach ($array as $item) {
            SubCategories::create($item);
        }
    }
}
