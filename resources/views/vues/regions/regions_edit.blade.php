@extends('home')
@section('content')
    <div class="col-xs-12">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Enregistrer une region</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <!--  <form role="form"> -->

            {!! Form::open(['method' => 'PUT','route' => ['regions.update', $regions->id_regions] ]) !!}

                @if(Session::has('flash_message'))
                <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                    {{ Session::get('flash_message') }}
                </div>
                <script type="text/javascript">
                opener.location.replace('{{URL::To('regions')}}');
                </script>
                 @endif


                 <div class="box-body">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Titre</label>
                        <input autocomplete="off" type="text" value="{{$regions->titre_regions}}"  class="form-control" id="exampleInputEmail1" placeholder="Titre de la region" name="titre_regions">
                        {!! $errors->first('titre_regions','<span class="help-block" style="color:red;">:message</span>') !!}
                      </div>                  
                    </div>
                  </div>
                <div class="row">
                    <div class="col-xs-12">
                     <div class="form-group">
                      <label for="exampleInputPassword1">Publier</label>
                      <select class="form-control select2" style="width: 100%;" name="publier_regions">
                        <option @if($regions->publier_regions=='1') selected @endif value="1">Oui</option>
                        <option @if($regions->publier_regions=='0') selected @endif value="0">Non</option>
                      </select>
                    </div>
                  </div>
                  </div>
                  <div class="" align="right">
                    <div class="box-footer">
                      <button type="submit" class="btn btn-success">Valider</button>
                    </div>
                  </div>
                </div>
              
            {!! Form::close() !!}
          </div>

      </div>
@stop