@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Categorie / {{ $categories->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/categories/' . $categories->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editer"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/categories', $categories->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete categories',
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
                                        <td> {{ $categories->titre }} </td>
                                    </tr>
                                    <tr>
                                        <th> Libelle :</th>
                                        <td> {{ $categories->libelle }} </td>
                                    </tr>
                                    <tr>
                                        <th> Publier :</th>
                                        <td> <?php if($categories->publier==1){
                                            echo "Oui";
                                            }else{ 
                                                echo "Non";
                                            } ?> </td>
                                    </tr>
                                    <tr>
                                        <th> Page :</th>
                                        <td> 
                                        @foreach($pages as $page)
                                                @if($categories->page_id=$page->id)
                                                    {{ $page->titre }}
                                                @endif
                                            @endforeach 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Fichier :</th>
                                        <td> {{ $categories->fichier }} </td>
                                    </tr>
                                    <tr>
                                        <th> Contenu :</th>
                                        <td> {!!substr($categories->contenu,0,1200)!!} </td>
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