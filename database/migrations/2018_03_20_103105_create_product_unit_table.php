<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_unit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->index();
            $table->integer('unit_id')->unsigned()->index();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('unit_id')->references('id')->on('units');

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
        Schema::dropIfExists('product_unit');
    }
}
