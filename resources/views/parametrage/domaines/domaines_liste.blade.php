@extends('templates.base')
@section('content')
<div class="box">
  <div class="box-header">
    <div class="box-header col-xs-10">
      <h1 >Liste des domaines</h1>
    </div>
    <div class="box-header col-xs-2">
      <a href="javascript:openwindows('{{ URL::To('domaines/create')}}',400,550,true)"  class="btn btn-block btn-primary">
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
          <th>Description</th>
          
          <th colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($domaines as $domaine)
        <tr role="row" class="odd">
          <td class="sorting_1">{{ $domaine->id_domaines }}</td>
          <td>{{ $domaine->titre_domaines }}</td>
          <td>{{ $domaine->description_domaines }}</td>
          <td><a href="javascript:openwindows('{{route('domaines.edit',$domaine->id_domaines)}}',400,600,true)">
          <button type="button" class="btn btn-warning btn-flat" data-toggle="tooltip" data-original-title="Éditer"><i class="fa fa-edit"></i></button></a>
        </td>
      <td><a href="{{URL::To('domaines/visible/'.$domaine->id_domaines)}}">
      <button type="button" class="btn btn-danger btn-flat"  data-toggle="tooltip" data-original-title="Supprimer"><i class="fa fa-trash"></i></button></a>
    </td>
  </tr>
  @endforeach
  
</tbody>
<tfoot>
<tr>
  <th>ID</th>
  <th>Titre</th>
  <th>Description</th>
  
  <th colspan="2">Actions</th>
</tr>
</tfoot>
</table>
</div>
<!-- /.box-body -->
</div>
@stop