@extends('templates.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10"> 
                <div class="panel panel-default">
                    <div class="panel-heading">Les innovations</div>
                    <div class="box-header ui-sortable-handle" style="cursor: move;"> 
                      <h3 class="box-title">Liste des innovations</h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools"> 
                       <a href="javascript:openwindows('{{ url('/admin/innovations/create') }}',1200,1200,true)" class="btn btn-block btn-primary" title="Add New innovation">
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
                                        <th> Titre </th>
                                        <th> Url </th>
                                        <th> Nom/Prénoms/Email </th>
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
                                        <td>  {{ $item->titre }}  </td>
                                        <td>{{ $item->url }} </td>
                                        <td>{{ $item->nom }} {{ $item->prenoms }} [{{ $item->email }}]</td>
                                        <td>
                                            <?php if($item->publier==1){
                                            echo "Oui";
                                            }else{ 
                                                echo "Non";
                                            } ?></td>
                                        <td>
                                            <?php   
                                                $type_innovations =  DB::select('select * from type_innovations');
                                            ?>
                                            @foreach($type_innovations as $value)
                                                @if($item->type_innovation_id==$value->id)
                                                    {{ $value->titre }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @if($item->publier==0)
                                                <a href="{{ url('/admin/enable_innovation/' . $item->id) }}" ><button type="button" class="btn btn-primary btn-flat" data-toggle="tooltip" data-original-title="Activer"><i class="fa fa-check"></i></button></a>
                                            @endif
                                            @if($item->publier==1)
                                                <a href="{{ url('/admin/desable_innovation/' . $item->id) }}"  ><button type="button" class="btn btn-success btn-flat"  data-toggle="tooltip" data-original-title="Modifier"><i class="fa fa-close"></i></button></a>
                                            @endif
                                            <a href="javascript:openwindows('{{ url('/admin/show_innovation/'. $item->id) }}',1200,1200,true)" ><button type="button" class="btn btn-secondary btn-flat"  data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></button></a>
                                            <a href="javascript:openwindows('{{ url('/admin/innovations/' . $item->id . '/edit') }}',1200,1200,true)"  ><button type="button" class="btn btn-warning btn-flat"  data-toggle="tooltip" data-original-title="Modifier"><i class="fa fa-edit"></i></button></a>

                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/innovation', $item->id],
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