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
        for ($m = 12; $m <= 19; $m++)
            DB::table('files')->insert([
                'src' => '/assets/images/banner'. (rand(1,2)) .'.jpg',
                'entity_type' => 'App\Models\Banner',
                'entity_id' => $m,
                'entity_var' => ''
            ]);

    }
}
