<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**Table des étapes
 * Contient l'enssemble des étapes d'une recette.
 * Le champ step_time représente la durée de l'étape
 * Le champ step_number représente le numéro de l'étape pour retrouver l'ordre dans la recette
 *
 **/
class CreateStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->increments('step_id');
            $table->string('step_name');
            $table->float('step_time');
            $table->text('step_description');
            $table->integer('step_number');
            $table->timestamps();

            //FK
            $table->unsignedInteger('recipe_id');
            $table->foreign('recipe_id')->references('recipe_id')->on('recipes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('steps');
    }
}
