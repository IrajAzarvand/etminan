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
            $table->foreignId('cat_id')->nullable();
            $table->foreignId('ptype_id')->nullable();

            $table->string('images')->nullable();
            $table->timestamps();

            $table->foreign('cat_id')->references('id')->on('categories')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('ptype_id')->references('id')->on('p_types')
                ->cascadeOnUpdate()->cascadeOnDelete();
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