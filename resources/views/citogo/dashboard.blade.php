@extends('layouts.frontend.base')

@section('content')
 
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full center">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color">APPLICATION D'ENREGISTREMENT</span> DES ACTEURS</h2>
                            <p class="large">Donateurs/Citoyens/ Autres</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <div class="section layout_padding">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="full">
                        <a href="{{URL::To('donateurs')}}">
                            <div class="center">
                                <img src="resources/assets/frontend/images/icon3.png" alt="#">
                            </div>
                            <div class="center">
                                 DONATEUR / ONG 
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="full">
                        <a href="{{URL::To('citoyens')}}">
                            <div class="center">
                                <img src="resources/assets/frontend/images/icon3.png" alt="#">
                            </div>
                            <div class="center" style="text-align: center;">
                                 CITOYEN RÉSIDENT  <br/> 
                                 EXPATRIÉ RÉSIDENT D'EXPATRIÉ EN TRANSIT <br/> (EN VISITE AU TOGO) 
                            </div> 
                        </a>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="full">
                        <a href="{{URL::To('acteurs')}}">
                            <div class="center">
                                <img src="resources/assets/frontend/images/icon2.png" alt="#">
                            </div>
                            <div class="center" style="text-align: center;">
                                 ACTEUR DU SECTEUR AGRICOLE AU TOGO  <br/> ACTEUR DU SECTEUR DE L’AGROALIMENTAIRE AU TOGO 
                            </div>
                        </a>
                    </div> 
 
 
            </div>
        </div>
    </div>
    </div>
  
@endsection