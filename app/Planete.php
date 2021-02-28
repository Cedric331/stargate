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
      'updated_at', 'created_at'
   ];

   public function personnages()
   {
      return $this->belongsTo(Personnage::class);
   }
}
