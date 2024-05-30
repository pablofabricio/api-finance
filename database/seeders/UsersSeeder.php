<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'name' => 'finance api user',
            'email' => 'financeapi.user@gmail.com',
            'password' => bcrypt('1234567'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
