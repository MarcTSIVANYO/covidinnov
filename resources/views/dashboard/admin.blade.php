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
              <span class="info-box-plus-circle">ACTEURS</span>
              <span class="info-box-number text-large" style="font-size:xx-large;"> {{$acteurs}} </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">DONATEURS</span>
              <span class="info-box-number text-large" style="font-size:xx-large;"> {{$donateurs}} </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div> 

        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CITOYENS</span>
              <span class="info-box-number text-large" style="font-size:xx-large;"> {{$citoyens}} </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

      </div>

</section>
</div>
@stop