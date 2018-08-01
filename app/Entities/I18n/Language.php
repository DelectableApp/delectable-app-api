<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 7/15/2018
 * Time: 5:53 PM
 */

namespace App\Entities\I18n;


use App\User;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public $timestamps = true;
    protected $primaryKey = 'language_id';
    protected $fillable = [
        'language_name',
        'language_read_direction',
    ];
}