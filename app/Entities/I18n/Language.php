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
    protected $fillable = [
        'language_name',
        'language_read_direction',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}