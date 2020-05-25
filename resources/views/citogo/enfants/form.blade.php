<div class="col-lg-7 col-sm-7 col-xs-12 offset-md-3">
   @if(Session::has('flash_message'))
   <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×  </span>
      </button>
      {{ Session::get('flash_message') }}
   </div>
   @endif
   @if(Session::has('error_message'))
   <div class="alert alert-danger alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×  </span>
      </button>
      {{ Session::get('flash_message') }}
   </div>
   @endif 
   <div class="form-group row">
      <input type="hidden" required value="@if(isset($object) &&  $object!=null ){{$object->id}}@else{{'0'}}@endif"  class="form-control" class="form-control" name="id" >
      <input type="hidden"  class="form-control"  class="form-control" name="citoyen_id" value="{{$citoyen->id}}"> 
		<label class="control-label" for="nom">Nom :</label><input type="text" class="form-control" name="nom" id="nom"  value="@if(isset($object) &&  $object!=null){{$object->nom}}@else{{old('nom')}}@endif" required=""  />

		<label class="control-label" for="prenoms">Prénoms :</label><input type="text" class="form-control" name="prenoms" id="prenoms"  value="@if(isset($object) &&  $object!=null){{$object->prenoms}}@else{{old('prenoms')}}@endif" required=""  />

		<label class="control-label" for="nationalite">Nationalité :</label><input type="text" class="form-control" name="nationalite" id="nationalite"  value="@if(isset($object) &&  $object!=null){{$object->nationalite}}@else{{old('nationalite')}}@endif" required=""  />

		<label class="control-label" for="datenaiss">Date de naissance :</label><input type="date" class="form-control" name="datenaiss" id="datenaiss"  value="@if(isset($object) &&  $object!=null){{$object->datenaiss}}@else{{old('datenaiss')}}@endif" required=""  />

		<label class="control-label" for="villenaiss">Ville de naissance :</label><input type="text" class="form-control" name="villenaiss" id="villenaiss"  value="@if(isset($object) &&  $object!=null){{$object->villenaiss}}@else{{old('villenaiss')}}@endif" required=""  />


		<label class="control-label" for="typepiece">Type pièce :</label>
		<select class="form-control" class="form-control" name="typepiece" id="typepiece">
	         <option selected disabled>Votre choix</option>
	         <option <?php if(isset($object) &&  $object->typepiece=='CENI') echo ' selected="selected"' ?> value="CENI">CENI</option>
	         <option <?php if(isset($object) &&  $object->typepiece=='CNI') echo ' selected="selected"' ?> value="CNI">Mlle/CNI</option>
	         <option <?php if(isset($object) &&  $object->typepiece=='CNI') echo ' selected="selected"' ?> value="PASSPORT">PASSPORT</option>
	      </select>
		<label class="control-label" for="numeropieces">Numéro pièces :</label>
		<input type="text" class="form-control" name="numeropieces" id="numeropieces"  value="@if(isset($object) &&  $object!=null){{$object->numeropieces}}@else{{old('numeropieces')}}@endif" required=""  />


		<label class="control-label" for="responsabilite">Je suis son/sa :</label>
		<select class="form-control" class="form-control" name="responsabilite" id="responsabilite">
	         <option selected disabled>Votre choix</option>
	         <option <?php if(isset($object) &&  $object->responsabilite=='Tutueur') echo ' selected="selected"' ?> value="Tutueur">Tutueur</option>
	         <option <?php if(isset($object) &&  $object->responsabilite=='Tutrice') echo ' selected="selected"' ?> value="Tutrice">Tutrice</option>
	         <option <?php if(isset($object) &&  $object->responsabilite=='Pere') echo ' selected="selected"' ?> value="Pere">Pere</option>
	         <option <?php if(isset($object) &&  $object->responsabilite=='Mere') echo ' selected="selected"' ?> value="Mere">Mere</option>
	      </select>

		<label class="control-label" for="pere">Nom et prénoms du Père :</label><input type="text" class="form-control" name="pere" id="pere"  value="@if(isset($object) &&  $object!=null){{$object->pere}}@else{{old('pere')}}@endif"   />

		<label class="control-label" for="mere">Nom et prénoms de la Mère :</label>
		<input type="text" class="form-control" name="mere" id="mere"  value="@if(isset($object) &&  $object!=null){{$object->mere}}@else{{old('mere')}}@endif"  />
 
</div>

   <div class="form-group row">
      <div  >
         <button type="submit" class="btn btn-primary">Enregistrer </button> 
      </div>
      @if(isset($object))
      <div style="margin-left: 120px;">
         <a href="{{URL::To('acteurs')}}" type="submit" class="btn btn-secondary">Actualiser </a>
      </div>
      @endif
   </div>