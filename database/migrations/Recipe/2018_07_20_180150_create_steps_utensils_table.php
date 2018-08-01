<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**Table de liaison entre les étapes et les ustensils
 **/
class CreateStepsUtensilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps_utensils', function (Blueprint $table) {
            $table->unsignedInteger('step_id');
            $table->foreign('step_id')->references('step_id')->on('steps')->onDelete('cascade');
            $table->unsignedInteger('utensil_id');
            $table->foreign('utensil_id')->references('utensil_id')->on('utensils')->onDelete('cascade');
            $table->primary(['step_id', 'utensil_id']);
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
        Schema::dropIfExists('steps_utensils');
    }
}
