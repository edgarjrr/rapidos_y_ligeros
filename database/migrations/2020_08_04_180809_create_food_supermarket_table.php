<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodSupermarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_supermarket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_id');    
            $table->unsignedBigInteger('supermarket_id');        
            $table->timestamps();

            $table->foreign('food_id')->references('id')->on('foods');
            $table->foreign('supermarket_id')->references('id')->on('supermarkets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_supermarket');
    }
}
