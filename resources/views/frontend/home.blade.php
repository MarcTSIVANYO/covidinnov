@extends('layouts.frontend.base')

@section('content')

 <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(resources/assets/frontend/images/slider-01.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span class="theme_color">CITIGO</span> RIPOSTE COVID 19</h3>
                                        <br>
                                        <h4> </h4>
                                        <br>
                                        <p>
                                            ANNULAIRE LOCAL<br> DES ACTEURS / DONATEURS / CITOYENS VENUERABLES </p>
                                        <a class="contact_bt" href="{{url('/inscrire')}}">AJOUTER </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(resources/assets/frontend/images/slider-01.jpg);">
                        <div class="container">
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span class="theme_color">CITIGO</span> RIPOSTE COVID 19</h3>
                                        <br> 
                                        <br>
                                        <p> ANNULAIRE LOCAL<br> DES ACTEURS / DONATEURS / CITOYENS VENUERABLES</p>
                                        <a class="contact_bt" href="{{url('/inscrire')}}">AJOUTER </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full center">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color">APPLICATION CiToGo </span></h2>
                            <p class="large">Annuaire !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection