
@extends('layouts.frontend.base') 
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
             
                
       <div class="col-md-8 col-xs-8  col-lg-8 col-sm-8 offset-md-2" > 
          <center> 
            <h2 class="contact-title">Mot de passe oublié!</h2>
             <hr/>  
         </center>
         @if(Session::has('flash_success'))
          <div data-alert class="alert-box success radius wow fadeInLeft">
            <i class="fa fa-thumbs-up fa-lead"></i>{{ Session::get('flash_success') }}
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
          @if (session('status'))
           <p class="alert alert-success">{{ session('status') }}</p>
          @endif
           <form method="POST" action="{{ route('password.email') }}"> 
              {{ csrf_field() }}
              <div class="row"> 
                <div class="col-sm-12">
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Entrez votre email" required="">
                  </div>
                </div> 
              </div>
              <div class="form-group mt-lg-3">
                <!-- <button type="submit" class="button button-contactForm">Valider</button>   --> 
                <div class="col-md-12">
                            <div class="submit-button text-center">
                                <button class="btn btn-common" id="submit" type="submit">Envoyer les instructions</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                <div class="clearfix"></div> 
                            </div>
                        </div>
              </div>
         </form>
      </center> 
      </div>  
   </div>
</section>
@stop