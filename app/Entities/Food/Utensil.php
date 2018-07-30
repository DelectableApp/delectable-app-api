<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 10:11
 */

namespace App\Entities\Food;


class Utensil
{
    public $timestamps = false;

    protected $table = 'utensils';

    protected $primaryKey = 'utensil_id';

    protected $fillable = [
        'utensil_name',
        //FK
        'image_id',
    ];

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
    public function setimage($image)
    {
        return $this->image()->sync($image);
    }
}