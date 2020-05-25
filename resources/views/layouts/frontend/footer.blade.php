   <!-- Start Footer -->
    <footer class="footer-box" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset($config->favicon) }}" alt="#" /></a>
                    </div>
                </div>
                <div class="col-lg-12 white_fonts">
                    <h4 class="text-align">Nous contacter</h4>
                </div>
                <div class="margin-top_30 col-md-8 offset-md-2 white_fonts">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="full icon text_align_center">
                                <img src="{{ asset('resources/assets/frontend/images/social1.png') }}">
                            </div>
                            <div class="full white_fonts text_align_center">
                                {{ $config->adresse_physique }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full icon text_align_center">
                                <img src="{{ asset('resources/assets/frontend/images/social2.png') }}">
                            </div>
                            <div class="full white_fonts text_align_center">
                                <p>
                                {{ $config->email }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full icon text_align_center">
                                <img src="{{ asset('resources/assets/frontend/images/social3.png')}}">
                            </div>
                            <div class="full white_fonts text_align_center">
                                <p>
                                {{ $config->telephone }} </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
     <!--        <div class="row white_fonts margin-top_30">
                <div class="col-lg-12">
                    <div class="full">
                        <div class="center">
                            <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">&copy; {{ date('Y') }} {{$config->nom_site}}. All rights reserved.</p>
                    <ul class="bottom_menu">
                        <li><a href="{{url('apropos')}}">Apropos</a></li> 
                        <li><a href="#">CGU</a></li> 
                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
