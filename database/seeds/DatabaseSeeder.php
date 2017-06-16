<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(DishSeeder::class);
        $this->call(TableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(DishOrderSeeder::class);
        $this->call(TrackingSeeder::class);
        $this->call(SalarySeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
