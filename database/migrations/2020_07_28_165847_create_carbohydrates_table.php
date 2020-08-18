<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarbohydratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carbohydrates', function (Blueprint $table) {
            $table->id();
            $table->integer('total_quantity');
            $table->integer('simple')->nullable();
            $table->integer('complex')->nullable();
            $table->unsignedBigInteger('food_id');
            $table->timestamps();

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
        Schema::dropIfExists('carbohydrates');
    }
}
