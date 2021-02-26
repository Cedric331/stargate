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
         return response()->json('Action non autorisé', 401, $headers);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
