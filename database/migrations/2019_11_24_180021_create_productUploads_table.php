<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productUploads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product');
            $table->string('brand');
            $table->int('price');
            $table->string('category');
            $table->string('subCategory');
            $table->string('sex');
            $table->string('height');
            $table->string('width');
            $table->string('depth');
            $table->string('weight');
            $table->string('frontPicture');
            $table->string('picture2');
            $table->string('picture3');
            $table->int('discount')->nullable();
            $table->string('keywords');
            $table->string('story', 80);
            $table->string('description', 200);
            $table->string('author');
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
        Schema::dropIfExists('productUploads');
    }
}
