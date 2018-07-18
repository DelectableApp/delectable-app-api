<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 17/07/2018
 * Time: 14:08
 */

namespace App\Entities\User;


class Permission
{
    public $timestamps = true;
    protected $fillable = [
        'permission_name',

    ];

}