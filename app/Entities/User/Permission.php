<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 17/07/2018
 * Time: 14:08
 */

namespace App\Entities\User;



use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $primaryKey = 'permission_id';

    public $timestamps = true;

    protected $fillable = [
        'permission_name',
        'permission_test'
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_permissions', 'permission_id', 'role_id');
    }
}