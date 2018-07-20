<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepsIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps_ingredients', function (Blueprint $table) {
            $table->unsignedInteger('step_id');
            $table->foreign('step_id')->references('step_id')->on('steps')->onDelete('cascade');
            $table->unsignedInteger('ingredient_id');
            $table->foreign('ingredient_id')->references('ingredient_id')->on('ingredients')->onDelete('cascade');
            $table->primary(['step_id', 'ingredient_id']);
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('steps_ingredients');
    }
}
