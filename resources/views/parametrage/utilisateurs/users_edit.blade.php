@extends('templates.background')
@section('content')
<div class="col-xs-12">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Modifier un utilisateur</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <!--  <form role="form"> -->
    {!! Form::model($utilisateurs, ['method' => 'PATCH','route' => ['utilisateurs.update', $utilisateurs->id_users],'files' => true]) !!}

    @if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      {{ Session::get('flash_message') }}
      <script type="text/javascript">
      opener.location.replace('{{URL::To('home')}}');
      </script>
    </div> 
    @endif
    <div class="box-body">
     {{ csrf_field() }}
      <div class="row">
        <div class="col-xs-6">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Nom d'utilisateur</label>
              {!! Form :: text('nom_users',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Nom de l\'utilisateur', 'value'=>'old(nom_users)']) !!}
              {!! $errors->first('nom_users','<span class="help-block" style="color:red;">:message</span>') !!}
            </div>                  
          </div>
          <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Prénom d'utilisateur</label>
              {!! Form :: text('prenoms_users',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Prénoms de l\'utilisateur', 'value'=>'old(prenoms_users)']) !!}
              {!! $errors->first('prenoms_users','<span class="help-block" style="color:red;">:message</span>') !!}
            </div>                  
          </div>
          <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Sexe</label>
              {!! Form::select('sexe_users', ['F' => 'Féminin', 'M' => 'Masculin'],null,['class'=>'form-control select2']) !!}
            </div>
          </div>

          <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Date de naissance</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
              {!! Form :: text('date_users',null,['class'=>'form-control','autocomplete'=>'off','id'=>'datepicker','placeholder'=>'Date de naissance de l\'utilisateur', 'value'=>'old(date_users)']) !!}
                {!! $errors->first('date_users','<span class="help-block" style="color:red;">:message</span>') !!}
              </div>
            </div>
          </div>
          <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Email</label>
              {!! Form :: email('email',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'email de l\'utilisateur', 'value'=>'old(email)','disabled'=>'true']) !!}
              {!! $errors->first('email','<span class="help-block" style="color:red;">:message</span>') !!}
            </div> 
          </div>
        </div>
        <div class="col-xs-6" >
            <div class="form-group">
              <label  class="col-md-2">Logo</label>
              <div class="col-md-6">
              <div class="fileinput fileinput-new" data-provides="fileinput">
            <input name="..." value="" type="hidden"/>
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                <img id="uploadpreview1" src="../../@if(isset($utilisateurs)){{ $utilisateurs->logo_users }} @endif " alt=""/>
            </div>
            <div>
              <span class="btn btn-primary btn-file">
                <span class="fileinput-new" data-trigger="fileinput">Choisir </span>
                <span class="fileinput-exists" data-trigger="fileinput">Changer</span> 
                {!! Form :: file('logo_users',null,['class'=>'form-control','autocomplete'=>'off', 'value'=>'old(logo_users)']) !!}
              </span>
              <a href="javascript:void(0)" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Annuler</a>
            </div>
          </div>   
              </div> 
              {!! $errors->first('logo_users','<span class="help-block" style="color:red;">:message</span>') !!}
          </div> 
          <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Contact</label>
              {!! Form :: text('contact_users',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Contact de l\'utilisateur', 'value'=>'old(contact_users)']) !!}
              {!! $errors->first('contact_users','<span class="help-block" style="color:red;">:message</span>') !!}
            </div>
          </div>
          <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Ville</label>
              {!! Form :: text('ville_users',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Ville de l\'utilisateur', 'value'=>'old(ville_users)']) !!}
              {!! $errors->first('ville_users','<span class="help-block" style="color:red;">:message</span>') !!}
            </div> 
          </div>
           <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Adresse</label>
              {!! Form :: text('adresse_users',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Adresse de l\'utilisateur', 'value'=>'old(adresse_users)']) !!}
              {!! $errors->first('adresse_users','<span class="help-block" style="color:red;">:message</span>') !!}
            </div> 
          </div>
        </div>
      </div>
    </div>
    <div class="row">
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