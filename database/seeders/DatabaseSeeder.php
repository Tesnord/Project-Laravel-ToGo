<?php

namespace Database\Seeders;

use App\Models\File;
use App\Models\Product;
use App\Models\Property;
use App\Models\PropertyValue;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Schema::disableForeignKeyConstraints();

        PropertyValue::truncate();
        Property::truncate();
        File::truncate();
        Product::truncate();

        $s_product = new ProductSeeder();
        $s_product->run();

        $s_file = new FileSeeder();
        $s_file->run();

        $s_property = new PropertySeeder();
        $s_property->run();

        $s_property_value = new PropertyValueSeeder();
        $s_property_value->run();

        Schema::enableForeignKeyConstraints();
    }
}
