@if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
      </button>
      {{ Session::get('flash_message') }}
    </div>
    <script type="text/javascript">
    opener.location.replace('{{URL::To('admin/sections')}}');
    </script>
    @endif

<div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
    {!! Form::label('titre', 'Titre', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('titre', null, ['class' => 'form-control']) !!}
        {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fixe_section') ? 'has-error' : ''}}">
    {!! Form::label('fixe_section', 'Fixe Section', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fixe_section', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('fixe_section', '<p class="help-block">:message</p>') !!}
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


<div class="form-group">
    <div class="col-md-offset-10 col-md-1">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Valider', ['class' => 'btn btn-primary']) !!}
    </div>
</div>