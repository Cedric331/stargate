<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planete extends Model
{
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
      'id', 'updated_at', 'created_at'
   ];
}
