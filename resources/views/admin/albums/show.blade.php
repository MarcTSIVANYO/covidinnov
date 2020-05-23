@extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Albums / {{ $albums->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/albums/' . $albums->id . '/edit') }}" class="btn btn-warning btn-flat" title="Editer"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/albums', $albums->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-flat',
                                    'title' => 'Delete albums',
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
                                        <td> {{ $albums->titre }} </td>
                                    </tr>
                                    <tr>
                                        <th> Fixed :</th>
                                        <td> {{ $albums->fixed }} </td>
                                    </tr>
                                    <tr>
                                        <th> Publier :</th>
                                        <td> <?php if($albums->publier==1){
                                            echo "Oui";
                                            }else{ 
                                                echo "Non";
                                            } ?> </td>
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