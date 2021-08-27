<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_id')->unsigned();
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->integer('choice_id')->unsigned()->nullable();
            $table->string('productname');
            $table->integer('productprice');
            $table->longText('producturl');
            $table->string('productpicture1');
            $table->string('productpicture2');
            $table->string('productpicture3');
            $table->string('productmenu');
            $table->string('productgender');
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
        Schema::dropIfExists('products');
    }
}
