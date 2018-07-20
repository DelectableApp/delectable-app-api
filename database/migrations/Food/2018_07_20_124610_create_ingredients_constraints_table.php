<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**Table de liaison entre les ingrédient et les contrindications
 **/
class CreateIngredientsConstraintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_constraints', function (Blueprint $table) {
            $table->unsignedInteger('ingredient_type_id');
            $table->foreign('ingredient_type_id')->references('ingredient_type_id')->on('ingredients_types')->onDelete('cascade');
            $table->unsignedInteger('constraint_id');
            $table->foreign('constraint_id')->references('constraint_id')->on('constraints')->onDelete('cascade');
            $table->primary(['ingredient_type_id', 'constraint_id']);
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
        Schema::dropIfExists('ingredients_constraints');
    }
}
