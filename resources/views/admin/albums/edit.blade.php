@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Modification {{ $albums->id }}</div>
                    <div class="panel-body">


                        {!! Form::model($albums, [
                            'method' => 'PATCH',
                            'url' => ['/admin/albums', $albums->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.albums.form', ['submitButtonText' => 'Modifier'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection