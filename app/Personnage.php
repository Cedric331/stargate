<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
   protected $with = ['planete'];

    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
      'name', 'height', 'gender', 'planete_id'
   ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'id', 'updated_at', 'created_at'
  ];

      /**
     * Get the planetes that wrote the people.
     */
    public function planete()
    {
      return $this->belongsTo(Planete::class, 'planete_id');
    }
}
