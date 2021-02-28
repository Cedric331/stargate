<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planete extends Model
{
    protected $with = ['personnages'];

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
      'name', 'climat', 'pop', 'terrain'
   ];

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
      'updated_at', 'created_at', 'id'
   ];

   public function personnages()
   {
      return $this->hasMany(Personnage::class, 'planete_id', 'id');
   }
}
