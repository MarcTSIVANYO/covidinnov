@extends('home')
@section('content')
<div class="col-xs-12">
  <!-- general form elements -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Enregistrer un pays</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <!--  <form role="form"> -->

    {!! Form::open(['route' => 'pays.store' ]) !!}

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
            <input autocomplete="off" type="text" value="{{old('titre_pays')}}"  class="form-control" id="exampleInputEmail1" placeholder="Titre du pays" name="titre_pays">
            {!! $errors->first('titre_pays','<span class="help-block" style="color:red;">:message</span>') !!}
          </div>                  
        </div>
      </div>
    <div class="row">
      <div class="col-xs-12">
       <div class="form-group">
        <label for="exampleInputPassword1">Régions</label>
        <select class="form-control select2" style="width: 100%;" name="id_regions">
          <option>Choisir une région</option>
          @foreach($regions as $region)  
          <option value="{{ $region->id_regions }}">{{$region->titre_regions}}
          </option>
          @endforeach
        </select>
      </div>
    </div>
  </div>
     <div class="row">
        <div class="col-xs-12">
         <div class="form-group">
          <label for="exampleInputPassword1">Publier</label>
          <select class="form-control select2" style="width: 100%;" name="publier_pays">
            <option value="1">Oui</option>
            <option value="0">Non</option>
          </select>
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