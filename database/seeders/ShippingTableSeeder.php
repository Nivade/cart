<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipping')->insert([
            'weight' => 1000,
            'price' => 3.60
        ]);

        DB::table('shipping')->insert([
            'weight' => 2000,
            'price' => 5.00
        ]);

        DB::table('shipping')->insert([
            'weight' => 5000,
            'price' => 7.20
        ]);
    }
}
