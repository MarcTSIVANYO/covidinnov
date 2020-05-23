@extends('layouts.frontend.base')
@section('title','Modifier mon compte')
@section('content')
<?php  
use Illuminate\Support\Facades\Route;
 	$view='cv';
 	$views='cv';
 	$monmenu='cv';   
  /*if(!isset($cv->nom) && Auth::user()->admin==0){
    $nom=Auth::user()->nom_users ;
    $prenoms=Auth::user()->prenoms_users ;
    $email=Auth::user()->email ;
  }   */ 
?>  
 
     <!-- section --> 
 <div class="innerpage_banner">
    <div class="container">
       <div class="row"> 
          <div class="col-md-12">
             <h2>Mon CV</h2>
             @if(isset($cv) && $cv->publier==0)
              <button type="button" class="btn btn-warning">
                En attente
              </button>
            @endif
             @if(isset($cv) && $cv->publier==1)
              <a href="{{$cv->pseudo}}" type="button" class="btn btn-success" target="_blank">
                En ligne
              </a>
              <div class="btn btn-primary">
                Vues : <span class="badge badge-light">{{$cv->views}}</span>
              </div>
            @endif


          </div>
       </div>
    </div>
 </div>
<!-- end section -->
<div id="contact" class="contact-box">
    <div class="container"> 
        <div class="row">
          <div class="col-md-12 " > 
            {!! Form::model($cv, [
                'url' => ['mycv'],
                'class' => 'form-horizontal',
                'files' => true
            ]) !!} 
              @include ('cv.form')
            {!! Form::close() !!}  
          </div>
        </div>
      </div>
  </div> 

    
@stop


