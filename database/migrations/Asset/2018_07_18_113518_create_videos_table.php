<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**Table des videos
 * Contient l'enssemble des videos.
 * Un champ user_id est présent pour identifier le user emmeteur de la video.
 * Le champ isValid permet de signaler si la video à été "vérifiée"(par défaut, non vérifiée)
 * Le champ image_id représente l'image de mignature de la video
 **/
class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('video_id');
            $table->string('video_name');
            $table->float('video_length');
            $table->string('video_ogg');
            $table->string('video_webm');
            $table->string('video_mp4');
            $table->text('video_desc');
            $table->tinyInteger('video_isValid')->default(0);
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
        Schema::dropIfExists('Asset');
    }
}
