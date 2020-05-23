@extends('templates.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11">
            @if(Session::has('flash_message'))
            <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                {{ Session::get('flash_message') }}
            </div>
            <script type="text/javascript">
                opener.location.replace("{{URL::To('admin/photos/list_by/'.$album_id)}}");
            </script>
            @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Photos</div>
                    <div class="box-header ui-sortable-handle" style="cursor: move;"> 
                      <h3 class="box-title">Liste des photos</h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools"> 
                       <a href="javascript:openwindows('{{ url('/admin/photos/create') }}',1200,500,true)" class="btn btn-block btn-primary" title="Add New photos">
                        <span class="glyphicon glyphicon-plus"/> Nouveau</a>
                      </div>
                      <!-- /. tools -->
                    </div> 
                    <div class="panel-body">  
                        <div class="row">
                            @foreach($photos as $item) 
                                <div class="col-md-3">
                                   <h4> {{ $item->indice }}</h4>
                                  <!-- Widget: user widget style 1 -->
                                  <div class="box box-widget widget-user">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="widget-user-header" >
                                    <img class="img-responsive" src="../../../{{ $item->fichier }}" alt="Image"> 
                                    </div>
                                    <div class="box-footer">
                                      <div class="row">
                                      <h5 class="widget-user-desc">{{ $item->titre }}</h5>
                                        <div class="col-sm-4 border-right">
                                          <div class="description-block">
                                            <a href="javascript:openwindows('{{ url('/admin/photos/' . $item->id) }}',1200,500,true)"  ><button type="button" class="btn btn-primary btn-flat" data-toggle="tooltip" data-original-title="Afficher"><i class="fa fa-television"></i></button></a>
                                          </div>
                                          <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 border-right">
                                          <div class="description-block">
                                            <a href="javascript:openwindows('{{ url('/admin/photos/' . $item->id . '/edit') }}',1200,500,true)"  ><button type="button" class="btn btn-warning btn-flat"  data-toggle="tooltip" data-original-title="Modifier"><i class="fa fa-edit"></i></button></a>
                                          </div>
                                          <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4">
                                          <div class="description-block">
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/photos', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span  class="fa fa-trash" aria-hidden="true" title="Supprimer" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-flat',
                                                        'title' => 'Supprimer',
                                                        'onclick'=>'return confirm("Voulez-vous supprimer?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                          </div>
                                          <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                      </div>
                                      <!-- /.row -->
                                    </div>
                                  </div>
                                  <!-- /.widget-user -->
                                </div>
                            @endforeach 
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection