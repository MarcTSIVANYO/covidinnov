@extends('home')
@section('content')
<div class="col-xs-12">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Modifier mot de passe</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <!--  <form role="form"> -->
    {!! Form::open(['action' => ['usersController@password_update', $utilisateurs->id_users] ,'method' => 'PUT']) !!}
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
    <div class="box-body">
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <label for="exampleInputEmail1">Login</label>
            <input  type="text" autocomplete="off" value="{{$utilisateurs->login_users}}"  class="form-control" id="exampleInputEmail1" placeholder="Nom d'utilisateur" name="login_users">
            {!! $errors->first('login_users','<span class="help-block" style="color:red;">:message</span>') !!}
          </div>                  
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="text" disabled value="{{$utilisateurs->email}}"  class="form-control" id="exampleInputPassword1" name="email">
            {!! $errors->first('email','<span class="help-block" style="color:red;">:message</span>') !!}
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="text" autocomplete="off" value="{{old('password')}}"  class="form-control" id="exampleInputPassword1"  name="password">
            {!! $errors->first('password','<span class="help-block" style="color:red;">:message</span>') !!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <label for="exampleInputPassword1">Confirmer mot de passe</label>
            <input type="text" autocomplete="off" value="{{old('password_confirmation')}}"  class="form-control" id="exampleInputPassword1" name="password_confirmation">
            <!-- {!! $errors->first('','<span class="help-block" style="color:red;">:message</span>') !!} -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12" align="right">
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Valider</button>
      </div>
    </div>
  </div>
  <!-- /.box-body -->            
  {!! Form::close() !!}
</div>
</div>
@stop