
@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-primary">
                    <div class="panel-heading">CV</div>
                    <div class="panel-body"> 
                           {!! Form::open(['route' => 'cv.store', 'class' => 'form-horizontal', 'files' => true]) !!}
                        @include ('cv.form')
                        {!! Form::close() !!} 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection