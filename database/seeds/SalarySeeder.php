<?php

use Illuminate\Database\Seeder;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salaries')->insert([
            ['user_id'=>4,
            'salary'=>1500.000,
            'allowance'=>200.000,
            'tardiness_reduction'=>30.000,
            'gross_pay'=>1670.000,
            'tax'=>0.5,
            'net_pay'=>1586.000,

            ],
        ]);
    }
}
