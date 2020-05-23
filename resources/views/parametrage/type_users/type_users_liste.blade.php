@extends('templates.base')
@section('content')
<div class="box box-primary">
  <div class="box-header">
    <div class="box-header col-xs-10">
      <h1 >Liste des types d'utilisateurs</h1>
    </div>
    <div class="box-header col-xs-2">
      <a
        href="javascript:openwindows('{{ URL::To('type_users/create')}}',400,500,true)"
        class="btn btn-block btn-primary">
        <h5> <i class="glyphicon glyphicon-plus"></i>Nouveau</h5>
      </a>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Libelle</th>
          
          <th width="20%">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($type_users as $type_user)
        <tr role="row" class="odd">
          <td class="sorting_1">{{ $type_user->id_type_users }}</td>

          <td>
          <u> 
              <a href="{{URL::To('type_users/list_by/'.$type_user->id_type_users)}}">{{ $type_user->libelle_type_users }}</a>
          </u>
          </td>
          <td>
            <a href="javascript:openwindows('{{route('type_users.edit',$type_user->id_type_users)}}',400,500,true)">
            <button type="button" class="btn btn-primary btn-flat" data-toggle="tooltip" data-original-title="Éditer"><i class="fa fa-edit"></i></button></a>
            <a href="javascript:openwindows('{{URL::To('droits_type_users/'.$type_user->id_type_users)}}',1200,700,true)"><button type="button" class="btn bg-purple btn-flat" data-toggle="tooltip" data-original-title="Attribuer droits"><i class="fa fa-wrench"></i></button></a>
            <a href="{{URL::To('type_users/visible/'.$type_user->id_type_users)}}">
              <button type="button" class="btn btn-danger btn-flat"  data-toggle="tooltip" data-original-title="Supprimer"><i class="fa fa-trash"></i>
              </button>
            </a>
          </td>
        </tr>
        @endforeach
        
      </tbody>
      <tfoot>
      <tr>
        <th>ID</th>
        <th>Libelle</th>
        
        <th>Actions</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
@stop