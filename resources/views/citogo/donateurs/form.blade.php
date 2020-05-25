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
<div class="form-group row">
    <input type="hidden" required value="@if(isset($object) &&  $object!=null ){{$object->id}}@else{{'0'}}@endif" name="id" >
    <input type="hidden" name="user_id" value="{{auth()->user()->id_users}}">

	<label class="control-label" for="typedonateur_id">Type :</label>
	<select name="typedonateur_id" class="form-control" required="">
        <option selected disabled>Selectionner</option>
            @foreach($types as $value)
                <option  <?php if(isset($object) && $object->typedonateur_id==$value->id) echo ' selected="selected"' ?> value="{{$value->id}}"  class="form-control">{{$value->titre}}</option>
            @endforeach
       </select>

	<label class="control-label" for="nom">Nom :</label>
	<input type="text" class="form-control" name="nom" value="@if(isset($object) &&  $object!=null){{$object->nom}}@else{{old('nom')}}@endif" required="" />

	<label class="control-label" for="prenoms">Prenoms :</label>
	<input type="text" class="form-control" name="prenoms" id="prenoms " value="@if(isset($object) &&  $object!=null){{$object->prenoms}}@else{{old('prenoms')}}@endif" required="" />

	<label class="control-label" for="nationalite">Nationalité :</label>
	<input type="text" class="form-control" name="nationalite" id="nationalite " value="@if(isset($object) &&  $object!=null){{$object->nationalite}}@else{{old('nationalite')}}@endif" required="" />

	<label class="control-label" for="contact">Contact :</label>
	<input type="text" class="form-control" name="contact" id="contact " value="@if(isset($object) &&  $object!=null){{$object->contact}}@else{{old('contact')}}@endif" required="" />

	<label class="control-label" for="quartier">Quartier</label>
	<input type="text" class="form-control" name="quartier" id="quartier " value="@if(isset($object) &&  $object!=null){{$object->contact}}@else{{old('contact')}}@endif" required="" />

	<label class="control-label" for="ville_id">Ville :</label>
	<input type="text" class="form-control" name="ville_id" id="ville_id " value="@if(isset($object) &&  $object!=null){{$object->ville_id}}@else{{old('ville_id')}}@endif" required="" />

	<label class="control-label" for="geolocalisation">Geolocalisation :</label>
	<input type="text" class="form-control" name="geolocalisation" id="geolocalisation " value="@if(isset($object) &&  $object!=null){{$object->geolocalisation}}@else{{old('geolocalisation')}}@endif" required="" />

	<label class="control-label" for="marie">Marie :</label>
	<input type="text" class="form-control" name="marie" id="marie " value="@if(isset($object) &&  $object!=null){{$object->marie}}@else{{old('marie')}}@endif" required="" />

	<label class="control-label" for="region_id">Region :</label>
	<select name="region_id" class="form-control" required="">
        <option selected disabled>Selectionner</option>
            @foreach($regions as $value)
                <option  <?php if(isset($object) && $object->region_id==$value->id) echo ' selected="selected"' ?> value="{{$value->id}}"  class="form-control">{{$value->titre}}</option>
            @endforeach
       </select>
</div>
<div class="form-group row">
	<div  >
		<button type="submit" class="btn btn-primary">Enregistrer</button>
	</div>
	@if(isset($object))
		<div style="margin-left: 120px;">
			<a href="{{URL::To('donateurs')}}" type="submit" class="btn btn-secondary">Actualiser</a>
		</div>
	@endif
</div>
</div>
