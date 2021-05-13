<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 4; $i++) {
            DB::table('categories')->insert([
                'parent_id' => '21',
                'name' => 'category-'.$i,
                'slug_category' => 'category-'.$i,
            ]);
        }
    }
}
