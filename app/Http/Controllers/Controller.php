<?php

namespace App\Http\Controllers;

use App\Personnage;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function api()
    {
      $status = 200;
      $a = 1;
      while ($status != 404) {
         $response = Http::get('https://swapi.dev/api/people/'.$a);
         $status = $response->status();
         $result = $response->json();
         $a++;

         $url = explode('/',$result['homeworld']);

         $personnage = new Personnage;
         $personnage->name =  $result['name'];
         $personnage->height =  $result['height'];
         $personnage->gender =  $result['gender'];
         $personnage->planete_id =  $url[5];
         $personnage->save();
      }
    }
}
