<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>"Nguyen Van An",
            'email'=>"annguyen11@gmail.com",
            'password'=>"abc123",
            'phone'=>"",
            'address'=>"",
            'gender'=>true,
            'role'=>0,

            ],
            ['name'=>"Tran Thi Lan",
            'email'=>"lan13@gmail.com",
            'password'=>"12345",
            'phone'=>"",
            'address'=>"",
            'gender'=>false,
            'role'=>0,

            ],
            ['name'=>"Nguyen Thi Ha",
            'email'=>"nguyenthiha107.cmu@gmail.com",
            'password'=>"abcabc",
            'phone'=>"",
            'address'=>"",
            'gender'=>false,
            'role'=>1,

            ],
            ['name'=>"Le Na",
            'email'=>"anna09@gmail.com",
            'password'=>"aabb123",
            'phone'=>"",
            'address'=>"",
            'gender'=>false,
            'role'=>2,

            ],
        ]);
    }
}
