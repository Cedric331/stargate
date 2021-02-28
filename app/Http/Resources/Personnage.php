<?php

namespace App\Http\Resources;

use App\Http\Resources\Planete;
use Illuminate\Http\Resources\Json\JsonResource;

class Personnage extends JsonResource
{

   /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'personnages';

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
         'height' => $this->height,
         'gender' => $this->gender,
         'planete d\'origine' => new Planete($this->planete),
     ];
    }
}
