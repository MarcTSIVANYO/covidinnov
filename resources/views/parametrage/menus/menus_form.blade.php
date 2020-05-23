@extends('templates.background')
@section('content')
<div class="col-xs-12">
  <!-- general form elements -->
  <div class="box box-primary">




  @if(isset($menus->id_menus))
  <div class="box-header with-border">
    <h3 class="box-title">Modifier le menu</h3>
  </div>
  {!! Form::model($menus, [
  'method' => 'PATCH',
  'route' => ['menus.update', $menus->id_menus],
  'files' => true
  ]) !!}
  @else
  <div class="box-header with-border">
    <h3 class="box-title">Enrégistrer le menu</h3>
  </div>
  {!! Form::open(['route' => 'menus.store' ]) !!}
  @endif





    {!! Form::open(['route' => 'menus.store' ]) !!}
    @if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
      </button>
      {{ Session::get('flash_message') }}
    </div>
    <script type="text/javascript">
    opener.location.replace('{{URL::To('menus')}}');
    </script>
    @endif

    <div class="box-body">
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <label for="titre_menus">Titre du menu</label>
            {!! Form::text('titre_menus', null, ['class' => 'form-control', 'placeholder' => 'Titre du menu']) !!}
            {!! $errors->first('titre_menus','<span class="help-block" style="color:red;">:message</span>') !!}
          </div>
        </div>
        <div class="col-xs-12">
          <div class="form-group">
            <label for="libelle_menus">Icone du menu</label>
            {!! Form::text('libelle_menus', null, ['class' => 'form-control', 'placeholder' => 'Icone du menu']) !!}
            {!! $errors->first('libelle_menus','<span class="help-block" style="color:red;">:message</span>') !!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <label for="lien_menus">Lien</label>
            {!! Form::text('lien_menus', null, ['class' => 'form-control', 'placeholder' => 'Lien']) !!}
            {!! $errors->first('lien_menus','<span class="help-block" style="color:red;">:message</span>') !!}
          </div>
        </div>
        <div class="col-xs-12">
          <div class="form-group">
            <label for="indice_menus">Indice</label>
            {!! Form::number('indice_menus', null, ['class' => 'form-control', 'placeholder' => 'Indice']) !!}
            {!! $errors->first('indice_menus','<span class="help-block" style="color:red;">:message</span>') !!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <label for="publier_menus">Publier</label>
            {!! Form::select('publier_menus', ['1' => 'Oui', '0' => 'Non'], null, ['class' => 'form-control select2']) !!}
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