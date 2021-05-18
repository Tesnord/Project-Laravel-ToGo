<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 40; $i++)
            DB::table('description_product')->insert([
                'product_id' => rand(6, 34),
                'description_id' => rand(1, 3),
            ]);
    }
}
