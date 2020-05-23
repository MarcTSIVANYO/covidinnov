@extends('welcome')

@section('content')

<div class="box">
  <div class="box-header">
    <div class="box-header col-xs-10">
      <h1 >Liste des langues</h1>
    </div>
    <div class="box-header col-xs-2">
      <a href="javascript:openwindows('{{ URL::To('langues/create')}}',500,400,true)"  class="btn btn-block btn-success">
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
              <th>libelle</th>
              <th  width="20%">Actions</th>
            </tr>
          </thead>
          <tbody>
           @foreach($langues as $langue) 
           <tr role="row" class="odd">  
            <td class="sorting_1">{{ $langue->id_langues }}</td>      
            <td>{{ $langue->libelle_langues }}</td>
                 <td>
                 <a href="javascript:openwindows('{{route('langues.edit',$langue->id_langues)}}',500,400,true)"> <button type="button" class="btn btn-warning btn-flat" data-toggle="tooltip" data-original-title="Éditer"><i class="fa fa-edit"></i></button></a>
          
                 <!-- <a href="javascript:openwindows('{{route('langues.show',$langue->id_langues)}}',350,350,true)"> <button type="button" class="btn bg-purple btn-flat" data-toggle="tooltip" data-original-title="Afficher"><i class="fa fa-laptop"></i></button></a> -->
             
              <a href="{{URL::To('visibleLangues/'.$langue->id_langues)}}"><button type="button" class="btn btn-danger btn-flat"  data-toggle="tooltip" data-original-title="Supprimer"><i class="fa fa-trash"></i></button></a>
              </td>
            </tr>
            @endforeach

          </tbody>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>libelle</th>
              <th>Actions</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    @stop