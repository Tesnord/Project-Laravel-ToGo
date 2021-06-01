<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameToPromotionProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_promotions', function (Blueprint $table) {
            $table->renameColumn('product_id', 'products_id');
            $table->renameColumn('promotion_id', 'promotions_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('promotion_product', function (Blueprint $table) {
            //
        });
    }
}
