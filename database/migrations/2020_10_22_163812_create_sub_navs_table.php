<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubNavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_navs', function (Blueprint $table) {
            $table->id();
            $table->string('main_nav');
            $table->string('SubNav');
            $table->string('url')->nullable();
            $table->timestamps();

            $table->foreign('main_nav')->references('MainNav')->on('main_navs')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_navs');
    }
}
