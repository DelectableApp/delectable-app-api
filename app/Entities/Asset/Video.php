<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 08:35
 */

namespace App\Entities\Asset;


class Video
{
    public $timestamps = false;

    protected $table = 'videos';

    protected $primaryKey = 'video_id';

    protected $fillable = [
        'video_name',
        'video_length',
        'video_desc',
        'video_isValid',
        //FK
        'user_id',
        'image_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function setuser($user)
    {
        return $this->user()->sync($user);
    }
    public function setimage($image)
    {
        return $this->image()->sync($image);
    }
}