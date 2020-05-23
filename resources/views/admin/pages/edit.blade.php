@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Modification {{ $pages->id }}</div>
                    <div class="panel-body">

                        {!! Form::model($pages, [
                            'method' => 'PATCH',
                            'url' => ['/admin/pages', $pages->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.pages.form', ['submitButtonText' => 'Modifier'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection