<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cell');
            $table->string('email') -> nullable();
            $table->string('dist') -> nullable();
            $table->string('address') -> nullable();
            $table->string('payment_system') ;
            $table->string('order_status');
            $table->string('cart_id') -> nullable() ;
            $table->string('total_amount');
            $table->string('customer_ip');
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
        Schema::dropIfExists('orders');
    }
}
