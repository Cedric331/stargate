@extends('layouts.app')

@section('content')
<section>
   <div class="card text-white">
     <img src="{{ asset('image/fond.jpg') }}" class="img-fluid"/>
      <div class="card-img-overlay text-center mt-5">
        <strong class="card-title">
         @if (isset($show) && $show == true)
        
             <notification :showvue="{{ $show }}" :type="{{ $type }}" :message="{{ $message }}"></notification>
         @endif
            
         <h1 class="h1-reponsive text-white text-uppercase font-weight-bold mb-0"><strong>API Star Wars</strong></h1>
         <a class="btn btn-light mt-4" href="{{ route('docs') }}">{{ __('Comment utiliser l\'API') }}</a>
      </strong>
      </div>
    </div>
</section>


<div class="container my-5">

   <section class="">
     <h3 class="text-center font-weight-bold mb-5">{{ __('Information') }}</h3>
      <div class="row">
       <div class="col-md-4 mb-4">
         <div class="card">
           <div class="view overlay">
             <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20(49).jpg" class="card-img-top" alt="">
             <a>
               <div class="mask rgba-white-slight waves-effect waves-light"></div>
             </a>
           </div>

           <div class="card-body">
             <h4 class="card-title"><strong>{{ __('Fonctionnement') }}</strong></h4>
             <hr>
             <p class="card-text mb-3">Il suffit de <a href="{{ route('register') }}">créer un compte</a> pour ensuite générer une token, une fois le
                token généré vous pouvez effectuer des requêtes.
                Plus d'information sur l'utilisation de l'API dans la <a href="{{ route('docs') }}">documentation</a>
             </p>
           </div>
         </div>
       </div>

       <div class="col-md-4 mb-4">
         <div class="card">
           <div class="view overlay">
             <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20(33).jpg" class="card-img-top" alt="">
             <a>
               <div class="mask rgba-white-slight waves-effect waves-light"></div>
             </a>
           </div>
           <div class="card-body">
             <h4 class="card-title"><strong>{{ __('Données') }}</strong></h4>
             <hr>
             <p class="card-text mb-3">Les données fournies par cette API proviennent du site <a href="https://swapi.dev/" target="_blank">https://swapi.dev/</a>
             </p>
           </div>
         </div>
       </div>



     </div>
   </section>
 </div>

@endsection
