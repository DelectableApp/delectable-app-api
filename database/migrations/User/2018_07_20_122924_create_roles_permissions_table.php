<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**Table de liaison entre les roles et les permissions
 **/
class CreateRolesPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_permissions', function (Blueprint $table) {
            $table->unsignedInteger('role_id');
            $table->foreign('role_id')->references('role_id')->on('roles')->onDelete('cascade');
            $table->unsignedInteger('permission_id');
            $table->foreign('permission_id')->references('permission_id')->on('permissions')->onDelete('cascade');
            $table->primary(['role_id', 'permission_id']);
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
        Schema::dropIfExists('roles_permissions');
    }
}
