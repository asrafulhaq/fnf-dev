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
            $table->string('name');
            $table->string('slug')-> unique();
            $table->integer('regular_price');
            $table->integer('sale_price') -> nullable() -> default(0);
            $table->integer('shiping_cost') -> nullable() -> default(0);
            $table->integer('stock') -> nullable() -> default(0);
            $table->text('desc');
            $table->string('status');
            $table->string('product_image');
            $table->string('product_gallery');
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
