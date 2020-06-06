
@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-primary">
                    <div class="panel-heading">Innovation</div>
                    <div class="panel-body"> 
                           {!! Form::open(['route' => 'innovations.store', 'class' => 'form-horizontal', 'files' => true]) !!}

                            {{ csrf_field() }}
                        @include ('innov.form')
                        {!! Form::close() !!} 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection