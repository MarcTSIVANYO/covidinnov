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
            @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Sections</div>
                    <div class="box-header ui-sortable-handle" style="cursor: move;"> 
                      <h3 class="box-title">Liste des sections</h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools"> 
                       <a href="javascript:openwindows('{{ url('/admin/sections/create') }}',650,500,true)" class="btn btn-block btn-primary" title="Add New Section">
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
                                        <th> Fixe Section </th>
                                        <th> Publier </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                @foreach($sections as $item)
                                    <tr> 
                                        <td>{{ $i }}</td>
                                        <td>{{ $item->titre }}</td><td>{{ $item->fixe_section }}</td><td>{{ $item->publier }}</td>
                                        <td>
                                            <a href="javascript:openwindows('{{ url('/admin/sections/' . $item->id) }}',650,500,true)" class="btn btn-primary btn-flat" title="View Section"><span class="fa fa-television" aria-hidden="true"/></a>
                                            <a href="javascript:openwindows('{{ url('/admin/sections/' . $item->id . '/edit') }}',650,500,true)" class="btn btn-warning btn-flat" title="Edit Section"><span class="fa fa-edit" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/sections', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Section" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-flat',
                                                        'title' => 'Delete Section',
                                                        'onclick'=>'return confirm("Confirm delete?")'
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