<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 17/07/2018
 * Time: 14:58
 */

namespace App\Entities\Asset;


use Illuminate\Foundation\Auth\User;

class Image
{
    public $timestamps = false;

    protected $table = 'images';

    protected $primaryKey = 'image_id';

    protected $fillable = [
        'image_name',
        'image_desc',
        'image_isValid',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function setuser($user)
    {
        return $this->user()->sync($user);
    }

}