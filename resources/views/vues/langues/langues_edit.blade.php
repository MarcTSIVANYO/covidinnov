@extends('home')
@section('content')
    <div class="col-xs-12">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Enregistrer une langue</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <!--  <form role="form"> -->

            {!! Form::open(['method' => 'PUT','route' => ['langues.update', $langues->id_langues] ]) !!}

                @if(Session::has('flash_message'))
                <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                    {{ Session::get('flash_message') }}
                </div>
                <script type="text/javascript">
                opener.location.replace('{{URL::To('langues')}}');
                </script>
                 @endif


                 <div class="box-body">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Libelle</label>
                        <input autocomplete="off" type="text" value="{{$langues->libelle_langues}}"  class="form-control" id="exampleInputEmail1" placeholder="libelle de la langue" name="libelle_langues">
                        {!! $errors->first('libelle_langues','<span class="help-block" style="color:red;">:message</span>') !!}
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