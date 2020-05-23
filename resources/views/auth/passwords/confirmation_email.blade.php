@extends('templates.background')
@section('content')

<div class=" login-box">
  <div class="login-box-body " >
    <p class="login-box-msg">Veuillez saisir votre email</p>
    {!! Form::open(['action' => ['passwordController@confirme_email'] ,'method' => 'POST']) !!}
      @if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      {{ Session::get('flash_message') }}
    </div>
    <script type="text/javascript">
      // opener.location.replace('{{URL::To('utilisateurs')}}');
    </script>
    @endif
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
        <input type="email" class="form-control" placeholder="Email" value="" name="email" autocomplete="off">
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div >
        <!-- /.col -->
       <div class="" align="right">
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Suivant</button>
          </div>

        <a href="login" style="color: green">Se connecter</a>
        </div>
      </div>
  {!! Form::close() !!}
    <!-- /.social-auth-links -->
  </div></div>
  @stop