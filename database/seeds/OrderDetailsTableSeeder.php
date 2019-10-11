<?php

use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \Illuminate\Support\Facades\DB::table('order_details')->truncate();
        \Illuminate\Support\Facades\DB::table('order_details')->insert([
    [
        'order_id'=>1,
        'product_id'=>2,
        'quantity'=>1,
        'unit_price'=>99999994
    ],
            [
                'order_id'=>2,
                'product_id'=>3,
                'quantity'=>1,
                'unit_price'=>100000
            ],
            [
                'order_id'=>3,
                'product_id'=>5,
                'quantity'=>1,
                'unit_price'=>200000
            ],
            [
                'order_id'=>4,
                'product_id'=>6,
                'quantity'=>1,
                'unit_price'=>1999000
            ],
            [
                'order_id'=>5,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>6,
                'product_id'=>3,
                'quantity'=>1,
                'unit_price'=>9933994
            ],
            [
                'order_id'=>7,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>8,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>9,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>10,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>11,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>12,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>13,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>14,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>15,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>16,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>17,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>18,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>19,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>20,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>21,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>22,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>23,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>24,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>25,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>26,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>27,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>28,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>29,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
            [
                'order_id'=>30,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>99993994
            ],
        ]);
    }
}
