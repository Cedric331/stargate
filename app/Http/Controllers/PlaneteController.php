<?php

namespace App\Http\Controllers;

use App\Planete;
use Illuminate\Http\Request;

class PlaneteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Planete::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Planete  $planete
     * @return \Illuminate\Http\Response
     */
    public function show(Planete $planete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Planete  $planete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planete $planete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Planete  $planete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planete $planete)
    {
        //
    }
}
