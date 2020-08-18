<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodCategoryFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_category_food', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_category_id');    
            $table->unsignedBigInteger('food_id');        
            $table->timestamps();

            $table->foreign('food_category_id')->references('id')->on('food_categories');
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
        Schema::dropIfExists('category_food');
    }
}
