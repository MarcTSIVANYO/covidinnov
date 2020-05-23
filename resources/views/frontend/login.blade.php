@extends('layouts.frontend.base')

@section('content')
 
    <!-- section --> 
       <div class="innerpage_banner">
          <div class="container">
             <div class="row"> 
                <div class="col-md-12">
                   <h2>Connexion</h2>
                </div>
             </div>
          </div>
       </div>
    <!-- end section -->
    
    <!-- section -->
    <div id="contact" class="contact-box">
        <div class="container"> 
            <div class="row">  
                <div class="col-md-12 col-xs-12  col-lg-12 col-sm-12">
                    
          @if(Session::has('done_message')) 
            <div id="error-info-wrapper">
              <div id="errors" style="display:block"> 
                <div class="w-100">
                  <div class="alert alert-danger alert-dismissible fade show">
                      Login ou mot de passe incorrect!<br>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <b aria-hidden="true">×</b>
                  </button>
                  </div>
                </div> 
                </div>
            </div> 
          @endif 
          
        </div>
       <div class="col-md-8 col-xs-8  col-lg-8 col-sm-8 offset-md-2" >
          <div id="connexionForm"> 
          <center> 
            <h2 class="contact-title">Connexion</h2>
             <hr/>  
          </center>
         <!--  <form class="form-contact contact_form" action="{{ url('/login') }}" method="post" id="contactForm" novalidate="novalidate"> -->

          <form class="form-contact contact_form" role="form" method="POST" action="{{ url('/login') }}">
            <center>
            @if(Session::has('flash_message'))
              <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                {{ Session::get('flash_message') }}
              </div> 
              @endif
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
            {{ csrf_field() }}
            <div class="row"> 
              <div class="col-sm-12">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Entrez votre identifiant" required="">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group" align="left">
                  <input class="form-control" name="password" id="password" type="password" placeholder="Entrez votre mot de passe" required="">
                </div>
              </div>  
            </div>
            <div class="form-group mt-lg-3">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button> 
            </center>  
              <div class="form-group row ">
               <div class="col-md-6 col-lg-6">   
                   <a href="{{ route('password.email') }} ">
                      Mot de passe oublier?</a>
                </div>
             <div class="col-md-6 col-lg-6">
              <div class="form-group" align="right">   
                 <a href="{{ url('inscrire') }} " class="btn btn-secondary">
                    S'inscrire?</a>
              </div>
            </div> 
            </div> 
            </div>
          </form>
                
            </div>
        </div>
    </div>
    <!-- end section -->

@endsection