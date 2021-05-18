<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($m = 1; $m < 22; $m++)
            DB::table('files')->insert([
                'src' => '/assets/images/catalog-img' . ($m) . '.jpg',
                'entity_type' => 'App\Models\Product',
                'entity_id' => $m,
            ]);

    }
// catalog-img
}
