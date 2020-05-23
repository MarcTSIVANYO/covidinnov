@if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
      </button>
      {{ Session::get('flash_message') }}
    </div> 
    <script type="text/javascript">
    opener.location.replace("{{URL::To('admin/photos/list_by/'.Session::get('album_id'))}}");
    </script>
    @endif

<div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
    {!! Form::label('titre', 'Titre', ['class' => 'col-sm-2 control-label']) !!}
    <div class=" col-sm-10 ">
        {!! Form::text('titre', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
    </div>
</div> 
<div class="form-group {{ $errors->has('libelle') ? 'has-error' : ''}}">
    {!! Form::label('libelle', 'Libelle', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('libelle', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('libelle', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('position', 'Indice', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::number('indice', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('position', '<p class="help-block">:message</p>') !!}
    </div> 
    {!! Form::label('album_id', 'Album', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::select('album_id', $albums, null, ['class' => 'form-control select2']) !!}
        {!! $errors->first('album_id', '<p class="help-block">:message</p>') !!}
    </div>
</div> 

<div class="form-group {{ $errors->has('publier') ? 'has-error' : ''}}">
    {!! Form::label('publier', 'Publier', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        <div class="checkbox">
            <label>{!! Form::radio('publier', '1', true) !!} Oui</label>
        </div>
        <div class="checkbox">
            <label>{!! Form::radio('publier', '0') !!} Non</label>
        </div>
        {!! $errors->first('publier', '<p class="help-block">:message</p>') !!}
    </div>
    <label for="src_photo" class="col-sm-2 control-label">Image</label>
    <div class="col-sm-4">
      <div class="fileinput fileinput-new" data-provides="fileinput">
        <input name="..." value="" type="hidden"/>
        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
            <img id="uploadpreview1" src="../../../@if(isset($photos)){{$photos->fichier}} @endif " alt=""/>
        </div>
        <div>
          <span class="btn btn-primary btn-file">
            <span class="fileinput-new" data-trigger="fileinput">Choisir </span>
            <span class="fileinput-exists" data-trigger="fileinput">Changer</span> 
              {!! Form :: file('fichier',null,['class'=>'form-control','autocomplete'=>'off']) !!}
          </span>
          <a href="javascript:void(0)" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Annuler</a>
        </div>
      </div>
    </div>
</div>
    
<div class="form-group">
    <div class="col-sm-offset-11 col-sm-1">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Valider', ['class' => 'btn btn-primary']) !!}
    </div>
</div>