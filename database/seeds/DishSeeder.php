<?php

use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dishes')->insert([
            ['category_id'=>1,
            'name'=>"Bun Bo",
            'price'=>35000,
            'description'=>"",
            'expenditure'=>15000,
            'image'=>"",

            ],
            ['category_id'=>2,
            'name'=>"My Quang Ga",
            'price'=>45000,
            'description'=>"",
            'expenditure'=>20000,
            'image'=>"",

            ],
            ['category_id'=>2,
            'name'=>"My Quang Ech",
            'price'=>45000,
            'description'=>"",
            'expenditure'=>20000,
            'image'=>"",

            ],
            ['category_id'=>3,
            'name'=>"Chao Bo Bam",
            'price'=>25000,
            'description'=>"",
            'expenditure'=>10000,
            'image'=>"",

            ],
            ['category_id'=>4,
            'name'=>"Banh My Op La",
            'price'=>20000,
            'description'=>"",
            'expenditure'=>10000,
            'image'=>"",

            ],
        ]);
    }
}
