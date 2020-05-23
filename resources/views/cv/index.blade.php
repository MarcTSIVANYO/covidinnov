@extends('templates.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11"> 
                <div class="panel panel-default">
                    <div class="panel-heading">CV des personnes</div>
                    <div class="box-header ui-sortable-handle" style="cursor: move;"> 
                      <h3 class="box-title">Liste des CV des personnes</h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools"> 
                       <a href="javascript:openwindows('{{ url('/admin/cv/create') }}',1200,1200,true)" class="btn btn-block btn-primary" title="Add New cv">
                        <span class="glyphicon glyphicon-plus"/> Nouveau</a>
                      </div>
                      <!-- /. tools -->
                    </div> 
                    <div class="panel-body"> 
                        <div class="table-responsive">
                            <table class="table table-borderless" id="example1">
                                <thead>
                                    <tr>
                                        <th>Indice</th>
                                        <th> Nom </th>
                                        <th> Prénoms </th>
                                        <th> Publier </th>
                                        <th> Recherche </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                @foreach($lists as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>
                                              
                                             {{ $item->nom }} 
                                        </td>
                                        <td>{{ $item->prenoms }}</td>
                                        <td>
                                            <?php if($item->publier==1){
                                            echo "Oui";
                                            }else{ 
                                                echo "Non";
                                            } ?></td>
                                        <td>
                                            <?php   
                                                $recherches =  DB::select('select * from recherches');
                                            ?>
                                            @foreach($recherches as $value)
                                                @if($item->recherche_id==$value->id)
                                                    {{ $value->titre }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @if($item->publier==0)
                                                <a href="{{ url('/admin/enable_cv/' . $item->id) }}" ><button type="button" class="btn btn-primary btn-flat" data-toggle="tooltip" data-original-title="Activer"><i class="fa fa-check"></i></button></a>
                                            @endif
                                            @if($item->publier==1)
                                                <a href="{{ url('/admin/desable_cv/' . $item->id) }}"  ><button type="button" class="btn btn-success btn-flat"  data-toggle="tooltip" data-original-title="Modifier"><i class="fa fa-close"></i></button></a>
                                            @endif
                                            <a href="{{ url($item->pseudo) }}" target="_blank"  ><button type="button" class="btn btn-secondary btn-flat"  data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></button></a>
                                            <a href="javascript:openwindows('{{ url('/admin/cv/' . $item->id . '/edit') }}',1200,1200,true)"  ><button type="button" class="btn btn-warning btn-flat"  data-toggle="tooltip" data-original-title="Modifier"><i class="fa fa-edit"></i></button></a>

                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/cv', $item->id],
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
                                     <?php $i++; ?>
                                @endforeach
                                </tbody>
                            </table> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection