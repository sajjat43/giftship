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
            $table->string('user_id');
            $table->string('tran_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('Address');
            $table->string('total');
            $table->string('payment_method');
            $table->string('status')->default('pending');
            $table->string('payment_status')->default('pending');
            $table->integer('discount')->nullable()->default(00);
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
