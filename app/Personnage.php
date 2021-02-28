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
      'name', 'height', 'gender', 'planete_id'
   ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'id', 'updated_at', 'created_at', 'planete_id'
  ];

   /**
     * Récupère la planète du personnage
     */
    public function planete()
    {
      return $this->belongsTo(Planete::class);
    }
}
