@extends('templates.background')
@section('content')
<div class="box box-primary">
  <div class="box-header">
    <div class="box-header with-border">
      <h3 class="box-title">Attribution de droits : <span style="color: blue">
        {{ $type_user->libelle_type_users }}</span></h3>
    </div>
  <!-- /.box-header -->
  
  {!! Form::open(['url' => 'droits_type_users_post' ]) !!}

  @if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
      </button>
      {{ Session::get('flash_message') }}
    </div>
    <script type="text/javascript">
    opener.location.replace('{{URL::To('type_users')}}');
    </script>
    @endif


  <div class="row">
        <div class="col-xs-4">
          <div class="form-group">
          </div>
        </div>
        <div class="col-xs-8">
          <div class="form-group">
            {!! Form::hidden('id_type_users', $id, ['class' => 'form-control']) !!}
          </div>
        </div>
      </div>
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <?php $menus_save = $menus; 
          use App\SousMenu;
          ?>
          @foreach($menus_save as $menu)
          <?php 
            $recherche = SousMenu::where('id_menus', $menu->id_menus)->count();
          ?>
          @if($recherche != 0)
          <th>
            <input type="checkbox" checked disabled name="menus_choisi[]" value="{{ $menu->id_menus }}" />
            {{ $menu->titre_menus }}
          </th>
          @else
            <th>
              <?php $droits_save = $droits; $m = 0;?>
                  @foreach($droits_save as $droit)
                    @if($droit->id_menus == $menu->id_menus)
                      <input  type="checkbox" checked name="menus[]" value="{{ $menu->id_menus }}" />
                        {{ $menu->titre_menus }}
                      <?php  $m = 1; ?>
                      @break
                    @endif
                  @endforeach
              @if($m == 0)
                <input type="checkbox" name="menus[]" value="{{ $menu->id_menus }}" />
                {{ $menu->titre_menus }}
              @endif
            </th>
          @endif
          @endforeach
        </tr>
      </thead>
      <tbody>
        <tr>
         <?php $menus_save = $menus; 
         ?>
          @foreach($menus_save as $menu)
            <?php $sous_menus_save = $sous_menus; ?>
            <td> 
              @foreach($sous_menus_save as $sous_menu)
                @if($sous_menu->id_menus == $menu->id_menus)
                <?php $sous_droits_save = $droits; $i = 0;?>
                  <p>
                  @foreach($sous_droits_save as $droit)
                    @if($droit->id_sous_menus == $sous_menu->id_sous_menus)
                      <?php $i = 1;?>
                      <input  type="checkbox" checked name="sous_menus[]" value="{{ $sous_menu->id_sous_menus }}" />
                      @break
                    @endif
                  @endforeach
                  @if($i == 0)
                    <input  type="checkbox" name="sous_menus[]" value="{{ $sous_menu->id_sous_menus }}" />
                  @endif
                    {{ $sous_menu->titre_sous_menus }}
                  </p>
                @endif
              @endforeach
            </td>
          @endforeach
        </tr>
      </tbody>
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