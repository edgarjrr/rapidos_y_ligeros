<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->float('price',10,2)->nullable();
            $table->float('box_price',10,2)->nullable();
            $table->string('diet_name')->nullable();
            $table->integer('package_number')->nullable();
            $table->integer('piece_package')->nullable();
            $table->float('kcal')->nullable();
            $table->string('portion')->nullable();
            $table->string('portion_nutricionsas')->nullable();
            $table->string('image');
            $table->string('nutritional_table_image')->nullable();
            $table->text('nutritional_table')->nullable();
            $table->text('strategies')->nullable();
            $table->text('rules')->nullable();
            $table->text('exaggerate')->nullable();
            $table->text('risks')->nullable();
            $table->text('generals')->nullable();
            $table->text('equivalent')->nullable();
            $table->text('preparation')->nullable();
            $table->text('keywords')->nullable();
            $table->text('valid_fields')->nullable();
            $table->boolean('validated')->nullable();
            $table->integer('id_nut');
            $table->float('restaurant_price')->nullable();
            $table->string('preparation_time')->nullable();
            $table->integer('difficulty')->nullable();
            $table->integer('portability')->nullable();
            $table->string('nutritionist_name')->nullable();
            $table->unsignedBigInteger('product_presentation_id');
            $table->unsignedBigInteger('measure_id');
            $table->timestamps();

            $table->foreign('product_presentation_id')->references('id')->on('product_presentations');
            $table->foreign('measure_id')->references('id')->on('measures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
