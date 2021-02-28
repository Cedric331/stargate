<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Planete extends JsonResource
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
         'name' => $this->name,
         'population' => $this->pop,
         'climat' => $this->climat,
         'terrain' => $this->terrain,
     ];
    }
}
