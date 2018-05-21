<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('product_code',10)->unique();
            $table->longText('product_description');
            $table->string('image')->nullable();
            $table->integer('brand_id')->unsigned();
            $table->timestamps();
            $table->softDeletes()->nullable();
            $table->foreign('brand_id')->references('id')->on('brands');

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
