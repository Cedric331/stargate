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

      notify()->success('Votre compte est supprimé!');

      return redirect()->route('home');
   }
}
