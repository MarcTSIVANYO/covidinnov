@extends('layouts.frontend.base')

@section('content')

  
    <!-- section --> 
    <div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 offset-md-2 animate-box" data-animate-effect="fadeInLeft">

                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"> Nous contacter</div>
                    </div>
                     <div class="animated-fast" data-animate-effect="fadeInLeft" > 
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
                              {{ Session::get('error_message') }}
                            </div> 
                        @endif 
                        
                        <div id="notification" style="display: none;"> 
                          <div class="alert alert-danger" role="alert">
                            <strong>Erreur!</strong> Résultat de 4+10 est incorrect
                          </div> 
                        </div>

                    <form action=" {{ route('contactus.store') }}" method="post" class="form-horizontal" onSubmit="return robotFun(this.robot)" >
                      {{ csrf_field() }} 
                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="Nom & Prénoms *" id="email" class="form-control" name="name" required  >
                                <div class="help-block with-errors"></div>
                            </div> 
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <input class="form-control" name="email"  type="email" placeholder="Email *"    required="">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                                <input class="form-control" name="objet"  type="text" placeholder="Objet *"    required="">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <textarea class="form-control" name="message" 
                                    rows="5" cols="33" required="" placeholder="Message *"></textarea>  
                          </div>
                        </div> 

                        <div class="col-sm-6">
                          <div class="form-group">
                             4+10= <input type="number" name="robot" id="robot" required=""/> 
                          </div>
                        </div> 

                        <div class="col-md-12">
                            <div class="submit-button text-center">
                                <button class="btn btn-common input-group-addon fh5co_footer_subcribe" id="submit" type="submit">Envoyer</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                <div class="clearfix"></div> 
                            </div>
                        </div>
                      </div>   
                      </form>
                        
                    </div>
 
                </div>
            
            </div>
        </div>
    </div>
    <!-- end section -->

    <script type="text/javascript">
    function robotFun(element1)
  // La fonction reçois en paramètre les 2 éléments
 { 
  var passed=false
  // On va donner à la variable passed la valeur false (fausse).

   if (element1.value!='' ){
      if (element1.value!=14) { 
        document.getElementById('notification').style.display = 'block';
        element1.select();
        element1.focus;
        element1.value=''; 
        element1.style.background = 'Yellow'; 
      }else
      passed=true
      return passed
    }
 }  
</script>
@endsection