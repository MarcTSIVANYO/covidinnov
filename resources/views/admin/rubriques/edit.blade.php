@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Rubrique {{ $rubrique->id }}</div>
                    <div class="panel-body">


                        {!! Form::model($rubrique, [
                            'method' => 'PATCH',
                            'url' => ['/admin/rubriques', $rubrique->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.rubriques.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection