<?php

use App\Entities\User\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**Table des utilisateurs
 **/
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_first_name');
            $table->string('user_last_name');
            $table->string('user_address')->nullable();
            $table->string('user_gender')->nullable();
            $table->string('user_birth_date')->nullable();
            $table->string('user_phone')->nullable();
            $table->string('user_email')->unique();
            $table->string('user_login')->unique();
            $table->string('user_description')->nullable();
            $table->string('user_slug')->nullable();
            $table->nullableTimestamps();
            $table->string('password');
            $table->rememberToken();

            //FK
            $table->unsignedInteger('country_id')->nullable();
            $table->foreign('country_id')->references('country_id')->on('countries')->onDelete('cascade');
            $table->unsignedInteger('language_id')->nullable();
            $table->foreign('language_id')->references('language_id')->on('languages')->onDelete('cascade');
            $table->unsignedInteger('role_id')->default(Role::USER);
            $table->foreign('role_id')->references('role_id')->on('roles')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
