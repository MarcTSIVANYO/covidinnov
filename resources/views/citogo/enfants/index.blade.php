@extends((Auth::user()->admin==1) ? 'templates.base' : 'layouts.frontend.base')
@section('title','Ajouter')
@section('content')
<?php  
  $view='enfant';
  $views=$view.'s'; if(isset($$view) && $$view) {$object=$$view;}else{$object=null;}  $objects=$$views;
  $monmenu='enfants';
?>  
 @if(Auth::user()->admin!=1)
     <!-- section --> 
 <div class="innerpage_banner">
    <div class="container">
       <div class="row"> 
          <div class="col-md-12">
             <h2>Enrégistrer les  enfants de {{$citoyen->nom}} {{$citoyen->prenoms}}</h2> 
             <a title="Retour" style="text-align: left;" class="btn btn-success " href="{{url('dashboard')}}">
                <i class="fa fa-backward"></i>  RETOUR
              </a>              
          </div>
       </div>
    </div>
 </div>
<!-- end section -->
@endif
<div id="contact" class="contact-box">
  @if(isset($objects) &&  $objects->toArray() !=null)
  <div class="container"> 
    <div class="row">
      <div class="col-md-11" > 
      <div class=" panel panel-default"> 
          <div class="box-header">
            <h2 class="box-title">Liste des enfants</h2>
          </div><!-- /.box-header -->
            <div class="box-body panel-body"> 
                <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nom</th> 
                    <th>Prénoms</th> 
                    <th>Nationalité</th> 
                    <th>Numéro pièce</th>   
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($objects as $f) 
                  <tr> 
                    <td>{{ $f->nom}}</td> 
                    <td>{{ $f->prenoms}}</td> 
                    <td>{{ $f->nationalite}}</td> 
                    <td>{{ $f->numeropieces}}</td>  
                    <td>   
                      <a title="editer" style="text-decoration: none;" class="btn btn-primary " href="{{url($views.'/'.$f->id.'/edit')}}">
                        <i class="fa fa-edit"></i>Editer
                        </a>

                          {!! Form::open([
                              'method'=>'DELETE',
                              'url' => ['/enfants', $f->id],
                              'style' => 'display:inline'
                          ]) !!}
                              {!! Form::button('<span  class="fa fa-trash" aria-hidden="true" title="Supprimer" />', array(
                                      'type' => 'submit',
                                      'class' => 'btn btn-danger btn-flat',
                                      'title' => 'Supprimer',
                                      'onclick'=>'return confirm("Voulez-vous supprimer?")'
                              )) !!}
                          {!! Form::close() !!}
                    </td>
                  </tr>
              
                  @endforeach
                </tbody> 
              </table>
          </div><!-- /.box-body -->

        </div>  
        </div>
      </div>
    </div>
  </div>
  <hr/>
@endif
 @if(isset($citoyen))
  <div class="container"> 
    <div class="row">
      <div class="col-md-12 " > 
        {!! Form::open(['url' => $views, 'class'=>'formulairemodal', 'resource'=>url($views)]) !!}
          {{ csrf_field() }}
          <div class="box-body">
            <div class="row">
                
                @include ('citogo.enfants.form')
                           
              </div>
            </div> 
      
      <!-- /.box-body -->            
      {!! Form::close() !!}
      </div>
    </div>
  </div>
  @endif
</div> 
    
@stop


