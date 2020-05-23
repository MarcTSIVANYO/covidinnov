@extends('templates.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            @if(Session::has('flash_message'))
            <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                {{ Session::get('flash_message') }}
            </div>
            @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Rubriques</div>
                    <div class="panel-body">

                        <a href="javascript:openwindows('{{ url('/admin/rubriques/create') }}',450,650,true)" class="btn btn-primary btn-xs" title="Add New Rubrique"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Titre </th><th> Libelle </th><th> Fichier </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($rubriques as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->titre }}</td><td>{{ $item->libelle }}</td><td>{{ $item->fichier }}</td>
                                        <td>
                                            <a href="javascript:openwindows('{{ url('/admin/rubriques/' . $item->id) }}',450,650,true)" class="btn btn-success btn-xs" title="View Rubrique"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="javascript:openwindows('{{ url('/admin/rubriques/' . $item->id . '/edit') }}',450,650,true)" class="btn btn-primary btn-xs" title="Edit Rubrique"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/rubriques', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Rubrique" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Rubrique',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $rubriques->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection