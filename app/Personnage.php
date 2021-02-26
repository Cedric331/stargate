<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
      'lastname', 'firstname', 'age', 'species', 'faction', 'actor', 'image'
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