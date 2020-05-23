@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Page / {{ $pages->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/pages/' . $pages->id . '/edit') }}" class="btn btn-warning btn-flat" title="Editer"><span class="fa fa-edit" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/pages', $pages->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-flat',
                                    'title' => 'Delete pages',
                                    'onclick'=>'return confirm("Confirmer la suppression?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th style="width: 15%"> Titre : </th>
                                        <td> {{ $pages->titre }} </td>
                                    </tr>
                                    <tr>
                                        <th> Libelle :</th>
                                        <td> {{ $pages->libelle }} </td>
                                    </tr>
                                    <tr>
                                        <th> Publier :</th>
                                        <td> <?php if($pages->publier==1){
                                            echo "Oui";
                                            }else{ 
                                                echo "Non";
                                            } ?> </td>
                                    </tr>
                                    <tr>
                                        <th> Section :</th>
                                        <td>  @foreach($sections as $section)
                                                @if($pages->page_id=$section->id)
                                                    {{ $section->titre }}
                                                @endif
                                            @endforeach 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Fichier :</th>
                                        <td> {{ $pages->fichier }} </td>
                                    </tr>
                                    <tr>
                                        <th> Contenu :</th>
                                        <td> {!!substr($pages->contenu,0,1200)!!} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection