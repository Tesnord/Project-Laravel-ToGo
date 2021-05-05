<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($m = 1; $m < 10; $m++)
            DB::table('files')->insert([
                'src' => '/assets/images/card-img' . rand(1, 5) . '.jpg',
                'entity_id' => rand(1, 5),
                'entity_type' => 'App/Model/Review'
            ]);

    }
}
