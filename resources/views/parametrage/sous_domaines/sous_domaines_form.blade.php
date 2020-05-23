@extends('templates.background')
@section('content')
<div class="col-xs-12">
  <!-- general form elements -->
  <div class="box box-info">

   @if(isset($sous_domaines->id_sous_domaines))
   {!! Form::model($sous_domaines, ['method' => 'PATCH','route' => ['sous_domaines.update', $sous_domaines->id_sous_domaines],'files' => true]) !!}
   <div class="box-header with-border">
    <h3 class="box-title">Modifier un sous domaines</h3>
  </div>
  @else
  {!! Form::open(['route' => 'sous_domaines.store' ]) !!}
  <div class="box-header with-border">
    <h3 class="box-title">Enregistrer un sous domaines</h3>
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
    opener.location.replace('{{URL::To('sous_domaines')}}');
  </script>
  @endif
  <div class="box-body">
    <div class="row">
      <div class="col-xs-12">
        <div class="form-group">
          <label for="exampleInputEmail1">Titre du sous domaine</label>
          {{Form::text('titre_sous_domaines',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Titre du sous domaines', 'value'=>'old(titre_sous_domaines)'])}}
          {{$errors->first('titre_sous_domaines','<span class="help-block" style="color:red;">:message</span>')}}
        </div>                  
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
       <div class="form-group">
        <label for="exampleInputPassword1">Domaines</label>
        {{Form::select('id_domaines',$domaines,null,['class'=>'form-control select2'])}}
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