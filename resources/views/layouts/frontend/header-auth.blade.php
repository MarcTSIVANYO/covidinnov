<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><h2 style="font-size: 50px;">{{$config->nom_site}}</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="{{URL::To('/')}}">ACCUEIL</a></li> 
                   <?php 
                      if (Auth::user()->admin==0) {  
                  ?>
                    <li>
                      <a class="nav-link" class="{{ (request()->is('dashboard')) ? 'active' : '' }}" href="{{url('dashboard')}}">Dashbord</a></li> 
                    
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="background:#fff;color:#000;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img src="
                         @if(Auth::user()->logo_users)
                            {{asset(Auth::user()->logo_users)}}
                          @else
                            {{asset('public/img/user.png')}} 
                          @endif
                         " class="rounded-circle" style=" margin-right: 5px; " width="30px"> 
                         {{ Auth::user()->nom_users }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a style="color:#0c112a;" class="dropdown-item" href="{{url('account')}}">Modifier mon profil</a>
                          <a style="color:#0c112a;" class="dropdown-item" href="{{url('account/password')}}">Changer mon mot de passe </a>
                          <a class="dropdown-item" href="{{URL::To('logout')}}" style="color:#ff396c;">Se déconnecter</a>
                        </div>
                      </li>
                    <?php 
                      }
                      if (Auth::user()->admin==1) { 
                    ?>
                      <li><a class="nav-link"   href="{{url('home')}}" style="background:#fff;color:#000;" target="_blank">DASHBOARD</a></li>
                    <?php  } ?> 

                </ul>
            </div> 
        </div>
    </nav>
</header>