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
                            
                                <form id="contactForm" class="form-horizontal">
                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="Nom & Prénoms *" id="email" class="form-control" name="nomprenoms" required  >
                                <div class="help-block with-errors"></div>
                            </div> 
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <input class="form-control" name="email"  type="email" placeholder="Email*"    required="" ">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                                <input class="form-control" name="objet"  type="email" placeholder="Objet *"    required="" ">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <textarea class="form-control" name="messages" 
                                    rows="5" cols="33" required="" placeholder="Message *">Votre message
                                
                            </textarea>  
                          </div>
                        </div> 

                        <div class="col-sm-6">
                          <div class="form-group">
                             4+10= <input type="number" name="rebot" required=""/> 
                          </div>
                        </div> 

                        <div class="col-md-12">
                            <div class="submit-button text-center">
                                <button class="btn btn-common" id="submit" type="submit">Envoyer</button>
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
@endsection