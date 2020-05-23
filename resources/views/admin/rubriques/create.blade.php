@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Créer une nouvelle Rubrique</div>
                    <div class="panel-body">


                        {!! Form::open(['url' => '/admin/rubriques', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.rubriques.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection