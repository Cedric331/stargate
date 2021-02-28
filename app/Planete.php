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
}
