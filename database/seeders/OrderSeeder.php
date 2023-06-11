<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            //Insert the orders columns
            "order_id"=>uuid_create(),
            "subtotal"=>200,
            "tax"=>0.1,
            "quantity"=>1,
            "user_id"=>1,
            "phone_id"=>1
        ]);
    }
}
