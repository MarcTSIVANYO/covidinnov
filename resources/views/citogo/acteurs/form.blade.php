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
      <input type="hidden" required value="@if(isset($object) &&  $object!=null ){{$object->id}}@else{{'0'}}@endif"  class="form-control" name="id" >
      <input type="hidden"  class="form-control" name="user_id" value="{{auth()->user()->id_users}}">
      <label  class="control-label" for="tyacteur_id">Type :</label>
      <select  class="form-control" name="tyacteur_id"  required="">
         <option selected disabled>Selectionner</option>
         @foreach($types as $value)
         <option  <?php if(isset($object) && $object->tyacteur_id==$value->id) echo ' selected="selected"' ?> value="{{$value->id}}"  class="form-control">{{$value->titre}}</option>
         @endforeach
      </select>
      <label class="control-label" for="nom">Nom :</label>
      <input type="text"  class="form-control" name="nom" id="nom"  value="@if(isset($object) &&  $object!=null){{$object->nom}}@else{{old('nom')}}@endif" required="" />
      <label class="control-label" for="prenoms">Prénoms :</label>
      <input type="text"  class="form-control" name="prenoms" id="prenoms"  value="@if(isset($object) &&  $object!=null){{$object->prenoms}}@else{{old('prenoms')}}@endif" required="" />
      <label class="control-label" for="adresse">Adresse :</label>
      <input type="text"  class="form-control" name="adresse" id="adresse"  value="@if(isset($object) &&  $object!=null){{$object->adresse}}@else{{old('adresse')}}@endif" required="" />
      <label class="control-label" for="contact">Contact :</label>
      <input type="text"  class="form-control" name="contact" id="contact"  value="@if(isset($object) &&  $object!=null){{$object->contact}}@else{{old('contact')}}@endif" required="" />
      <label class="control-label" for="datecreation">Date création :</label>
      <input type="date"  class="form-control" name="datecreation" id="datecreation"  value="@if(isset($object) &&  $object!=null){{$object->datecreation}}@else{{old('datecreation')}}@endif" required="" />
      <label class="control-label" for="profession">Profession :</label>
      <input type="text"  class="form-control" name="profession" id="profession"  value="@if(isset($object) &&  $object!=null){{$object->profession}}@else{{old('profession')}}@endif" required="" />
      <label class="control-label" for="numerorccm">Numero RCCM :</label>
      <input type="text"  class="form-control" name="numerorccm" id="numerorccm"  value="@if(isset($object) &&  $object!=null){{$object->numerorccm}}@else{{old('numerorccm')}}@endif" required="" />
      <label class="control-label" for="entravail">Entravail ?</label>
      <select  class="form-control" name="entravail" class="form-control" required="">
         <option selected disabled>Votre choix</option>
         <option <?php if(isset($object) &&  $object->entravail=='O') echo ' selected="selected"' ?> value="O">O</option>
         <option <?php if(isset($object) &&  $object->entravail=='N') echo ' selected="selected"' ?> value="N">N</option>
      </select>
      <label class="control-label" for="datearret">Date arrêt :</label>
      <input type="date"  class="form-control" name="datearret" id="datearret"  value="@if(isset($object) &&  $object!=null){{$object->datearret}}@else{{old('datearret')}}@endif" />
      <label class="control-label" for="produitsdispo">Produits disponible :</label> 
      <select  class="form-control" name="produitsdispo" class="form-control" required="">
         <option selected disabled>Votre choix</option>
         <option <?php if(isset($object) &&  $object->produitsdispo=='O') echo ' selected="selected"' ?> value="O">O</option>
         <option <?php if(isset($object) &&  $object->produitsdispo=='N') echo ' selected="selected"' ?> value="N">N</option>
      </select>
      <label class="control-label" for="productionactuelle">Lieu de production actuelle :</label>
      <input type="text"  class="form-control" name="productionactuelle" id="productionactuelle"  value="@if(isset($object) &&  $object!=null){{$object->productionactuelle}}@else{{old('productionactuelle')}}@endif" required="" />
   </div>
   <div class="form-group row">
      <div  >
         <button type="submit" class="btn btn-primary">Enregistrer</button>
      </div>
      @if(isset($object))
      <div style="margin-left: 120px;">
         <a href="{{URL::To('acteurs')}}" type="submit" class="btn btn-secondary">Actualiser</a>
      </div>
      @endif
   </div>
</div>