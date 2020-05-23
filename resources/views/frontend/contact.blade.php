@extends('layouts.frontend.base')

@section('content')

  
    <!-- section --> 
       <div class="innerpage_banner">
          <div class="container">
             <div class="row"> 
                <div class="col-md-12">
                   <h2>Contact</h2>
                </div>
             </div>
          </div>
       </div>
    <!-- end section -->
    
    <!-- section -->
    <div id="contact" class="contact-box">
        <div class="container">
            
            <div class="row">
                
                <div class="col-lg-7 col-sm-7 col-xs-12">
                  <div >
                    <form id="contactForm" class="form-horizontal">
                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="Email *" id="email" class="form-control" name="name" required data-error="Svp entrer votre email">
                                <div class="help-block with-errors"></div>
                            </div> 
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <input class="form-control" name="password" id="password" type="password" placeholder="Mot de passe"   title="Votre mot de passe doit avoir au moins 6 caractères" minlength="6" required="" data-error="Svp entrer votre email">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <input class="form-control" name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirmation de mot de passe" title="Votre mot de passe doit avoir au moins 6 caractères" minlength="6" required="">
                          </div>
                        </div> 

                        <div class="col-md-12">
                            <div class="submit-button text-center">
                                <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                <div class="clearfix"></div> 
                            </div>
                        </div>
                      </div>            
                    </form>
                  </div>
                </div>


                <div class="col-lg-5 col-sm-5 col-xs-12">
                    <div class="left-contact">
                        <div class="media cont-line">
                            <div class="media-left icon-b">
                                <i class="fa fa-location-arrow" aria-hidden="true"></i>
                            </div>
                            <div class="media-body dit-right">
                                <h4>Mon CV en ligne</h4>
                                <p>Faites-vous remarquer par les recruteurs</p>
                            </div>
                        </div>
                        <div class="media cont-line">
                            <div class="media-left icon-b">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="media-body dit-right">
                                <h4>Email</h4>
                                <a href="#">demoinfo@gmail.com</a><br>
                                <a href="#">demoinfo@gmail.com</a>
                            </div>
                        </div>
                        <div class="media cont-line">
                            <div class="media-left icon-b">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            </div>
                            <div class="media-body dit-right">
                                <h4>Phone Number</h4>
                                <a href="#">12345 67890</a><br>
                                <a href="#">12345 67890</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- end section -->

@endsection