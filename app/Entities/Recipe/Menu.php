<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 11:02
 */

namespace App\Entities\Recipe;


class Menu
{
    public $timestamps = false;

    protected $table = 'menus';

    protected $primaryKey = 'menu_id';

    protected $fillable = [
        'menu_name',
        'menu_slug',
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
