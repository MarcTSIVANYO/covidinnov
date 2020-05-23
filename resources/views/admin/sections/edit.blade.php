@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Section {{ $section->id }}</div>
                    <div class="panel-body">


                        {!! Form::model($section, [
                            'method' => 'PATCH',
                            'url' => ['/admin/sections', $section->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.sections.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection