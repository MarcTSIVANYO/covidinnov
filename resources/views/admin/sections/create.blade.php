@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Créer une nouvelle Section</div>
                    <div class="panel-body">


                        {!! Form::open(['url' => '/admin/sections', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.sections.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection