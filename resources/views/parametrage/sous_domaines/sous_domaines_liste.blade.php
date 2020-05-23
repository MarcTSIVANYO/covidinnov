@extends('templates.base')

@section('content')

<div class="box">
  <div class="box-header">
    <div class="box-header col-xs-10">
      <h1 >Liste des sous domaines</h1>
    </div>
    <div class="box-header col-xs-2">
      <a href="javascript:openwindows('{{ url('sous_domaines/create')}}',500,480,true)"  class="btn btn-block btn-info">
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
              <th>Domaines</th>
              <th  width="20%">Actions</th>
            </tr>
          </thead>
        <tbody>
           @foreach($sous_domaines as $sous_domaine) 
           <tr role="row" class="odd">  

            <td class="sorting_1">{{$sous_domaine->id_sous_domaines}}</td>      
            <td>{{$sous_domaine->titre_sous_domaines}}</td>
            <td>
              @foreach($domaines as $domaine)
                @if($domaine->id_domaines==$sous_domaine->id_domaines) {{$domaine->titre_domaines}} @endif
              @endforeach 
              </td>
              <td><a href="javascript:openwindows('{{route('sous_domaines.edit',$sous_domaine->id_sous_domaines)}}',500,400,true)"><button type="button" class="btn btn-warning btn-flat" data-toggle="tooltip" data-original-title="Éditer"><i class="fa fa-edit"></i></button></a>
              <a href="{{URL::To('sous_domaines/visible/'.$sous_domaine->id_sous_domaines)}}"> <button type="button" class="btn btn-danger btn-flat"  data-toggle="tooltip" data-original-title="Supprimer"><i class="fa fa-trash"></i></button></a>
            </td>
          </tr>
          @endforeach

        </tbody>        <tfoot>
         <th>ID</th>
         <th>Titre</th>
         <th>Domaines</th>
         <th width="20%">Actions</th>
       </tfoot>
     </table>
   </div>
   <!-- /.box-body -->
 </div>

 @stop