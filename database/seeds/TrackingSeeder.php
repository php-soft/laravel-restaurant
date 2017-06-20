<?php

use Illuminate\Database\Seeder;

class TrackingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trackings')->insert([
            ['user_id'=>4,
            'work_day'=>'06/06/17',
            'start_time'=>'6:00:03',
            'end_time'=>'11:00:05',
            'total_time'=>'5',

            ],
        ]);
    }
}
