@if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
      </button>
      {{ Session::get('flash_message') }}
    </div> 
    <script type="text/javascript">
    opener.location.replace("{{URL::To('admin/albums')}}");
    </script>
    @endif

<div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
    {!! Form::label('titre', 'Titre', ['class' => 'col-sm-2 control-label']) !!}
    <div class=" col-sm-10 ">
        {!! Form::text('titre', null, ['class' => 'form-control']) !!}
        {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
    </div>
</div> 
<div class="form-group {{ $errors->has('fixed') ? 'has-error' : ''}}">
    {!! Form::label('fixed', 'Fixed-Bar', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('fixed', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('fixed', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Indice', 'Indice', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::number('indice', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('Indice', '<p class="help-block">:message</p>') !!}
    </div>
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
</div>
<div class="form-group">
    <div class="col-sm-offset-10 col-sm-1">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Valider', ['class' => 'btn btn-primary']) !!}
    </div>
</div>