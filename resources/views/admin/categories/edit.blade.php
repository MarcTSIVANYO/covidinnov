@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Modification {{ $categories->id }}</div>
                    <div class="panel-body">


                        {!! Form::model($categories, [
                            'method' => 'PATCH',
                            'url' => ['/admin/categories', $categories->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.categories.form', ['submitButtonText' => 'Modifier'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection