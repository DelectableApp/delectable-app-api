<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 7/15/2018
 * Time: 4:39 PM
 */

namespace App\Entities\I18n;


class Continent
{
    public $timestamps = true;
    protected $fillable = [
        'continent_name',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}