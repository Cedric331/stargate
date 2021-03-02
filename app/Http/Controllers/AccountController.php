<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

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
      User::find(Auth::user()->id)->delete();

      return view('home',[
         'show' => true, 
         'type' => json_encode("success"),
         'message' => json_encode("Votre compte est supprimé")
         ]);
   }

   public function information()
   {
      return view('auth.information');
   }

   public function update(Request $request)
   {
      $request->validate([
         'name' => ['required', 'string', 'max:255', 'alpha_dash'],
      ]);

      if ($request->email != Auth::user()->email) {
         $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
         ]);
      }

      $user = User::findOrFail(Auth::user()->id);
      $user->email = $request->email;
      $user->name = $request->name;
      $user->save();

      return response()->json($request->name, 200);
   }

}
