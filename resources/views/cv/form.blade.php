
<div class="row"> 
    <div class="col-sm-12">
        <div class="col-lg-7 col-sm-7 col-xs-12 offset-md-3">
             @if(Session::has('flash_message'))
                <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
                  {{ Session::get('flash_message') }}
                </div> 
                @endif

                 @if(Session::has('error_message'))
                    <div class="alert alert-danger alert-dismissible" role="alert" data-plugin="alertify">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                      </button>
                      {{ Session::get('flash_message') }}
                    </div> 
                @endif 
        </div>
        <input type="hidden" name="user_id" value="{{auth()->user()->id_users}}">
        <input type="hidden" name="id" value="@if(isset($cv)){{$cv->id}}@endif">
 
<div class="form-group row ">
    <div class="col-md-2 {{ $errors->has('nom') ? 'has-error' : ''}}">
    {!! Form::label('nom', 'Nom : ', ['class' => 'control-label']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::text('nom', (isset($nom)) ? $nom : null, ['class' => 'form-control'] ) !!}
        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
    </div> 
 
    <div class="col-md-2 {{ $errors->has('prenoms') ? 'has-error' : ''}}">
        {!! Form::label('prenoms', 'Prénoms : ', ['class' => 'control-label']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::text('prenoms', (isset($prenoms)) ? $prenoms : null, ['class' => 'form-control']) !!}
            {!! $errors->first('prenoms', '<p class="help-block">:message</p>') !!}
    </div>  
</div> 
<div class="form-group row">
    <div class="col-md-2 {{ $errors->has('pseudo') ? 'has-error' : ''}}" >
        {!! Form::label('pseudo', 'Pseudo : ', ['class' => 'control-label']) !!} 
    </div>
    <div class="col-md-4">
        {!! Form::text('pseudo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pseudo', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="col-md-2 {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email : ', ['class' => ' control-label']) !!} 
    </div>
    <div class="col-md-4">
        {!! Form::text('email', (isset($email)) ? $email : null, ['class' => 'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>

</div>
<div class="form-group row ">
    <div class="{{ $errors->has('titre') ? 'has-error' : ''}} col-md-2">
        {!! Form::label('titre', 'Votre activité :', ['class' => ' control-label']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::text('titre', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
    </div> 
    <div class="{{ $errors->has('localisation') ? 'has-error' : ''}} col-md-2">
        
        {!! Form::label('localisation', 'Localisation :', ['class' => 'control-label']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::text('localisation', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('localisation', '<p class="help-block">:message</p>') !!}
    </div> 
</div> 

<div class="form-group row ">
    <div class="{{ $errors->has('adresse') ? 'has-error' : ''}} col-md-2">
        {!! Form::label('adresse', 'Adresse :', ['class' => 'control-label']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::text('adresse', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
    </div> 
    <div class="{{ $errors->has('localisation') ? 'has-error' : ''}} col-md-2">
        
        {!! Form::label('lien_drive', 'Lien Drive du CV :', ['class' => 'control-label']) !!}
    </div>
    <div class="col-md-4">
       {!! Form::text('lien_drive', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('lien_drive', '<p class="help-block">:message</p>') !!}
    </div> 
</div>

<div class="form-group row {{ $errors->has('about') ? 'has-error' : ''}}">
    {!! Form::label('about', 'A propos :', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8"> 
        {!! Form :: textarea('about',null,['id'=>'article-ckeditor','class'=>'form-control','autocomplete'=>'off','placeholder'=>'about ']) !!}

        {!! $errors->first('about', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="col-sm-12">
    Skills et expériences <hr/>
</div>
<div class="form-group row {{ $errors->has('skills') ? 'has-error' : ''}}">
    {!! Form::label('skills', 'Skills :', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8"> 
        {!! Form :: textarea('skills',null,['id'=>'article-ckeditor','class'=>'form-control','autocomplete'=>'off','placeholder'=>'skills ']) !!}

        {!! $errors->first('skills', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('experience') ? 'has-error' : ''}}">
    {!! Form::label('experience', 'Experience :', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-8"> 
        {!! Form :: textarea('experience',null,['id'=>'article-ckeditor2','class'=>'form-control','autocomplete'=>'off','placeholder'=>'Experience ']) !!}
        {!! $errors->first('experience', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-sm-12">
    Réseaux sociaux <hr/>
</div>
<div class="form-group row ">
    <div class=" {{ $errors->has('linkedin') ? 'has-error' : ''}} col-md-2">
    {!! Form::label('linkedin', 'www.linkedin.com/in/ ', ['class' => ' control-label']) !!}

    </div> 
    <div class="col-md-4">
        {!! Form::text('linkedin', null, ['class' => 'form-control']) !!}
        {!! $errors->first('linkedin', '<p class="help-block">:message</p>') !!}
    </div> 
    <div class=" {{ $errors->has('twitter') ? 'has-error' : ''}} col-md-2">
        {!! Form::label('twitter', 'www.twitter.com/', ['class' => ' control-label']) !!}
    </div> 
    <div class="col-md-4">
        {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
        {!! $errors->first('twitter', '<p class="help-block">:message</p>') !!}
    </div>
</div> 

<div class="form-group row ">
    <div class="{{ $errors->has('facebook') ? 'has-error' : ''}} col-md-2">
    {!! Form::label('facebook', 'www.facebook.com/ ', ['class' => ' control-label']) !!} 
    </div>
    <div class="col-md-4">
        {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
        {!! $errors->first('facebook', '<p class="help-block">:message</p>') !!}
    </div> 
     <div class="{{ $errors->has('instagram') ? 'has-error' : ''}} col-md-2">
    {!! Form::label('instagram', 'www.instagram.com/ ', ['class' => ' control-label']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
        {!! $errors->first('instagram', '<p class="help-block">:message</p>') !!}
    </div> 
</div> 

<div class="col-sm-12">
    Profils et banner <hr/>
</div>

<div class="form-group row ">

         <div class="{{ $errors->has('photo') ? 'has-error' : ''}} col-md-2">
            {!! Form::label('photo', 'Photo :', ['class' => ' control-label']) !!} 
        </div>
        <div class="col-sm-4">
          <div class="fileinput fileinput-new" data-provides="fileinput">
            <input name="img-photo" value="" type="hidden"/>
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                <img id="uploadpreview1" src="@if(isset($list)){{ asset($list->photo) }} @endif " alt=""/>
            </div>
            <div>
              <span class="btn btn-primary btn-file">
                <span class="fileinput-new" data-trigger="fileinput">Choisir </span>
                <span class="fileinput-exists" data-trigger="fileinput">Changer</span> 
            {!! Form :: file('img-photo',null,['class'=>'form-control']) !!}
              </span>
              <a href="javascript:void(0)" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Annuler</a>
            </div>
          </div>
    </div>  
    <div class="{{ $errors->has('img-banner') ? 'has-error' : ''}} col-md-2">
    {!! Form::label('img-banner', 'Banner :', ['class' => ' control-label']) !!}
    </div>
    <div class="col-md-4">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <input name="img-banner" value="" type="hidden"/>
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                <img id="uploadpreview1" src="@if(isset($list)){{ asset( $list->banner) }} @endif " alt=""/>
            </div>
            <div>
              <span class="btn btn-primary btn-file">
                <span class="fileinput-new" data-trigger="fileinput">Choisir </span>
                <span class="fileinput-exists" data-trigger="fileinput">Changer</span> 
            {!! Form :: file('img-banner',null,['class'=>'form-control']) !!}
              </span>
              <a href="javascript:void(0)" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Annuler</a>
            </div>
          </div>  
    </div>
</div>

<?php   
    $recherches =  DB::select('select * from recherches');
?>
<div class="form-group row">
    <label class="col-md-2 control-label">Recherche de :</label>
    <div class="col-md-4">
       <select name="recherche_id" class="form-control" required="">
        <option selected disabled>Selectionner</option>
            @foreach($recherches as $value)
                <option  <?php if(isset($list) && $list->recherche_id==$value->id) echo ' selected="selected"' ?> value="{{$value->id}}"  class="form-control">{{$value->titre}}</option>
            @endforeach
       </select>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-10 col-md-2">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Valider', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
</div>
</div>