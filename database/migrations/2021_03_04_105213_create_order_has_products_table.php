<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderHasProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_has_products', function (Blueprint $table) {
            $table->integer('quantity')->nullable(false);
            $table->decimal('price', $precision = 10, $scale = 0)->nullable(false);
            $table->string('title', 100)->nullable(false);
            $table->decimal('vat',  4,  2)->nullable(false);
            $table->integer('weight')->nullable(false);
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('id')->on('products');
            $table->unsignedBigInteger('orders_id');
            $table->foreign('orders_id')->references('id')->on('orders');
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
        Schema::dropIfExists('order_has_products');
    }
}
