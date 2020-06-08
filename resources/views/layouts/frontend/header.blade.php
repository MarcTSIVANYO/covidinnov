<style type="text/css">
    /*.navbar-light  {
    display: inline-block;
    text-align: center;
    width: 100%;
}*/
</style>

<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center">
                <a href="#" class="color_fff fh5co_mediya_setting"> 
                <div class="d-inline-block fh5co_trading_posotion_relative"><a href="{{url('/')}}" class="treding_btn">COVID INNOVATION </a> 
                </div>
                <a href="#" class="color_fff fh5co_mediya_setting">Luttons ensemble contre le Covid-19</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 fh5co_padding_menu" align="center">
                <img src="{{ asset($config->logo) }}" alt="img" class="fh5co_logo_width" style="width: 200px;" /> <br/><br/>
                <h4>Référencement des innovations COVID-19</h4>
            </div>
            
        </div>
    </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">

        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="{{ asset($config->logo) }}" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"  align="center" style="text-align: center;">
                <ul class="navbar-nav mr-auto" style="text-align: center;">
                    <li class="nav-item "> 
                        <a class="nav-link " href="{{URL::To('/')}}">Accueil</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/apropos')}}">Apropos <span class="sr-only">(current)</span></a>
                    </li> 
                     
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/contact')}}">Contact <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" style="background:#fff;color:#000;" href="{{url('/submit-innovation')}}">
                                Soumettre votre innovation
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>