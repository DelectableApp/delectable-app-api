<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAvatarToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**Ajout de la foreign key user_avatar
         Necessité d'une migration à part car existence d'une inter dépendance entre la table images et users
         * en effet, images possède une foreign key user_id et users possède une foreign key image_id (user_avatar)
         */
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('user_avatar')->nullable();
            $table->foreign('user_avatar')->references('image_id')->on('images')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('user_avatar');
        });
    }
}
