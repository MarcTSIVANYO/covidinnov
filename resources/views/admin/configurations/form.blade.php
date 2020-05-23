@if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
      </button>
      {{ Session::get('flash_message') }}
    </div>
    <script type="text/javascript">
    opener.location.replace('{{URL::To('admin/configurations')}}');
    </script>
    @endif

<div class="form-group {{ $errors->has('nom_site') ? 'has-error' : ''}}">
    {!! Form::label('nom_site', 'Nom du Site', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('nom_site', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nom_site', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('url') ? 'has-error' : ''}}">
    {!! Form::label('url', 'Url du Site', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('url', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('telephone') ? 'has-error' : ''}}">
    {!! Form::label('telephone', 'Telephone', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('telephone', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('cel') ? 'has-error' : ''}}">
    {!! Form::label('cel', 'Cellulaire', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('cel', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('cel', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email de contact', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('adresse_physique') ? 'has-error' : ''}}">
    {!! Form::label('adresse_physique', 'Adresse Physique', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('adresse_physique', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('adresse_physique', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group ">
    {!! Form::label('logo', 'Logo', ['class' => 'col-md-2 control-label']) !!} 
        <div class="col-sm-4">
          <div class="fileinput fileinput-new" data-provides="fileinput">
            <input name="..." value="" type="hidden"/>
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                <img id="uploadpreview1" src="../@if(isset($configuration)){{ $configuration->logo }} @endif " alt=""/>
            </div>
            <div>
              <span class="btn btn-primary btn-file">
                <span class="fileinput-new" data-trigger="fileinput">Choisir </span>
                <span class="fileinput-exists" data-trigger="fileinput">Changer</span> 
            {!! Form :: file('logo',null,['class'=>'form-control']) !!}
              </span>
              <a href="javascript:void(0)" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Annuler</a>
            </div>
          </div>
    </div>  
    {!! Form::label('favicon', 'Favicon', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-4">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <input name="..." value="" type="hidden"/>
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                <img id="uploadpreview1" src="../@if(isset($configuration)){{ $configuration->favicon }} @endif " alt=""/>
            </div>
            <div>
              <span class="btn btn-primary btn-file">
                <span class="fileinput-new" data-trigger="fileinput">Choisir </span>
                <span class="fileinput-exists" data-trigger="fileinput">Changer</span> 
            {!! Form :: file('favicon',null,['class'=>'form-control']) !!}
              </span>
              <a href="javascript:void(0)" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Annuler</a>
            </div>
          </div>  
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-10 col-md-2">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Valider', ['class' => 'btn btn-primary']) !!}
    </div>
</div>