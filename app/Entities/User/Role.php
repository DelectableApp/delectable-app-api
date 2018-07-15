<?php
namespace App\Entities\User;
use Illuminate\Database\Eloquent\Model;
class Role extends Model
{
    const ADMIN = 1;
    const ADMIN_LABEL = 'ADMIN';
    const MODERATEUR = 2;
    const MODERATEUR_LABEL = 'MODERATEUR';
    const CONTRIBUTEUR = 4;
    const CONTRIBUTEUR_LABEL = 'CONTRIBUTEUR';
    const VERIFIEDUSER = 5;
    const VERIFIEDUSER_LABEL = 'VERIFIEDUSER';
    const USER = 6;
    const USER_LABEL = 'USER';

    public $timestamps = true;
    protected $table = 'roles';
    protected $primaryKey = 'role_id';
}