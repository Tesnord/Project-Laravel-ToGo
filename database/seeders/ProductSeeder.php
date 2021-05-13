<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 6; $i++)
            DB::table('products')->insert([
                'vendor_code' => rand(0000000, 9999999),
                'title' => 'Манго Тайское Премиум (1 шт 300 гр)'.$i,
                'desc_title' => 'Цена за фасованный товар указана с учетом оптимально возможного веса фасовки.',
                'weight' => rand(1, 9).'00',
            ]);
    }
}
