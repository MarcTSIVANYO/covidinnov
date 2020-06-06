@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Modification {{ $list->id }}</div>
                    <div class="panel-body">


                        {!! Form::model($list, [
                            'method' => 'PATCH',
                            'url' => ['/admin/innovations', $list->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('innov.form', ['submitButtonText' => 'Modifier'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection