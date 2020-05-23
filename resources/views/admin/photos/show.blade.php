@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Photo / {{ $photos->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/photos/' . $photos->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editer"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/photos', $photos->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete photos',
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
                                        <td> {{ $photos->titre }} </td>
                                    </tr>
                                    <tr>
                                        <th> Libelle :</th>
                                        <td> {{ $photos->libelle }} </td>
                                    </tr>
                                    <tr>
                                        <th> Indice :</th>
                                        <td> {{ $photos->indice }} </td>
                                    </tr>
                                    <tr>
                                        <th> Publier :</th>
                                        <td> <?php if($photos->publier==1){
                                            echo "Oui";
                                            }else{ 
                                                echo "Non";
                                            } ?> </td>
                                    </tr> 
                                    <tr>
                                        <th> Image :</th>
                                        <td>  <img class="img-responsive" src="../../{{ $photos->fichier }}" alt="Image" style="width: 60%; height: 35%;"></td>
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