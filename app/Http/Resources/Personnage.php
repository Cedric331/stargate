<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Personnage extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return [
         'id' => $this->id,
         'lastname' => $this->lastname,
         'firstname' => $this->firstname,
         'age' => $this->age,
         'species' => $this->species,
         'faction' => $this->faction,
         'actor' => $this->actor,
         'image' => $this->image,
         
     ];
    }
}
