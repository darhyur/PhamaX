<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_brand', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned()->index();
            $table->integer('brand_id')->unsigned()->index();

            $table->foreign('admin_id')->references('id')->on('admins');
            $table->foreign('brand_id')->references('id')->on('brands');

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
        Schema::dropIfExists('admin_brand');
    }
}
