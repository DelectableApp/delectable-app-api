<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 10:53
 */

namespace App\Entities\Recipe;


class Collection
{
    public $timestamps = false;

    protected $table = 'collections';

    protected $primaryKey = 'collection_id';

    protected $fillable = [
        'collection_name',
        'collection_slug',
        //FK
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