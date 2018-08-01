<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**Table des type d'ingrédients
 * Contient les différents type d'ingrédients (viande,légume...)
 **/
class CreateIngredientsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_types', function (Blueprint $table) {
            $table->increments('ingredient_type_id');
            $table->string('ingredient_type_name')->unique();
            $table->nullableTimestamps();

            //FK
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
        Schema::dropIfExists('ingredients_types');
    }
}
