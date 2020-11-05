@extends('templates.base')
@section('content')
<div class="content ">
    <section class="content">
 
  <!-- Main content -->
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class=" fa fa-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-plus-circle">Innovations</span>
              <span class="info-box-number text-large" style="font-size:xx-large;"> {{$innovations}} </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>

            <div class="info-box-content">
              <span class="info-box-plus-circle">Actifs</span>
              <span class="info-box-number text-large" style="font-size:xx-large;"> {{$innovationsActif}} </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-close"></i></span>

            <div class="info-box-content">
              <span class="info-box-plus-circle">En attente</span>
              <span class="info-box-number text-large" style="font-size:xx-large;"> {{$innovationsNonActif}} </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
         

      </div>

</section>
</div>
@stop