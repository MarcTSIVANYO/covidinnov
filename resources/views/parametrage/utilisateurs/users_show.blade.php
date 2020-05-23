@extends('templates.background')
	@section('content')
  <div class="row">
       <div class="col-xs-12">
         <div class="form-group" align="right">
                  <label >  </label>
                  <img src="{{ url(Auth::user()->logo_users )}}"/>
                 </div>
       </div>
        </div>

		 <div class="row">
			 <div class="col-xs-12">
			 	 <div class="form-group">
                  <label >Nom  :</label>
                  <label >{{$utilisateurs->nom_users}}</label>
                 </div>
			 </div>
        </div>
		 <div class="row">
			 <div class="col-xs-12">
			 	 <div class="form-group">
                  <label >Prenoms  :</label>
                  <label >{{$utilisateurs->prenoms_users}}</label>
                 </div>
			 </div>
        </div>
		 <div class="row">
			 <div class="col-xs-12">
			 	 <div class="form-group">
                  <label >Login  :</label>
                  <label >{{$utilisateurs->login_users}}</label>
                 </div>
			 </div>
        </div>
		 
		 <div class="row">
			<div class="col-xs-12" align="right">
        	<div class="box-footer">
        		<a href="javascript:self.close();"><button type="submit" class="btn btn-primary">Fermer</button></a>
        	</div>
        </div>
        </div>

        
@stop