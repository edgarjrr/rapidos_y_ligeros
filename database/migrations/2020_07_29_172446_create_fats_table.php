<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fats', function (Blueprint $table) {
            $table->id();
            $table->integer('total_quantity');
            $table->integer('saturated_fats')->nullable();
            $table->integer('unsaturated_fats')->nullable();
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
        Schema::dropIfExists('fats');
    }
}
