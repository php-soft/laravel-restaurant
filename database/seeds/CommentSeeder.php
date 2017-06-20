<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ['user_id'=>2,
            'review_id'=>1,
            'content'=>"ngon, hap dan, re...........",
           
           ],
        ]);
    }
}
