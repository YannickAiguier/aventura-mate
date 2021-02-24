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
            $table->string('title', 100)->nullable(false)->unique();
            $table->text('description')->nullable(false);
            $table->decimal('price', $precision = 10, $scale = 0)->nullable(false);
            $table->integer('weight')->nullable(false);
            $table->decimal('vat',  4,  2)->nullable(false);
            $table->integer('stock')->nullable(false);
            $table->unsignedBigInteger('categories_id'); // crée champ
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
