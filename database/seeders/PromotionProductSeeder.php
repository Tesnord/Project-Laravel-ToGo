<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 40; $i++)
            DB::table('promotion_product')->insert([
                'product_id' => rand(1, 34),
                'promotion_id' => rand(1, 15),
            ]);
    }
}
