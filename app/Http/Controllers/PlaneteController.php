<?php

namespace App\Http\Controllers;

use App\Planete;
use Illuminate\Http\Request;

class PlaneteController extends Controller
{

   public function __construct()
   {
      $this->middleware('auth:api');
   }

    /**
     * Retourne l'ensemble des planètes
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Planete::all();
    }

      /**
     * Permet de récupérer les planètes via le nom
     *
     * @param [string] $name
     * @return string
     */
    public function showName($name)
    {

       $planetes = Planete::where('name','LIKE','%'.$name.'%')->get();

       if ($planetes->count() == 0) {
          return response()->json('Aucun résultat', 404);
       } 
       else 
       {
         return response()->json($planetes, 200);
       }
       
    }
}
