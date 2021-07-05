<?php

namespace Database\Seeders;

use App\Models\Commodities;
use Illuminate\Database\Seeder;

class CommoditiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        // 'name','description','seller_id','price','minimum_amount','type','exchange_for'
        $array = [
            [
                'name' => 'Laptop',
                'description' => 'Laptop computer, HP laptop with i5 processor and 8GB Ram',
                'seller_id' => 1,
                'price' => '40000',
                'minimum_amount' => '10000',
                'type' => 'goods',
                'exchange_for' => json_encode(
                    [
                        'services' => 'Office cleaning services',
                        'services' => 'Software Development',
                        'services' => 'Office Space'
                    ]
                ),
                'category_id' => 2
            ],
            [
                'name' => 'Gas refilling',
                'description' => 'Gas refilling for 8kgs and 12kgs cylinders',
                'seller_id' => 4,
                'price' => '1500',
                'minimum_amount' => '500',
                'type' => 'services',
                'exchange_for' => json_encode(
                    [
                        'services' => 'Gas Delivery Service',
                        'goods' => 'Food Shopping',
                        'goods' => 'Alarm Security'
                    ]
                ),
                'category_id' => 3
            ],
            [
                'name' => 'Office Space',
                'description' => 'Office space - 30ft by 15ft: monthly rent',
                'seller_id' => 3, 
                'price' => '50000',
                'minimum_amount' => '15000',
                'type' => 'services',
                'exchange_for' => json_encode(
                    [
                        'services' => 'Security Services',
                        'services' => 'Office Cleaning',
                        'goods' => 'Security Light bulbs'
                    ]
                ),
                'category_id' => 5
            ],
            [
                'name' => 'Vehicle repair',
                'description' => 'Vehicle repair for SUVs and other small to medium cars',
                'seller_id' => 3, 
                'price' => '40000',
                'minimum_amount' => '10000',
                'type' => 'services',
                'exchange_for' => json_encode(
                    [
                        'goods' => 'Restaurant food',
                        'goods' => 'Vehicle spare parts',
                        'goods' => 'Home Coffe table'
                    ]
                ),
                'category_id' => 27
            ],
            [
                'name' => 'Car',
                'description' => 'Toyota model type Vitz',
                'seller_id' => 1,
                'price' => '600000',
                'minimum_amount' => '100000',
                'type' => 'goods',
                'exchange_for' => json_encode(
                    [
                        'goods' => 'Land',
                        'services' => 'Social Media services'
                    ]
                ),
                'category_id' => 25
            ],
            [
                'name' => 'Home furniture',
                'description' => 'Range of furniture: tables, beds, stools, couch etc', 
                'seller_id' => 1,
                'price' => '5000',
                'minimum_amount' => '10000',
                'type' => 'goods',
                'exchange_for' => json_encode(
                    [
                        'services' => 'Delivery Services',
                        'services' => 'Graphic design',
                        'services' => 'Office Space'
                    ]
                ),
                'category_id' => 4
            ],
            [
                'name' => 'Potatoes',
                'description' => 'Several bales of potatoes',
                'seller_id' => 4,
                'price' => '5000',
                'minimum_amount' => '1000',
                'type' => 'goods',
                'exchange_for' => json_encode(
                    [
                        'goods' => 'Meat',
                        'services' => 'Vehicle Repair',
                        'services' => 'Manual Work'
                    ]
                ),
                'category_id' => 7
            ],
            [
                'name' => 'Water',
                'description' => 'Fresh water from borehole and treated',
                'seller_id' => 4,
                'price' => '2000',
                'minimum_amount' => '500',
                'type' => 'goods',
                'exchange_for' => json_encode(
                    [
                        'services' => 'Delivery',
                        'goods' => 'Milk',
                        'goods' => 'Shopping essentials'
                    ]
                ),
                'category_id' => 10
            ],
            [
                'name' => 'Phone',
                'description' => 'Selling Samsung, Tecno and Redmi phones',
                'seller_id' => 3,
                'price' => '15000',
                'minimum_amount' => '10000',
                'type' => 'goods',
                'exchange_for' => json_encode(
                    [
                        'services' => 'Office cleaning services',
                        'services' => 'Signage Design',
                        'goods' => 'Party drinks'
                    ]
                ),
                'category_id' => 2
            ],
            [
                'name' => 'Tutoring Services',
                'description' => 'I offer tutoring services for children in High school',
                'seller_id' => 4,
                'price' => '10000',
                'minimum_amount' => '3000',
                'type' => 'goods',
                'exchange_for' => json_encode(
                    [
                        'services' => 'Internet services',
                        'goods' => 'TV set',
                        'goods' => 'Laptop'
                    ]
                ),
                'category_id' => 16
            ],
        ];
        foreach ($array as $item) {
            Commodities::create($item);
        }
    }
}
