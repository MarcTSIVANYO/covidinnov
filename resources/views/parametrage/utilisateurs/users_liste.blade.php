@extends('templates.base')

@section('content')
<div class="box box-primary">
  <div class="box-header">
    <div class="box-header col-xs-10">
      <h1 >Liste des utilisateurs</h1>
    </div>
    <div class="box-header col-xs-2">
      <a href="javascript:openwindows('{{ URL::To('utilisateurs/create')}}',990,550,true)"  class="btn btn-block btn-primary">
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
              <th>Nom</th>
              <th>Prenoms</th>
              <th>Email</th>
              {{--<th>Contact</th>
              <th>Date</th>
              <th>Adresse</th>--}}
              <th>Statut</th>
              <th width="27%">Actions</th>
            </tr>
          </thead>
          <tbody>
          <?php $i=1; ?>
           @foreach($utilisateurs as $utilisateur) 
           <tr role="row" class="odd">  
            <td class="sorting_1">{{ $i++ }}</td>      
            <td>{{ $utilisateur->nom_users }}</td>
            <td>{{ $utilisateur->prenoms_users }}</td>            
            <td>{{ $utilisateur->email }}</td>            
            {{--<td>{{ $utilisateur->contact_users }}</td>            

            <td>{{date('d-m-Y',strtotime( $utilisateur->date_users))}}</td>      
            <td>{{ $utilisateur->adresse_users }}</td>    --}}
            <td>@if($utilisateur->publier_users==1)
              <a href="{{URL::To('desable/'.$utilisateur->id_users)}}"><button type="button" class="btn btn-success btn-flat" data-toggle="tooltip" data-original-title="Désactiver"><i class="fa fa-unlock"></i></button></a>
              @else 
              <a href="{{URL::To('enable/'.$utilisateur->id_users)}}"><button type="button" class="btn bg-maroon btn-flat " data-toggle="tooltip" data-original-title="Activer"><i class="fa fa-lock"></i></button></a>
              @endif
            </td>        
            <td>
              <a href="javascript:openwindows('{{route('utilisateurs.edit',$utilisateur->id_users)}}',990,550,true)"><button type="button" class="btn btn-primary btn-flat" data-toggle="tooltip" data-original-title="Éditer"><i class="fa fa-edit"></i></button></a>
              <a href="javascript:openwindows('{{route('utilisateurs.show',$utilisateur->id_users)}}',350,350,true)"><button type="button" class="btn bg-olive btn-flat" data-toggle="tooltip" data-original-title="Afficher"><i class="fa fa-television"></i></button></a>
              <a href="javascript:openwindows('{{URL::To('attribuer_type_users/'.$utilisateur->id_users)}}',400,550,true)"><button type="button" class="btn btn-info btn-flat" data-toggle="tooltip" data-original-title="Attribuer Type"><i class="fa fa-language"></i></button></a>
              <a href="{{URL::To('visible/'.$utilisateur->id_users)}}"><button type="button" class="btn btn-danger btn-flat"  data-toggle="tooltip" data-original-title="Supprimer"><i class="fa fa-trash"></i></button></a>
            </td>
          </tr>
          @endforeach

        </tbody>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenoms</th>
            <th>Email</th>
            {{--<th>Contact</th>
              <th>Date</th>
            <th>Adresse</th>--}}
            <th>Statut</th>
            <th>Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>

  @stop