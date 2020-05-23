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
                opener.location.replace("{{URL::To('admin/categories/list_by/'.$page_id)}}");
            </script>
            @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Categories</div>
                    <div class="box-header ui-sortable-handle" style="cursor: move;"> 
                      <h3 class="box-title">Liste des Categories</h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools"> 
                       <a href="javascript:openwindows('{{ url('/admin/categories/create') }}',1200,1200,true)" class="btn btn-block btn-primary" title="Add New Categories">
                        <span class="glyphicon glyphicon-plus"/> Nouveau</a>
                      </div>
                      <!-- /. tools -->
                    </div> 
                    <div class="panel-body"> 
                        <div class="table-responsive">
                            <table class="table table-borderless" id="example1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> Titre </th>
                                        <th> Libelle </th>
                                        <th> Publier </th>
                                        <th> Page </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                @foreach($categories as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>
                                            <a href="{{URL::To('admin/articles/list_by/'.$item->id)}}" title="Ajouter des articles">
                                                {{ $item->titre }}
                                            </a> 
                                        </td>
                                        <td>{{ $item->libelle }}</td>
                                        <td>{{ $item->indice }}</td>
                                        <td>
                                            @foreach($pages as $page)
                                                @if($item->page_id==$page->id)
                                                    {{ $page->titre }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="javascript:openwindows('{{ url('/admin/categories/' . $item->id) }}',1200,1200,true)"  ><button type="button" class="btn btn-primary btn-flat" data-toggle="tooltip" data-original-title="Afficher"><i class="fa fa-television"></i></button></a>

                                            <a href="javascript:openwindows('{{ url('/admin/categories/' . $item->id . '/edit') }}',1200,1200,true)"  ><button type="button" class="btn btn-warning btn-flat"  data-toggle="tooltip" data-original-title="Modifier"><i class="fa fa-edit"></i></button></a>

                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/categories', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span  class="fa fa-trash" aria-hidden="true" title="Supprimer" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-flat',
                                                        'title' => 'Supprimer',
                                                        'onclick'=>'return confirm("Voulez-vous supprimer?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                     <?php $i++; ?>
                                @endforeach
                                </tbody>
                            </table> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection