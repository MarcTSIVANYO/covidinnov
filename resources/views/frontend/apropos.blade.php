@extends('layouts.frontend.base')

@section('content')
 

  <div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 offset-md-2 animate-box" data-animate-effect="fadeInLeft">

                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"> A Propos</div>
                    </div>
                     <div class="animated-fast" data-animate-effect="fadeInLeft" > 
                            
                        <p style="text-align: justify;">
                            Covid Innovations vous est présenté par MasterSolut GROUP et ses partenaires. Nous (nos équipes et nos communautés) aimons repérer les tendances et les innovations et nous aimons aider ceux qui souhaitent avoir un impact positif. Nous ajouterons quotidiennement des initiatives inspirantes à ce site, aussi longtemps que nécessaire à travers la communication. <br/><br/>
                            Quoi qu'il en soit, si vous voulez en faire ou en apprendre davantage maintenant, rejoignez également notre équipe pour lutter ensemble. Et si vous repérez d'autres innovations intéressantes liées à COVID, ou si vous venez de lancer la vôtre: veuillez <a href="{{url('submit-innovation')}}"> soumettre votre innovation</a>
                            
                        </p> 
                        
                    </div>
 
                </div>
            
            </div>
        </div>
    </div>
    <!-- end section -->

@endsection