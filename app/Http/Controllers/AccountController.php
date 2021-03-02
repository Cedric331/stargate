<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function index()
   {
      return view('auth.account');
   }

   public function delete()
   {
      // User::find(Auth::user()->id)->delete();


      return view('home',[
         'show' => true, 
         'type' => json_encode("success"),
         'message' => json_encode("Votre compte est supprimé")
         ]);
   }
}
