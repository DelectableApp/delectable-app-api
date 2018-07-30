<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 08:40
 */

namespace App\Entities\Food;


class Diet
{
    public $timestamps = false;

    protected $table = 'diets';

    protected $primaryKey = 'diet_id';

    protected $fillable = [
        'diet_name',
    ];

}