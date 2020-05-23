@extends('layouts.frontend.base')
@section('title','Page introuvable')

@section('content')



 <!--================ Banner Section start =================-->
   <section class="hero-banner hero-banner-sm text-center">
    <div class="container">
      <h2 style="color: white;">Page non trouvée</h2> 
    </div>
  </section>
  <!--================ Banner Section end =================--> 
  <!--================ Domain Search section start =================-->
  <section class="bg-gray domain-search">
    <div class="container">
      <div class="row no-gutters text-center">
        <div class="col-md-12 col-lg-12 text-center  mb-12 mb-md-0">
          <h1 style="font-family: 'Open Sans', sans-serif; font-size: 80px; font-weight: bold; color: #0f6cb2;">404</h1>
          <h3> Page Introuvable </h3>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-12 pl-12 pl-xl-12">
          <br/> 
          <h4></h4>
          

          <div class="submit-button text-center">
              <a href="{{URL::To('/')}}" class="btn btn-common">RETOUR A LA PAGE D'ACCUEIL</a> 
              <div id="msgSubmit" class="h3 text-center hidden"></div> 
              <div class="clearfix"></div> 
          </div><br/>
<br/>

        </div>
      </div>
    </div>
  </section>
  <!--================ Domain Search section end =================-->
  
 
@stop