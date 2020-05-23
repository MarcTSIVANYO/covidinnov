@extends('layouts.frontend.base') 
@section('title','Modifier votre mot de passe')
@section('content')

    <!-- section --> 
    <div class="innerpage_banner">
      <div class="container">
         <div class="row"> 
            <div class="col-md-12">
               <h2>Modifier votre mot de passe</h2>
            </div>
         </div>
      </div>
    </div>
    <!-- end section -->

    <!-- section -->
    <div id="contact" class="contact-box">
        <div class="container">
             <div class="col-md-8">
                @if(Session::has('error_message'))
                  <div class="alert alert-danger alert-dismissible" role="alert" data-plugin="alertify">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    {{ Session::get('error_message') }}
                  </div> 
                  @endif 

                  @if($errors->has('email'))
                     <div class="alert alert-danger alert-dismissible" role="alert" data-plugin="alertify">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    {{ $errors->first('email') }}
                  </div> 
                  @endif
                   @if($errors->has('password'))
                     <div class="alert alert-danger alert-dismissible" role="alert" data-plugin="alertify">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    {{ $errors->first('password') }}
                  </div> 
                  @endif
            <div class="card">
                <div class="card-header">Changer votre mot de passe</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email :</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email}}" autocomplete="email" autofocus required=""> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" required="">
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmer le mot de passe:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" required="">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Réinitialiser
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
