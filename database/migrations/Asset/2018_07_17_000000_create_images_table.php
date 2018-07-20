<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**Table des images
 * Contient l'enssemble des images.
 * Un champ user_id est présent pour identifier le user emmeteur de l'image.
 * L'image du user(photo de profil) est quand à elle référencée dans le champ user_avatar de la table users
 * Le champ isValid permet de signaler si l'image à été "vérifiée"(par défaut, non vérifiée)
 **/

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('image_id');
            $table->string('image_name');
            $table->string('image_preview_url');
            $table->string('image_original_url');
            $table->string('image_large_url');
            $table->string('image_medium_url');
            $table->string('image_small_url');
            $table->string('image_tiny_url');
            $table->text('image_desc')->nullable();
            $table->tinyInteger('image_isValid')->default(0);
            $table->nullableTimestamps();

            //FK
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }

}
