<?php

use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tables')->insert([
            ['name'=>"So 01",
            'status'=> 1,

            ],
            ['name'=>"So 02",
            'status'=> 2,

            ],
            ['name'=>"So 10",
            'status'=> 2,

            ],
        ]);
    }
}
