@extends('layouts.app')

@section('content')

<div class="container my-5">


    <section class="text-center">

        <passport-personal-access-tokens></passport-personal-access-tokens>
        <hr class="mt-5">
        <div class="row d-flex justify-content-around">


            <div class="card card-image col-lg-5 col-sm-8 btn-account mt-5"
                style="background-image: url('./image/bb8.jpg');background-size: cover;background-position: right;">
                <a href="#">
                    <div
                        class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">
                        <div class="card-body">
                            <h5 class="text-dark"><strong>{{ __('Mes Informations') }}</strong></h5>
                        </div>
                    </div>
                </a>
            </div>


            <div class="card card-image col-lg-5 col-sm-8 btn-account mt-5"
                style="background-image: url('./image/speeder.jpg');background-size: cover;background-position: bottom;">
                  <a type="button" data-toggle="modal" data-target="#modalConfirmDelete">
                    <div
                        class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">
                        <div class="card-body">
                            <h5 class="text-dark"><strong>{{ __('Supprimer mon compte') }}</strong></h5>
                        </div>
                    </div>
                  </a>
            </div>

        </div>
    </section>
</div>

 
 <!--Modal: modalConfirmDelete-->
 <div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
     <!--Content-->
     <div class="modal-content text-center">
       <!--Header-->
       <div class="modal-header d-flex justify-content-center">
         <p class="heading">{{ __('Voulez-vous supprimer votre compte?') }}</p>
       </div>
       <div class="modal-footer flex-center">
          <form action="{{ route('account-delete') }}" method="POST">
             @method('DELETE')
             @csrf
            <button type="submit" class="btn  btn-outline-danger">{{ __('Oui') }}</button>
          </form>
         <a type="button" class="btn btn-danger waves-effect" data-dismiss="modal">{{ __('Annuler') }}</a>
       </div>
     </div>
   </div>
 </div>

@endsection
