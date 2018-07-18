<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->increments('ingredient_id');
            $table->string('ingredient_name')->unique();
            $table->tinyInteger('ingredient_isValid');
            $table->nullableTimestamps();

            //FK
            $table->unsignedInteger('ingredient_type_id')->nullable();
            $table->foreign('ingredient_type_id')->references('ingredient_type_id')->on('ingredients_types')->onDelete('cascade');
            $table->unsignedInteger('image_id')->nullable();
            $table->foreign('image_id')->references('image_id')->on('images')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
}
