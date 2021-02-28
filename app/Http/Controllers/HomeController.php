<?php

namespace App\Http\Controllers;

use App\Planete;
use App\Personnage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


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

        return view('home');
    }
}
