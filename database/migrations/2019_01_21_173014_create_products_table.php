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
            $table->integer('brand_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('sub_category_id')->unsigned();
            $table->integer('total_quantity')->unsigned();
            $table->integer('price');
            $table->integer('discounted_price')->nullable();
            $table->integer('weight_id');
            $table->integer('weight');
            $table->integer('offer')->default(0);
            $table->string('description')->nullable();
            $table->string('picture')->nullable();
            $table->integer('user_id');
            $table->string('slug');
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
