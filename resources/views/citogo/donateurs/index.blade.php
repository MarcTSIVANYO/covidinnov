 
@extends((Auth::user()->admin==1) ? 'templates.base' : 'layouts.frontend.base')

@section('title','Ajouter')
@section('content')
<?php  
  $view='donateur';
  $views=$view.'s'; if(isset($$view) && $$view) {$object=$$view;}else{$object=null;}  $objects=$$views;
  $monmenu='donateurs';
?>  
 @if(Auth::user()->admin!=1)
     <!-- section --> 
     <div class="innerpage_banner">
        <div class="container">
           <div class="row"> 
              <div class="col-md-12">
                 <h2>Enrégistrer un donateur</h2>  
                 <a title="Retour" style="text-align: left;" class="btn btn-success " href="{{url('dashboard')}}">
                    <i class="fa fa-backward"></i>  RETOUR
                  </a>            
              </div>
           </div>
        </div>
     </div>
  @endif
<!-- end section -->
<div id="contact" class="contact-box">
  @if(isset($objects) &&  $objects->toArray() !=null)
  <div class="container"> 
    <div class="row">
      <div class="col-md-11" > 
      <div class=" panel panel-default">
          <div class="box-header">
            <h2 class="box-title">Liste des donateurs <span class="badge badge-pill badge-primary">{{$objects->count()}}</span></h2>
          </div><!-- /.box-header --> 
            <div class="box-body panel-body"> 
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Nom</th> 
                          <th>Prénoms</th> 
                          <th>Nationalité</th> 
                          <th>Contact</th> 
                          <th>Type donateur</th> 
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($objects as $f) 
                        <tr> 
                          <td>{{ $f->nom}}</td> 
                          <td>{{ $f->prenoms}}</td> 
                          <td>{{ $f->nationalite}}</td> 
                          <td>{{ $f->contact}}</td> 
                          <td>
                            @foreach($types as $val)
                              @if($f->typedonateur_id==$val->id) 
                                {{$val->titre}}
                              @endif
                            @endforeach 
                          </td> 
                          <td>   
                            <a title="editer" style="text-decoration: none;" class="btn btn-primary " href="{{url($views.'/'.$f->id.'/edit')}}">
                              <i class="fa fa-edit"></i>Editer
                              </a>

                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['/donateurs', $f->id],
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
                  </div><!-- /.box-body -->
            </div> 
      </div>
    </div>
  </div>
  <hr/>
@endif

  <div class="container"> 
    <div class="row">
      <div class="col-md-12 " > 
        {!! Form::open(['url' => $views, 'class'=>'formulairemodal', 'resource'=>url($views)]) !!}
          {{ csrf_field() }}
          <div class="box-body">
            <div class="row">
                
                @include ('citogo.donateurs.form')
                           
              </div>
            </div> 
      
      <!-- /.box-body -->            
      {!! Form::close() !!}
      </div>
    </div>
  </div>



    
  </div> 

    
@stop


