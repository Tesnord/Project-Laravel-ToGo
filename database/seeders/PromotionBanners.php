<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionBanners extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 19; $i++)
            DB::table('promotion_banners')->insert([
                'promotion_id' => rand(1, 15),
                'banner_id' => $i,
            ]);
    }
}
