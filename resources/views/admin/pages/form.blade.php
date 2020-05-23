@if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
      </button>
      {{ Session::get('flash_message') }}
    </div>
    <script type="text/javascript">
    opener.location.replace('{{URL::To('admin/pages')}}');
    </script>
    @endif

<div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
    {!! Form::label('titre', 'Titre', ['class' => 'col-sm-2 control-label']) !!}
    <div class=" col-sm-10 ">
        {!! Form::text('titre', null, ['class' => 'form-control']) !!}
        {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('section_id') ? 'has-error' : ''}}">
    {!! Form::label('section_id', 'Section', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('section_id', $sections, Session::get('section_id'), ['class' => 'form-control select2']) !!}
        {!! $errors->first('section_id', '<p class="help-block">:message</p>') !!}
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
    {!! Form::label('fichier', 'Fichier', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form :: file('fichier',null,['class'=>'form-control','autocomplete'=>'off']) !!} 
        {!! $errors->first('fichier', '<p class="help-block">:message</p>') !!}
    </div> 
    {!! Form::label('position', 'Position', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::number('indice', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('position', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('publier') ? 'has-error' : ''}}">
    {!! Form::label('publier', 'Publier', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        <div class="checkbox">
            <label>{!! Form::radio('publier', '1', true) !!} Oui</label>
        </div>
        <div class="checkbox">
            <label>{!! Form::radio('publier', '0') !!} Non</label>
        </div>
        {!! $errors->first('publier', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('contenu') ? 'has-error' : ''}}">
    {!! Form::label('contenu', 'Contenu', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10"> 
        {!! Form :: textarea('contenu',null,['id'=>'article-ckeditor','class'=>'form-control','autocomplete'=>'off','placeholder'=>'Contenu ']) !!}
        {!! $errors->first('contenu', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-10 col-sm-1">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Valider', ['class' => 'btn btn-primary']) !!}
    </div>
</div>