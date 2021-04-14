<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 6; $i++) {
            DB::table('prices')->insert([
                'value' => rand(000, 999),
                'product_id' => $i,
                'currency_id' => '1',
            ]);
        }
    }
}
