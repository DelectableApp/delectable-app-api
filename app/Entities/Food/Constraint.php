<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 09:31
 */

namespace App\Entities\Food;


class Constraint
{
    public $timestamps = false;

    protected $table = 'constraints';

    protected $primaryKey = 'constraint_id';

    protected $fillable = [
        'constraint_name',
    ];
}