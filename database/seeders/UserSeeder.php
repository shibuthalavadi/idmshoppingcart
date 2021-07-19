<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('user')->insert([
            'name' => 'sheeba joseph',
            'email' => 'sheebashibuv@gmail.com',
            'password' => Hash::make('ZAQ1@2wsx')
       ]);
    }
}
