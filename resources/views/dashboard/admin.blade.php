@extends('templates.base')
@section('content')
<div class="content ">
    <section class="content">
 
  <!-- Main content -->
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class=" fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-plus-circle">INSCRIS</span>
              <span class="info-box-number text-large" style="font-size:xx-large;"> {{$all}} </span>
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
              <span class="info-box-text">VALIDES</span>
              <span class="info-box-number text-large" style="font-size:xx-large;"> {{$valide}} </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div> 

        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-close"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">EN ATTENTE</span>
              <span class="info-box-number text-large" style="font-size:xx-large;"> {{$wait}} </span>
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