<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($m = 1; $m <= 15; $m++)
            DB::table('brands')->insert([
                'name' => 'brand'. $m,
                'firm' => 'ООО «Мир здоровья»',
            ]);
    }
}
