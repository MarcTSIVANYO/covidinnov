@extends('templates.background')
@section('content')
<div class="col-xs-12">
  <!-- general form elements -->
  <div class="box box-info">

   @if(isset($pays->id_pays))
   {!! Form::model($pays, ['method' => 'PATCH','route' => ['pays.update', $pays->id_pays],'files' => true]) !!}
   <div class="box-header with-border">
    <h3 class="box-title">Modifier un pays</h3>
  </div>
  @else
  {!! Form::open(['route' => 'pays.store' ]) !!}
  <div class="box-header with-border">
    <h3 class="box-title">Enregistrer un pays</h3>
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
    opener.location.replace('{{URL::To('pays')}}');
  </script>
  @endif
  <div class="box-body">
    <div class="row">
      <div class="col-xs-12">
        <div class="form-group">
          <label for="exampleInputEmail1">Titre</label>
          {!! Form :: text('titre_pays',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Titre du pays', 'value'=>'old(titre_pays)']) !!}
          {!! $errors->first('titre_pays','<span class="help-block" style="color:red;">:message</span>') !!}
        </div>                  
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
       <div class="form-group">
        <label for="exampleInputPassword1">Régions</label>
        {!! Form::select('id_regions',$regions,null,['class'=>'form-control select2']) !!}
      </div>
    </div>
  </div>
  <div class="" align="right">
    <div class="box-footer">
      <button type="submit" class="btn btn-info">Valider</button>
    </div>
  </div>
</div>
{!! Form::close() !!}
</div>
</div>
@stop