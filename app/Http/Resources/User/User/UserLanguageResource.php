<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 01/08/2018
 * Time: 08:19
 */

namespace App\Http\Resources\User\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserLanguageResource extends JsonResource
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
            'id' => $this->language_id,
            'name' => $this->language_name,
            'read_direction' => $this->language_read_direction,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            /*'links' => [
                'self' => route('single_city', ['id' => $this->city_id]),
                'collection' => route('cities', []),
            ],*/
        ];
    }
}