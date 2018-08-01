<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**Table des tags
 *
 **/
class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('tag_id');
            $table->string('tag_name');
            $table->nullableTimestamps();

            //FK
            $table->unsignedInteger('menu_id')->nullable();
            $table->foreign('menu_id')->references('menu_id')->on('menus')->onDelete('cascade');
            $table->unsignedInteger('recipe_id')->nullable();
            $table->foreign('recipe_id')->references('recipe_id')->on('recipes')->onDelete('cascade');
            $table->unsignedInteger('collection_id')->nullable();
            $table->foreign('collection_id')->references('collection_id')->on('collections')->onDelete('cascade');
            $table->unsignedInteger('category_id')->nullable();
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
