<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes_steps', function (Blueprint $table) {
            $table->unsignedInteger('recipe_id');
            $table->foreign('recipe_id')->references('recipe_id')->on('recipes')->onDelete('cascade');
            $table->unsignedInteger('step_id');
            $table->foreign('step_id')->references('step_id')->on('steps')->onDelete('cascade');
            $table->primary(['step_id', 'recipe_id']);
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
        Schema::dropIfExists('recipes_steps');
    }
}
