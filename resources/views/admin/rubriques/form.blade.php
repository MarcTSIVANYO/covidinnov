@if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
      </button>
      {{ Session::get('flash_message') }}
    </div>
    <script type="text/javascript">
    opener.location.replace('{{URL::To('admin/rubriques')}}');
    </script>
    @endif

<div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
    {!! Form::label('titre', 'Titre', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('titre', null, ['class' => 'form-control']) !!}
        {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('libelle') ? 'has-error' : ''}}">
    {!! Form::label('libelle', 'Libelle', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('libelle', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('libelle', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fichier') ? 'has-error' : ''}}">
    {!! Form::label('fichier', 'Fichier', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fichier', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('fichier', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('position') ? 'has-error' : ''}}">
    {!! Form::label('position', 'Position', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('position', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('position', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('contenu') ? 'has-error' : ''}}">
    {!! Form::label('contenu', 'Contenu', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('contenu', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('contenu', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('publier') ? 'has-error' : ''}}">
    {!! Form::label('publier', 'Publier', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
                    <div class="checkbox">
                <label>{!! Form::radio('publier', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('publier', '0', true) !!} No</label>
            </div>
        {!! $errors->first('publier', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('id_section') ? 'has-error' : ''}}">
    {!! Form::label('id_section', 'Id Section', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('id_section', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('id_section', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>