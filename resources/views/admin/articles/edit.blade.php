@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Modification {{ $articles->id }}</div>
                    <div class="panel-body">


                        {!! Form::model($articles, [
                            'method' => 'PATCH',
                            'url' => ['/admin/articles', $articles->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.articles.form', ['submitButtonText' => 'Modifier'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection