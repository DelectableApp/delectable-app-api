<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 10:58
 */

namespace App\Entities\Recipe;


class Category
{
    public $timestamps = false;

    protected $table = 'categories';

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name',
        'category_frequency',
        'category_description',
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

