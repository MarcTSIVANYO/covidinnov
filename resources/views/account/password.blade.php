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
            
            <div class="row">
            <div class="col-md-8 col-xs-8  col-lg-8 col-sm-8 offset-md-2" >
                <div id="connexionForm"> 
                <center>  
                   <hr/>  
                </center> 
                
              <div id="notification" style="display: none;"> 
                <div class="alert alert-danger" role="alert">
                  <strong>Erreur!</strong> Les deux mots de passe ne condordent pas!
                </div> 
              </div> 
              @if(Session::has('flash_message'))
              <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                {{ Session::get('flash_message') }}
              </div> 
              @endif
              <form class="form-contact contact_form " action=" {{ url('account/password/reset') }}" method="post" onSubmit="return verifyEmail(this.password, this.password_confirmation)" resource="{{url('logout')}}">
                {{ csrf_field() }} 
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input  type="email" disabled="disabled" value="{{ Auth::user()->email }}"  class="form-control" name="email">
                  {!! $errors->first('email','<span class="help-block" style="color:red;">:message</span>') !!}
                </div>                  
              </div>
            </div> 
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputPassword1">Mot de passe</label>
                  <input type="password" autocomplete="off" value="{{old('password')}}"  class="form-control" id="exampleInputPassword1"  placeholder="Minimum 6 caractères" name="password" pattern=".{6,}" title="6 caractères au minimum" required >
                  {!! $errors->first('password','<span class="help-block" style="color:red;">:message</span>') !!}
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirmer mot de passe</label>
                  <input type="password" autocomplete="off" value="{{old('password_confirmation')}}"  class="form-control" id="exampleInputPassword1" placeholder="Minimum 6 caractères" name="password_confirmation" pattern=".{6,}" title="6 caractères au minimum" required >
                  <!-- {!! $errors->first('','<span class="help-block" style="color:red;">:message</span>') !!} -->
                </div>
              </div>
            </div>
          
            <div class="col-md-12">
                <div class="submit-button text-center">
                    <button class="btn btn-common" id="submit" type="submit">Valider</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                    <div class="clearfix"></div> 
                </div>
            </div>
        </div>
        </div>
        <!-- /.box-body -->            
        {!! Form::close() !!}

            </div>
        </div>
    </div>
  </div>
    <!-- end section -->
@stop
 
