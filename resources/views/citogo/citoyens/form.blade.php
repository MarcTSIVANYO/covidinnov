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
      <input type="hidden"  class="form-control"  name="user_id" value="{{auth()->user()->id_users}}">
      <label   class="control-label" for="typecitoyen_id">Type citoyen :    </label>
      <select  class="form-control" name="typecitoyen_id"  required="">
         <option selected disabled>Selectionner  </option>
         @foreach($types as $value)
         <option  <?php if(isset($object) && $object->typecitoyen_id==$value->id) echo ' selected="selected"' ?> value="{{$value->id}}"  class="form-control">{{$value->titre}} </option>
         @endforeach
      </select>
      <label  class="control-label" for="civilites">Civilites : </label> 
      <select  class="form-control" name="civilites" class="form-control" required="">
         <option selected disabled>Votre choix</option>
         <option <?php if(isset($object) &&  $object->civilites=='M') echo ' selected="selected"' ?> value="M">Homme</option>
         <option <?php if(isset($object) &&  $object->civilites=='F') echo ' selected="selected"' ?> value="F">Femme</option>
      </select>
      <label  class="control-label" for="nom">Nom : </label><input type="text" class="form-control" name="nom" id="nom" value="@if(isset($object) &&  $object!=null){{$object->nom}}@else{{old('nom')}}@endif" required=""  />
      <label  class="control-label" for="prenoms">Prenoms : </label><input type="text" class="form-control" name="prenoms" id="prenoms" value="@if(isset($object) &&  $object!=null){{$object->prenoms}}@else{{old('prenoms')}}@endif" required=""  />
      <label  class="control-label" for="nationalite">Nationalite : </label><input type="text" class="form-control" name="nationalite" id="nationalite" value="@if(isset($object) &&  $object!=null){{$object->nationalite}}@else{{old('nationalite')}}@endif" required=""  />
      <label  class="control-label" for="contact">Contact : </label><input type="text" class="form-control" name="contact" id="contact" value="@if(isset($object) &&  $object!=null){{$object->contact}}@else{{old('contact')}}@endif" required=""  />
      <label  class="control-label" for="datenaiss">Date de naissance : </label><input type="date" class="form-control" name="datenaiss" id="datenaiss" value="@if(isset($object) &&  $object!=null){{$object->datenaiss}}@else{{old('datenaiss')}}@endif" required=""  />
      <label  class="control-label" for="villenaiss">Ville de naissance : </label><input type="text" class="form-control" name="villenaiss" id="villenaiss" value="@if(isset($object) &&  $object!=null){{$object->villenaiss}}@else{{old('villenaiss')}}@endif" required=""  />
      <label  class="control-label" for="typepiece">Type pièce : </label>
      <select class="form-control" name="typepiece" id="typepiece">
         <option selected disabled>Votre choix</option>
         <option <?php if(isset($object) &&  $object->typepiece=='CENI') echo ' selected="selected"' ?> value="CENI">CENI</option>
         <option <?php if(isset($object) &&  $object->typepiece=='CNI') echo ' selected="selected"' ?> value="CNI">Mlle/CNI</option>
         <option <?php if(isset($object) &&  $object->typepiece=='CNI') echo ' selected="selected"' ?> value="PASSPORT">PASSPORT</option>
      </select>
      <label  class="control-label" for="numeropieces">Numero de la pièce d'identité : </label><input type="text" class="form-control" name="numeropieces" id="numeropieces" value="@if(isset($object) &&  $object!=null){{$object->numeropieces}}@else{{old('numeropieces')}}@endif" required=""  />
      <label  class="control-label" for="pere">Pere : </label><input type="text" class="form-control" name="pere" id="pere" value="@if(isset($object) &&  $object!=null){{$object->pere}}@else{{old('pere')}}@endif" required=""  />
      <label  class="control-label" for="mere">Mere : </label>
      <input type="text" class="form-control" name="mere" id="mere" value="@if(isset($object) &&  $object!=null){{$object->mere}}@else{{old('mere')}}@endif" required=""  />
      <label  class="control-label" for="salaire">Salaire : </label>
      <input type="text" class="form-control" name="salaire" id="salaire" value="@if(isset($object) &&  $object!=null){{$object->salaire}}@else{{old('salaire')}}@endif" required=""  />
      <label  class="control-label" for="entravail">En travail ?: </label> 
      <select  class="form-control" name="entravail" class="form-control" required="">
         <option selected disabled>Votre choix</option>
         <option <?php if(isset($object) &&  $object->entravail=='O') echo ' selected="selected"' ?> value="O">O</option>
         <option <?php if(isset($object) &&  $object->entravail=='N') echo ' selected="selected"' ?> value="N">N</option>
      </select>
      <label  class="control-label" for="datearret">Date d'arrêt : </label>
      <input type="date" class="form-control" name="datearret" id="datearret" value="@if(isset($object) &&  $object!=null){{$object->datearret}}@else{{old('datearret')}}@endif" required=""  />
      <label  class="control-label" for="nbrefemmes">Nbre de mari(es) : </label><input type="text" class="form-control" name="nbrefemmes" id="nbrefemmes" value="@if(isset($object) &&  $object!=null){{$object->nbrefemmes}}@else{{old('nbrefemmes')}}@endif" required=""  />
      <label  class="control-label" for="montantdepense">Montant de dépense : </label><input type="text" class="form-control" name="montantdepense" id="montantdepense" value="@if(isset($object) &&  $object!=null){{$object->montantdepense}}@else{{old('montantdepense')}}@endif" required=""  />
      <label  class="control-label" for="aliments">Aliments : </label><input type="text" class="form-control" name="aliments" id="aliments" value="@if(isset($object) &&  $object!=null){{$object->aliments}}@else{{old('aliments')}}@endif" required=""  />
      <label  class="control-label" for="lieuacquisition">Lieu d'acquisition : </label><input type="text" class="form-control" name="lieuacquisition" id="lieuacquisition" value="@if(isset($object) &&  $object!=null){{$object->lieuacquisition}}@else{{old('lieuacquisition')}}@endif" required=""  />
      <label  class="control-label" for="marcheproche">Marché plus proche : </label><input type="text" class="form-control" name="marcheproche" id="marcheproche" value="@if(isset($object) &&  $object!=null){{$object->marcheproche}}@else{{old('marcheproche')}}@endif" required=""  />
      <label  class="control-label" for="boutiqueproche">Boutique plus proche : </label><input type="text" class="form-control" name="boutiqueproche" id="boutiqueproche" value="@if(isset($object) &&  $object!=null){{$object->boutiqueproche}}@else{{old('boutiqueproche')}}@endif" required=""  />
      <label  class="control-label" for="quartier">Quartier : </label><input type="text" class="form-control" name="quartier" id="quartier" value="@if(isset($object) &&  $object!=null){{$object->quartier}}@else{{old('quartier')}}@endif" required=""  />
      <label  class="control-label" for="marie">Marie : </label><input type="text" class="form-control" name="marie" id="marie" value="@if(isset($object) &&  $object!=null){{$object->marie}}@else{{old('marie')}}@endif" required=""  />
      <label  class="control-label" for="ville_id">Ville  : </label><input type="text" class="form-control" name="ville_id" id="ville_id" value="@if(isset($object) &&  $object!=null){{$object->ville_id}}@else{{old('ville_id')}}@endif" required=""  />
      <label  class="control-label" for="geolocalisation">Géolocalisation : </label><input type="text" class="form-control" name="geolocalisation" id="geolocalisation" value="@if(isset($object) &&  $object!=null){{$object->geolocalisation}}@else{{old('geolocalisation')}}@endif" required=""  />
      <label  class="control-label" for="region_id">Region  : </label>
      <select name="region_id" class="form-control" required="">
         <option selected disabled>Selectionner</option>
         @foreach($regions as $value)
         <option  <?php if(isset($object) && $object->region_id==$value->id) echo ' selected="selected"' ?> value="{{$value->id}}"  class="form-control">{{$value->titre}}</option>
         @endforeach
      </select>
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
</div>