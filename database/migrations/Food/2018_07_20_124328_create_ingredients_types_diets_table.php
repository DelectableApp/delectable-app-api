<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**Table de liaison entre les type d'ingrédients et les régimes
 **/
class CreateIngredientsTypesDietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_types_diets', function (Blueprint $table) {
            $table->unsignedInteger('ingredient_type_id');
            $table->foreign('ingredient_type_id')->references('ingredient_type_id')->on('ingredients_types')->onDelete('cascade');
            $table->unsignedInteger('diet_id');
            $table->foreign('diet_id')->references('diet_id')->on('diets')->onDelete('cascade');
            $table->primary(['ingredient_type_id', 'diet_id']);
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
        Schema::dropIfExists('ingredients_types_diets');
    }
}
