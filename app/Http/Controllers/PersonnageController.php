<?php

namespace App\Http\Controllers;

use App\Personnage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonnageController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Personnage::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($this->user()->can('post')){
         
      $validator = Validator::make($request->all(), [
            'firstname' => 'required|unique:personnages|string|max:255',
            'lastname' => 'nullable|max:255',
            'age' => 'nullable|numeric|max:10',
            'species' => 'nullable|max:255',
            'faction' => 'required|string|max:255',
            'actor' => 'nullable|max:255',
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showName($name)
    {
       $personnage = Personnage::where('firstname', $name)->get();

       if ($personnage->count() == 0) {
          return response()->json('Aucun résultat', 404);
       } 
       else 
       {
          return response()->json($personnage, 200);
       }
       
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showFaction($faction)
    {
       $personnages = Personnage::where('faction', $faction)->get();

       if ($personnages->count() == 0) {
          return response()->json('Aucun résultat', 404);
       } 
       else 
       {
          return response()->json($personnages, 200);
       }
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
      if($this->user()->can('post'))
      {

         $validator = Validator::make($request->all(), [
               'lastname' => 'nullable|max:255',
               'age' => 'nullable|numeric|max:9999',
               'species' => 'nullable|max:255',
               'faction' => 'required|string|max:255',
               'actor' => 'nullable|max:255',
         ]);
   
         if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
            }

         $personnage = Personnage::where('firstname', $name)->first();
            $personnage->lastname = $request->lastname;
            $personnage->age = $request->age;
            $personnage->faction = $request->faction;
            $personnage->species = $request->species;
            $personnage->actor = $request->actor;
            $personnage->save();

            return response()->json($personnage, 200);

      }
      else 
      {
         return response()->json('Action non autorisé', 401);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($name)
    {
      if($this->user()->can('post'))
      {
         Personnage::where('firstname', $name)->delete();

         return response()->json('personnage supprimé', 200);
      }
      else {
         return response()->json('Action non autorisé', 401);
      }
    }
}
