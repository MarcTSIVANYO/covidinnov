@extends('templates.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-primary">
                    <div class="panel-heading">Configuration du site</div>
                    <div class="panel-body">


                        {!! Form::model($configuration, [
                            'method' => 'PATCH',
                            'url' => ['/admin/configurations', $configuration->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.configurations.form', ['submitButtonText' => 'Valider'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection