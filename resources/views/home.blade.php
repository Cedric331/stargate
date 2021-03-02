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
            
         <h1 class="h1-reponsive text-white text-uppercase font-weight-bold mb-0"><strong>Star Wars</strong></h1>
         <a class="btn btn-light mt-4">{{ __('Comment utiliser l\'API') }}</a>
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
             <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk
               of the card's
               content.
             </p>
             <p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i>
               27/08/2019</p>
             <p class="font-small grey-text mb-0">Anna Smith</p>
             <p class="text-right mb-0 font-small font-weight-bold"><a>read more <i class="fas fa-angle-right"></i></a></p>
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
             <h4 class="card-title"><strong>{{ __('Service') }}</strong></h4>
             <hr>
             <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk
               of the card's
               content.
             </p>
             <p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i>
               27/08/2019</p>
             <p class="font-small grey-text mb-0">Anna Smith</p>
             <p class="text-right mb-0 font-small font-weight-bold"><a>read more <i class="fas fa-angle-right"></i></a></p>
           </div>
         </div>
       </div>
       <div class="col-md-4 mb-4">
          <div class="card">
            <div class="view overlay">
             <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20(84).jpg" class="card-img-top" alt="">
             <a>
               <div class="mask rgba-white-slight waves-effect waves-light"></div>
             </a>
           </div>

           <div class="card-body">
             <h4 class="card-title"><strong>{{ __('Support') }}</strong></h4>
             <hr>
             <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk
               of the card's
               content.
             </p>
             <p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i>
               27/08/2019</p>
             <p class="font-small grey-text mb-0">Anna Smith</p>
             <p class="text-right mb-0 font-small font-weight-bold"><a>read more <i class="fas fa-angle-right"></i></a></p>
           </div>
         </div>
       </div>

     </div>
   </section>
 </div>

@endsection
