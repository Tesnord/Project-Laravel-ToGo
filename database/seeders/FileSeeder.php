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
        for ($m = 1; $m <= 15; $m++)
            DB::table('files')->insert([
                'src' => '/assets/images/action-img' . rand(1, 4) . '.jpg',
                'entity_type' => 'App\Models\Promotions',
                'entity_id' => $m,
            ]);

    }
// catalog-img
}
