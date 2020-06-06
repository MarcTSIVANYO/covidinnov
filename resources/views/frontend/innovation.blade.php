@extends('layouts.frontend.base')

@section('content')
  
  <div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 offset-md-2 animate-box" data-animate-effect="fadeInLeft">

                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"> Soumettre une innovation</div>
                    </div>
                     <div class="animated-fast" data-animate-effect="fadeInLeft" > 

                         {!! Form::open(['url' => 'submitInnov', 'class' => 'form-horizontal', 'files' => true]) !!}

                            {{ csrf_field() }}
                            @include ('innov.form')
                        {!! Form::close() !!} 
                                   
                      </div>
                    </div>  
              </div>
            </div>
          </div> 

@stop