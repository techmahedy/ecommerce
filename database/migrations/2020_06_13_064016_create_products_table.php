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
            $table->tinyInteger('colors_id');
            $table->tinyInteger('sizes_id');
            $table->tinyInteger('brands_id');
            $table->tinyInteger('categories_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description');
            $table->string('price');
            $table->tinyInteger('quantity');
            $table->tinyInteger('hit_count')->default(0);
            $table->string('image')->nullable();
            $table->string('code')->unique();
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
