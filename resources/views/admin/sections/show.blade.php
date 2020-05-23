@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Section {{ $section->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/sections/' . $section->id . '/edit') }}" class="btn btn-warning btn-flat" title="Editer"><span class="fa fa-edit" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/sections', $section->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-flat',
                                    'title' => 'Delete Section',
                                    'onclick'=>'return confirm("Confirmer la suppression?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $section->id }}</td>
                                    </tr>
                                    <tr><th> Titre </th><td> {{ $section->titre }} </td></tr><tr><th> Fixe Section </th><td> {{ $section->fixe_section }} </td></tr><tr><th> Publier </th><td> {{ $section->publier }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection