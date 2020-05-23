@extends('templates.base')

@section('content')

<div class="box">
  <div class="box-header">
    <div class="box-header col-xs-10">
      <h1 >Liste des régions</h1>
    </div>
    <div class="box-header col-xs-2">
    <a href="javascript:openwindows('{{ URL::To('regions/create')}}',500,400,true)"  class="btn btn-block btn-success">
        <h5> <i class="glyphicon glyphicon-plus"></i>
          Nouveau</h5></a>
        </div>
      </div>

      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Titre</th>
              <th  width="20%">Actions</th>
            </tr>
          </thead>
          <tbody>
             @foreach($regions as $region) 
               <tr role="row" class="odd">  
                <td class="sorting_1">{{ $region->id_regions }}</td>      
                <td>{{ $region->titre_regions }}</td>
                 <td><a href="javascript:openwindows('{{route('regions.edit',$region->id_regions)}}',500,400,true)"><button type="button" class="btn btn-warning btn-flat" data-toggle="tooltip" data-original-title="Éditer"><i class="fa fa-edit"></i></button></a>
                 <!-- <td><a href="javascript:openwindows('{{route('regions.show',$region->id_regions)}}',350,350,true)">
                <button type="button" class="btn bg-purple btn-flat" data-toggle="tooltip" data-original-title="Afficher"><i class="fa fa-laptop"></i></button></a>
                </td> -->
                 <a href="{{URL::To('visibleRegions/'.$region->id_regions)}}"><button type="button" class="btn btn-danger btn-flat"  data-toggle="tooltip" data-original-title="Supprimer"><i class="fa fa-trash"></i></button></a>
                </td>
            </tr>
           @endforeach
           
          </tbody>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Titre</th>
              <th>Actions</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>

    @stop