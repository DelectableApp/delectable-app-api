<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 01/08/2018
 * Time: 10:39
 */

namespace App\Http\Resources\I18n\Country;


use Illuminate\Http\Resources\Json\JsonResource;

class CountryContinentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id' => $this->continent_id,
            'name' => $this->continent_name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            /*'links' => [
                'self' => route('single_city', ['id' => $this->city_id]),
                'collection' => route('cities', []),
            ],*/
        ];
    }
}