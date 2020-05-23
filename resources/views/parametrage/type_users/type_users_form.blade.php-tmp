@extends('templates.background')
@section('content')
<div class="col-xs-12">
  <!-- general form elements -->
  <div class="box box-primary">





  @if(isset($type_users->id_type_users))
  <div class="box-header with-border">
    <h3 class="box-title">Modifier le contact</h3>
  </div>
  {!! Form::model($type_users, [
  'method' => 'PATCH',
  'route' => ['type_users.update', $type_users->id_type_users],
  'files' => true
  ]) !!}
  @else
  <div class="box-header with-border">
    <h3 class="box-title">Enrégistrer un contact</h3>
  </div>
  {!! Form::open(['route' => 'type_users.store' ]) !!}
  @endif





    @if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      {{ Session::get('flash_message') }}
    </div>
    <script type="text/javascript">
      opener.location.replace('{{URL::To('type_users')}}');
    </script>
    @endif








    <div class="box-body">
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <label for="libelle_type_users">Libellé</label>
            {!! Form::text('libelle_type_users', null, ['class' => 'form-control', 'placeholder' => 'Libellé']) !!}
            {!! $errors->first('libelle_type_users','<span class="help-block" style="color:red;">:message</span>') !!}
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