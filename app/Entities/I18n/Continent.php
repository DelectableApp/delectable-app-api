<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 7/15/2018
 * Time: 4:39 PM
 */

namespace App\Entities\I18n;


use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    public $timestamps = true;
    protected $primaryKey = 'continent_id';
    protected $fillable = [
        'continent_name',
    ];

}