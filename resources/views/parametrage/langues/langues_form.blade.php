@extends('templates.background')
@section('content')
    <div class="col-xs-12">
          <!-- general form elements -->
          <div class="box box-success">
            <!-- /.box-header -->
            <!-- form start -->
           <!--  <form role="form"> -->

           @if(isset($langues->id_langues))
            {!! Form::model($langues, ['method' => 'PATCH','route' => ['langues.update', $langues->id_langues],'files' => true]) !!}
             <div class="box-header with-border">
              <h3 class="box-title">Modifier un langue</h3>
            </div>
            @else
            {!! Form::open(['route' => 'langues.store' ]) !!}
             <div class="box-header with-border">
              <h3 class="box-title">Enregistrer un langue</h3>
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
                opener.location.replace('{{URL::To('langues')}}');
                </script>
                 @endif
                 <div class="box-body">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Libelle</label>
                      {!! Form :: text('libelle_langues',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Saisissez la langue', 'value'=>'old(libelle_langues)']) !!}
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