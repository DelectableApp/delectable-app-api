<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus_collections', function (Blueprint $table) {
            $table->unsignedInteger('menu_id');
            $table->foreign('menu_id')->references('menu_id')->on('menus')->onDelete('cascade');
            $table->unsignedInteger('collection_id');
            $table->foreign('collection_id')->references('collection_id')->on('collections')->onDelete('cascade');
            $table->primary(['menu_id', 'collection_id']);
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
        Schema::dropIfExists('menus_collections');
    }
}
