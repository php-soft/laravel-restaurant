<?php

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            ['user_id'=>4,
            'rate'=>5,
            'content'=>"ngon",
           
           ],
        ]);
    }
}
