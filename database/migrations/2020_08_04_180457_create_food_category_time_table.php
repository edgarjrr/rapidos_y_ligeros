<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodCategoryTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_category_time', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('time_id');
            $table->unsignedBigInteger('food_category_id');            
            $table->timestamps();

            $table->foreign('time_id')->references('id')->on('times');
            $table->foreign('food_category_id')->references('id')->on('food_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_time');
    }
}
