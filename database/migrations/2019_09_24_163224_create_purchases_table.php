<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('store_id')->unsigned();
            $table->foreign('store_id')->references('id')->on('stores');  
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');  
            $table->integer('quantity_products')->default(0);
            $table->decimal('cost_shipping')->default(0);
            $table->decimal('subtotal')->default(0);
            $table->decimal('total')->default(0);
            $table->string('payment_method');
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
