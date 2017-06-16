<?php

use Illuminate\Database\Seeder;

class DishOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dish_orders')->insert([
            ['order_id'=>1,
            'dish_id'=>1,
            'quantity'=>2,
            'price'=>70000,

            ],
        ]);
    }
}
