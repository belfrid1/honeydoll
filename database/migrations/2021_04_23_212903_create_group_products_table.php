<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('group_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->tinyInteger('status')->default('0')->nullable();
            $table->tinyInteger('commissionrate')->nullable();
            $table->tinyInteger('productprice')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_products');
    }
}
