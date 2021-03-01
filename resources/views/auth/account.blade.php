@extends('layouts.app')

@section('content')

<div class="container my-5">


   <section class="text-center">
 
     <h3 class="font-weight-bold dark-grey-text pb-2 mb-4">{{ __('Mes Tokens') }}</h3>
     <passport-personal-access-tokens></passport-personal-access-tokens>
     <hr class="my-5">
     <div class="row">
       <div class="col-lg-4 col-md-12 mb-4">
 
         <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(6).jpg');">
 
           <div class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">
 
             <div class="card-body">
               <h5>Basic</h5>

               <div class="price pt-0">
                 <h2 class="number mb-0">10</h2>
               </div>
 
               <ul class="striped mb-0">
                 <li>
                   <p><strong>1</strong> project</p>
                 </li>
                 <li>
                   <p><strong>100</strong> components</p>
                 </li>
                 <li>
                   <p><strong>150</strong> features</p>
                 </li>
                 <li>
                   <p><strong>200</strong> members</p>
                 </li>
                 <li>
                   <p><strong>250</strong> messages</p>
                 </li>
               </ul>
               <a class="btn btn-outline-white">Buy now</a>
 
             </div>
 
           </div>
 
         </div>
 
       </div>
       <div class="col-lg-4 col-md-6 mb-4">
 
         <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(6).jpg');">
 
           <div class="text-white text-center pricing-card d-flex align-items-center rgba-teal-strong py-3 px-3 rounded">
 
             <div class="card-body">
               <h5>Pro</h5>
               <div class="price pt-0">
                 <h2 class="number mb-0">20</h2>
               </div>
 
               <ul class="striped mb-0">
                 <li>
                   <p><strong>3</strong> project</p>
                 </li>
                 <li>
                   <p><strong>200</strong> components</p>
                 </li>
                 <li>
                   <p><strong>250</strong> features</p>
                 </li>
                 <li>
                   <p><strong>300</strong> members</p>
                 </li>
                 <li>
                   <p><strong>350</strong> messages</p>
                 </li>
               </ul>
               <a class="btn btn-outline-white">Buy now</a>
 
             </div>
 
           </div>
 
         </div>
 
       </div>
       <div class="col-lg-4 col-md-6 mb-4">
 
         <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(6).jpg');">
           <div class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">
             <div class="card-body">
               <h5>Enterprise</h5>
               <div class="price pt-0">
                 <h2 class="number mb-0">30</h2>
               </div>
               <ul class="striped mb-0">
                 <li>
                   <p><strong>5</strong> project</p>
                 </li>
                 <li>
                   <p><strong>300</strong> components</p>
                 </li>
                 <li>
                   <p><strong>350</strong> features</p>
                 </li>
                 <li>
                   <p><strong>400</strong> members</p>
                 </li>
                 <li>
                   <p><strong>450</strong> messages</p>
                 </li>
               </ul>
               <a class="btn btn-outline-white"> Buy now</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
 </div>

@endsection