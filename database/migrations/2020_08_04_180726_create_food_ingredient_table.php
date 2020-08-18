<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_ingredient', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->unsignedBigInteger('ingredient_id');     
            $table->unsignedBigInteger('ingredient_measure_id');
            $table->unsignedBigInteger('food_id');        
            $table->timestamps();

            $table->foreign('ingredient_id')->references('id')->on('ingredients');
            $table->foreign('ingredient_measure_id')->references('id')->on('ingredient_measures');
            $table->foreign('food_id')->references('id')->on('foods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_ingredient');
    }
}
