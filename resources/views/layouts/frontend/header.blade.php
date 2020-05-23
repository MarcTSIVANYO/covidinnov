<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{ asset($config->logo) }}" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="{{URL::To('/')}}">ACCUEIL</a></li>
                    <li><a class="nav-link" href="{{url('/apropos')}}">Apropos</a></li> 
                    <li><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
                    <li>
                        <a class="nav-link" href="{{url('/mycv')}}"
                        style="background:#17a2b8;color:#fff;"> 
                                PUBLIER MON CV
                        </a>
                    </li>
                    <li>
                        <a class="nav-link active" style="background:#fff;color:#000;" href="{{url('/login')}}">
                                Se connecter
                        </a>
                    </li>
                    <!--  <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </li> -->
                </ul>
            </div>
            <div class="search-box">
                <input type="text" class="search-txt" placeholder="Search">
                <a class="search-btn">
                    <img src="{{ asset('resources/assets/frontend/images/search_icon.png') }}" alt="#" />
                </a>
            </div>
        </div>
    </nav>
</header>