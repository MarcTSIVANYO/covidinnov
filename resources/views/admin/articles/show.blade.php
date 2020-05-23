@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Article / {{ $articles->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/articles/' . $articles->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editer"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/articles', $articles->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete articles',
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
                                        <td> {{ $articles->titre }} </td>
                                    </tr>
                                    <tr>
                                        <th> Libelle :</th>
                                        <td> {{ $articles->libelle }} </td>
                                    </tr>
                                    <tr>
                                        <th> Publier :</th>
                                        <td> <?php if($articles->publier==1){
                                            echo "Oui";
                                            }else{ 
                                                echo "Non";
                                            } ?> </td>
                                    </tr>
                                    <tr>
                                        <th> Categorie :</th>
                                        <td> 
                                        @foreach($categories as $categorie)
                                                @if($articles->page_id=$categorie->id)
                                                    {{ $categorie->titre }}
                                                @endif
                                            @endforeach 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Fichier :</th>
                                        <td> {{ $articles->fichier }} </td>
                                    </tr>
                                    <tr>
                                        <th> Contenu :</th>
                                        <td> {!!substr($articles->contenu,0,1200)!!} </td>
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