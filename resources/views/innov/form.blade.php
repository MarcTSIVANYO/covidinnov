
<div class="row"> 
    <div class="col-sm-12">
        <div class="col-lg-10 col-sm-10 col-xs-12 offset-md-2">
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
        <input type="hidden" name="id" value="@if(isset($list)) {{$list->id}} @endif"/>

        @if(isset(Auth::user()->id_users) && Auth::user()->admin==1)
            <input type="hidden" name="publier" value="1"/>
        @endif

    <div class="form-group row "></div> 
      <div class="form-group row ">
        <div class="col-md-2 {{ $errors->has('titre') ? 'has-error' : ''}}">
        {!! Form::label('titre', 'Titre : ', ['class' => 'control-label']) !!}
        </div>
        <div class="col-md-10">
            {!! Form::text('titre', (isset($titre)) ? $titre : null, ['class' => 'form-control', 'required' => 'required'] ) !!}
            {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
        </div>  
    </div> 

    <div class="form-group row ">  
        <div class="col-md-2 {{ $errors->has('description') ? 'has-error' : ''}}">
            {!! Form::label('description', 'Description : ', ['class' => 'control-label']) !!}
        </div>
        <div class="col-md-10">
            {!! Form::textarea('description', (isset($description)) ? $description : null, ['class' => 'form-control', 'required' => 'required']) !!}
                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
        </div>  
    </div> 

    <div class="form-group row">
        <div class="col-md-2 {{ $errors->has('url') ? 'has-error' : ''}}" >
            {!! Form::label('url', 'Site web : ', ['class' => 'control-label']) !!} 
        </div>
        <div class="col-md-4"> 
            <input type="text" placeholder="https:// "  class="form-control" name="url" value="@if(isset($list)) {{$list->url}} @endif">

            {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="col-md-2 {{ $errors->has('image') ? 'has-error' : ''}}">
        {!! Form::label('img', 'Image : ', ['class' => ' control-label']) !!} 
        </div>
        <div class="col-md-4">
            {!! Form::file('img', (isset($i)) ? $image : null, ['class' => 'form-control', 'required' => '']) !!}
            {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
        </div> 
    </div>

    <div class="form-group row">
         <?php   
            $type_innovations =  DB::select('select * from type_innovations');
            $pays =  DB::select('select * from pays');
        ?> 
            <label class="col-md-2 control-label">Domaine:</label>
            <div class="col-md-4">
               <select name="type_innovation_id" class="form-control select2" required>
                <option value="" selected disabled>Selectionner</option>
                    @foreach($type_innovations as $value)
                        <option  <?php if(isset($list) && $list->type_innovation_id==$value->id) echo ' selected="selected"' ?> value="{{$value->id}}"  class="form-control">{{$value->titre}}</option>
                    @endforeach
               </select> 
           </div>
            <label class="col-md-2 control-label">Pays:</label>
            <div class="col-md-4">
               <select name="pays_id" class="form-control select2" required>
                <option selected disabled value="">Selectionner</option>
                    @foreach($pays as $value)
                        <option  <?php if(isset($list) && $list->pays_id==$value->id) echo ' selected="selected"' ?> value="{{$value->id}}"  class="form-control">{{$value->nom}}</option>
                    @endforeach
               </select>
            </div> 
    </div>


<div class="col-sm-12">
    <hr/>
</div>
<div class="form-group row ">
    <div class="{{ $errors->has('nom') ? 'has-error' : ''}} col-md-2">
        {!! Form::label('nom', 'Nom :', ['class' => ' control-label']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::text('nom', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
    </div> 
    <div class="{{ $errors->has('prenoms') ? 'has-error' : ''}} col-md-2">
        
        {!! Form::label('prenoms', 'Prénoms :', ['class' => 'control-label']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::text('prenoms', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('prenoms', '<p class="help-block">:message</p>') !!}
    </div> 
</div> 

<div class="form-group row ">
    <div class="{{ $errors->has('email') ? 'has-error' : ''}} col-md-2">
        {!! Form::label('email', 'Email :', ['class' => 'control-label']) !!}
    </div>
    <div class="col-md-10">
        {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>  
</div>

<div class="form-group">
    <div class="col-md-offset-10 col-md-2">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Valider', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
 
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script> 

<script type="text/javascript">
    $(document).ready(function() {
      $(".select2").select2(); 
    });
</script>
</div>
</div>