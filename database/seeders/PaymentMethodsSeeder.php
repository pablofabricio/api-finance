<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("payment_methods")->insert([
            [
                'name' => 'Credit Card',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Debit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cash',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bitcoin',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
