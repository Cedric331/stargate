<?php

namespace App\Http\Controllers;

use App\Personnage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class PersonnageController extends Controller
{
      /**
     * Récupère l'ensemble des personnages
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Personnage::all();
    }

    /**
     * Stock un nouveau personnage ans la base de donnée
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(Gate::check('post', [Auth::user()])){
         
      $validator = Validator::make($request->all(), [
            'name' => 'required|unique:personnages|string|max:255',
            'height' => 'required',
            'planete' => 'nullable',
            'gender' => 'required|max:255',
      ]);

      if ($validator->fails()) {
         return response()->json($validator->errors(), 422);
     }


      $personnage = Personnage::create($request->all());

      return response()->json($personnage, 200);
      } 
      else 
      {
         return response()->json('Action non autorisé', 401);
      }
    }

    /**
     * Permet de récupérer les personnages via le nom
     *
     * @param [string] $name
     * @return string
     */
    public function showName($name)
    {
       $personnage = Personnage::where('name','LIKE','%'.$name.'%')->get();

       if ($personnage->count() == 0) {
          return response()->json('Aucun résultat', 404);
       } 
       else 
       {
          return response()->json($personnage, 200);
       }
       
    }

   /**
    * Permet de récupérer les personnages via la planète
    *
    * @param [string] $planete
    * @return void
    */
    public function showPlanete($planete)
    {
       $personnages = Personnage::where('planete', $planete)->get();

       if ($personnages->count() == 0) {
          return response()->json('Aucun résultat', 404);
       } 
       else 
       {
          return response()->json($personnages, 200);
       }
       
    }

    /**
     * Permet de modifier un personnage de la base de donnée avec son nom
     *
     * @param  \Illuminate\Http\Request  $request
     * @param [string] $name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
      if(Gate::check('post', [Auth::user()])){

         $validator = Validator::make($request->all(), [
            'name' => 'required|unique:personnages|string|max:255',
            'height' => 'required',
            'planete' => 'nullable',
            'gender' => 'required|max:255',
         ]);
   
         if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
            }

         $personnage = Personnage::where('name', $name)->first();
         $personnage->name =  $request->name;
         $personnage->height =  $request->height;
         $personnage->gender =  $request->gender;
         $personnage->planete_id =  $request->planete;
         $personnage->save();

            return response()->json($personnage, 200);

      }
      else 
      {
         return response()->json('Action non autorisé', 401);
      }
    }

    /**
     * Supprime un personnage
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function destroy($name)
    {
      if(Gate::check('post', [Auth::user()])){

         Personnage::where('name','LIKE','%'.$name.'%')->delete();


         return response()->json('personnage supprimé', 200);
      }
      else 
      {
         return response()->json('Action non autorisé', 401);
      }
    }
}
