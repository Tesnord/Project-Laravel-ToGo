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
        for ($m = 1; $m < 6; $m++)
            DB::table('files')->insert([
                'src' => '/assets/images/card-img' . $m . '.jpg',
                'product_id' => 1,
            ]);

    }
}
