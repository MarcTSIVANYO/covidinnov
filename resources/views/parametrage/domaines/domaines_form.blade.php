@extends('templates.background')
@section('content')
<div class="col-xs-12">
  <!-- general form elements -->
  <div class="box box-primary">
    
    <!-- /.box-header -->
    <!-- form start -->
    <!--  <form role="form"> -->
  @if(isset($domaines->id_domaines))
    {!! Form::model($domaines,['method' => 'PUT','route' => ['domaines.update', $domaines->id_domaines] ]) !!}
    <div class="box-header with-border">
      <h3 class="box-title">Modifier un domaine</h3>
    </div>
    @else
    {!! Form::open(['route' => 'domaines.store' ]) !!}
    <div class="box-header with-border">
      <h3 class="box-title">Enregistrer un domaine</h3>
    </div>
    @endif

    @if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
      </button>
      {{ Session::get('flash_message') }}
    </div>
    <script type="text/javascript">
    opener.location.replace('{{URL::To('domaines')}}');
    </script>
    @endif
    <div class="box-body">
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <label for="exampleInputEmail1">Titre du domaine</label>
              {!! Form :: text('titre_domaines',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Titre du domaine', 'value'=>'old(titre_domaines)']) !!}
            {!! $errors->first('titre_domaines','<span class="help-block" style="color:red;">:message</span>') !!}
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <label for="exampleInputPassword1">Description du domaine</label>
              {!! Form :: textarea('description_domaines',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Description du domaine', 'value'=>'old(description_domaines)']) !!}
            {!! $errors->first('description_domaines','<span class="help-block" style="color:red;">:message</span>') !!}
          </div>
        </div>
      </div>
  <!--     <div class="row">
        <div class="col-xs-12">
        <div class="form-group">
            <label for="exampleInputPassword1">Publier</label>
            <select class="form-control select2" style="width: 100%;" name="publier_domaines">
              <option value="1">Oui</option>
              <option value="0">Non</option>
            </select>
          </div>
          </div>
      </div> -->
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