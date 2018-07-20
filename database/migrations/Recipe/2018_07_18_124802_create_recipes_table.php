<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**Table des recettes
 * Contient l'enssemble des recettes.
 * Le champ isPublic signale si la recette est rendu publique ou si elle reste privée pour l'utilisateur(recette en cours de création)
 **/
class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('recipe_id');
            $table->string('recipe_name')->unique();
            $table->text('recipe_description');
            $table->tinyInteger('recipe_isPublic');
            $table->string('recipe_slug');
            $table->nullableTimestamps();

            //FK
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('image_id');
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
        Schema::dropIfExists('recipes');
    }
}
