@extends('templates.base')

@section('content')

<div class="box">
  <div class="box-header">
    <div class="box-header col-xs-10">
      <h1 >Liste des pays</h1>
    </div>
    <div class="box-header col-xs-2">
      <a href="javascript:openwindows('{{ URL::To('pays/create')}}',500,480,true)"  class="btn btn-block btn-info">
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
              <th>Régions</th>
              <th  width="20%">Actions</th>
            </tr>
          </thead>
          <tbody>
           @foreach($lepays as $pays) 
           <tr role="row" class="odd">  
            <td class="sorting_1">{{ $pays->id_pays }}</td>      
            <td>{{ $pays->titre_pays }}</td>
            <td>
              @foreach($regions as $region)
              @if($pays->id_regions==$region->id_regions) {{$region->titre_regions}} @endif
              @endforeach 
              </td>
              <td><a href="javascript:openwindows('{{route('pays.edit',$pays->id_pays)}}',500,400,true)"><button type="button" class="btn btn-warning btn-flat" data-toggle="tooltip" data-original-title="Éditer"><i class="fa fa-edit"></i></button></a>
                 <!-- <td><a href="javascript:openwindows('{{route('pays.show',$pays->id_pays)}}',350,350,true)">
                <button type="button" class="btn bg-purple btn-flat" data-toggle="tooltip" data-original-title="Afficher"><i class="fa fa-laptop"></i></button></a>
              </td> -->
              <a href="{{URL::To('visiblePays/'.$pays->id_pays)}}"> <button type="button" class="btn btn-danger btn-flat"  data-toggle="tooltip" data-original-title="Supprimer"><i class="fa fa-trash"></i></button></a>
            </td>
          </tr>
          @endforeach

        </tbody>
        <tfoot>
         <th>ID</th>
         <th>Titre</th>
         <th>Régions</th>
         <th width="20%">Actions</th>
       </tfoot>
     </table>
   </div>
   <!-- /.box-body -->
 </div>

 @stop