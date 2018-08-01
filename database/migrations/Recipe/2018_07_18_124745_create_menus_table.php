<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**Table des menus
 * Contient l'enssemble des menus.
 * Relié à une table de liaison avec les users pour les menus réalisés à plusieurs
 **/
class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('menu_id');
            $table->string('menu_name')->unique();
            $table->string('menu_slug');
            $table->nullableTimestamps();

            //FK
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
        Schema::dropIfExists('menus');
    }
}
