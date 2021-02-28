<?php

namespace App\Http\Controllers;

use App\Planete;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   //  public function __construct()
   //  {
   //      $this->middleware('auth');
   //  }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $planete = Planete::find(1);
      dd($planete);
        return view('home');
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function docs()
    {

        return view('docs.index');
    }
}
