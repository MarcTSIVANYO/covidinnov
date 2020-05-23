@extends('templates.background')
@section('content')
    <div class="col-xs-12">
          <!-- general form elements -->
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box box-info">
           <!--  <form role="form"> -->
      @if(isset($regions->id_regions))
            {!! Form::model($regions, ['method' => 'PATCH','route' => ['regions.update', $regions->id_regions],'files' => true]) !!}
             <div class="box-header with-border">
              <h3 class="box-title">Modifier une region</h3>
            </div>
            @else
            {!! Form::open(['route' => 'regions.store' ]) !!}
             <div class="box-header with-border">
              <h3 class="box-title">Enregistrer une region</h3>
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
                opener.location.replace('{{URL::To('regions')}}');
                </script>
                 @endif


                 <div class="box-body">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Titre</label>
                        {!! Form :: text('titre_regions',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Titre de la region', 'value'=>'old(titre_regions)']) !!}
                        {!! $errors->first('titre_regions','<span class="help-block" style="color:red;">:message</span>') !!}
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