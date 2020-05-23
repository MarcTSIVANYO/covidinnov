@extends('layouts.frontend.base')
@section('title','Modifier mon compte')
@section('content')
<?php 
 	$view='compte';
 	$views='compte';
 	$monmenu='compte';   
?> 
 
 <!-- section --> 
 <div class="innerpage_banner">
    <div class="container">
       <div class="row"> 
          <div class="col-md-12">
             <h2>Votre profil</h2>
          </div>
       </div>
    </div>
 </div>
<!-- end section -->

<div id="contact" class="contact-box">
        <div class="container">
            
            <div class="row">
            <div class="col-md-8 col-xs-8  col-lg-8 col-sm-8 offset-md-2" >
            @if(Session::has('flash_message'))
              <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                {{ Session::get('flash_message') }}
              </div> 
            @endif
          </div>
          <form class="form-contact contact_form" action=" {{ url('account/compte') }}" method="post"  enctype='multipart/form-data' id="contactForm" novalidate="novalidate" onSubmit="return verifyEmail(this.password, this.password_confirmation)"> 
            {{ csrf_field() }} 

              <div class="row"> 
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="nom_users" id="nom" type="text" placeholder="Nom" required="" value="{{$user->nom_users}}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="prenoms_users" id="prenoms_users" type="text" placeholder="Prénoms" required="" value="{{$user->prenoms_users}}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="email" id="email_users" type="email" disabled="disabled" placeholder="Adressse Email" required="" value="{{$user->email}}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <label  class="col-md-2">Logo :</label>
                  <div class="form-group">
                    <input class="form-control" name="photo" id="email_users" type="file"    value="../../@if(isset($user)){{ $user->logo_users }} @endif">
                  </div>
                </div>
                <div class="col-sm-12"> <h5>
                  Informations générales</h5>
                  <hr/>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <select name="sexe_users" class="form-control" required="">
                    <option selected disabled>Votre sexe</option> 
                      <option <?php if($user->sexe_users=='M')echo ' selected="selected"' ?> value="M">M</option> 

                      <option <?php if($user->sexe_users=='F') echo ' selected="selected"' ?> value="F">F</option> 
                   </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="date_users"   type="date" placeholder="Date de naissance"   value="{{$user->date_users}}">
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="adresse_users"   type="text" placeholder="Adresse" required="" value="{{$user->adresse_users}}">
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="ville_users"   type="text" placeholder="Ville" required="" value="{{$user->ville_users}}">
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="contact_users"   type="text" placeholder="Téléphone" required="" value="{{$user->contact_users}}">
                  </div>
                </div>
 
		            <div class="col-md-12">
                  <div class="submit-button text-center">
                      <button class="btn btn-common" id="submit" type="submit">Modifier</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div> 
                      <div class="clearfix"></div> 
                  </div>
                </div>
              </form>   
           </div>
        </div>
      </div> 
@stop


