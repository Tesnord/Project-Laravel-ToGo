<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 10) as $i) {
            DB::table('property_values')->insert(array(
                'value' => "Значение $i",
                'product_id' => 1,
                'property_id' => $i,
            ));
        }
    }
}
