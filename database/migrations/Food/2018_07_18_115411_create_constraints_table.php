<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

        /**Table des contrindication biologique ou médicale
         * Anciennement table allergies, changement de nom pour un point de vue sémentique:
         * Une personne peut être contrainte de ne pas manger un aliment sans pour autant être allergique
         * (personne sous traitement médicale)
         **/
class CreateConstraintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constraints', function (Blueprint $table) {
            $table->increments('constraint_id');
            $table->string('constraint_name')->unique();
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
        Schema::dropIfExists('constraints');
    }
}
