@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Enregistrement</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/admin/photos', 'class' => 'form-horizontal', 'files' => true]) !!}
                        @include ('admin.photos.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection