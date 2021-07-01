<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($m = 0; $m <= 10; $m++) {
            DB::table('banners')->insert([
                'title' => 'Скидки до 25%' . $m,
                'sub_title' => 'на батончики Jimmy',
                'button' => '',
                'min' => true,
            ]);
        }
    }
}
