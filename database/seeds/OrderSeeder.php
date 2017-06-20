<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            ['table_id'=>1,
            'user_id'=>1,
            'status'=>1,
            'total'=>350000,

            ],
        ]);
    }
}
