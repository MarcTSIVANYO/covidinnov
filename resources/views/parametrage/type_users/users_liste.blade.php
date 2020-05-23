@extends('templates.base')

@section('content')
<div class="box box-primary">
  <div class="box-header">
    <div class="box-header col-xs-10">
      <?php if (isset($type_user)) {
       ?>
       <h3 >Liste des utilisateurs de type : 
       <a href="{{URL::To('type_users')}}">{{ $type_user->libelle_type_users }}</a>
       </h3>
      <?php
      } else {
        ?>
        <h3 >Liste des utilisateurs</h3>
      <?php
      } ?>
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
              <th>Contact</th>
              <th>Date</th>
              <th>Adresse</th>
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
            <td>{{ $utilisateur->contact_users }}</td>            

            <td>{{date('d-m-Y',strtotime( $utilisateur->date_users))}}</td>      
            <td>{{ $utilisateur->adresse_users }}</td>  
            
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