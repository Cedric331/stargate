@extends('layouts.app')

@section('content')

<div class="container my-5">


   <section class="text-center">
 
     <h3 class="font-weight-bold dark-grey-text pb-2 mb-4">{{ __('Mes Tokens') }}</h3>
     <passport-personal-access-tokens></passport-personal-access-tokens>
     <hr class="my-5">
     <div class="row">

      <div class="col-lg-6 col-md-12 mb-4">
         <a href="#">
            <div class="card card-image" style="background-image: url('./image/speeder.jpg');background-size: cover;background-position: bottom;">
              <div class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">
                <div class="card-body">
                  <h5 class="text-dark"><strong>{{ __('Supprimer mon compte') }}</strong></h5>
                </div>
              </div>
            </div>
         </a>
       </div>

       <div class="col-lg-6 col-md-12 mb-4">
         <div class="card card-image" style="background-image: url('./image/bb8.jpg');background-size: cover;background-position: right;">
           <div class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">
             <div class="card-body">
               <h5 class="text-dark"><strong>{{ __('Mes Informations') }}</strong></h5>
             </div>
           </div>
         </div>
       </div>


     </div>
   </section>
 </div>

@endsection