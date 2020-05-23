@extends('templates.background')
@section('content')
<div class="box box-primary">
  <div class="box-header">
    <div class="box-header with-border">
      <h3 class="box-title"><span style="color: blue">{{ $utilisateur->nom_users }} {{ $utilisateur->prenoms_users }}</span></h3>
    </div>
  <!-- /.box-header -->
  
  {!! Form::open(['url' => 'attribuer_type_users_post' ]) !!}

  @if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
      </button>
      {{ Session::get('flash_message') }}
    </div>
    <script type="text/javascript">
    opener.location.replace('{{URL::To('utilisateurs')}}');
    </script>
    @endif


  <div class="row">
        <div class="col-xs-4">
          <div class="form-group">
          </div>
        </div>
        <div class="col-xs-8">
          <div class="form-group">
            {!! Form::hidden('id_users', $id, ['class' => 'form-control']) !!}
          </div>
        </div>
      </div>
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
            <th>Type d'utilisateur</th>
        </tr>
          <?php $type_users_save = $type_users; 
          ?>
          @foreach($type_users_save as $type_user)
          <tr>
            <td>
              <?php $groupe_users_save = $groupe_users; $m = 0;?>
                  @foreach($groupe_users_save as $groupe_user)
                    @if($groupe_user->id_type_users == $type_user->id_type_users)
                      <input  type="checkbox" checked name="type_users[]" value="{{ $type_user->id_type_users}}" />
                        {{ $type_user->libelle_type_users }}
                      <?php  $m = 1; ?>
                      @break
                    @endif
                  @endforeach
              @if($m == 0)
                <input type="checkbox" name="type_users[]" value="{{ $type_user->id_type_users }}" />
                {{ $type_user->libelle_type_users }}
              @endif
            </td>
          </tr>
          @endforeach
      </thead>
    </table>
    <div class="col-xs-12" align="right">
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>
      </div>
  </div>
  <!-- /.box-body -->
  {!! Form::close() !!}
</div>
@stop