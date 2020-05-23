    @extends('layouts.cv.base')

    @section('content')

    
      <main class="mdl-layout__content">
        <div class="page-content">
          <section class="about section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <h1>{{$title}}</h1>
              <h2><?php echo $cv->titre ?></h2> 
              <h2><?php echo $cv->localisation ?></a></h2> 
              <p class="resume">
                <?php echo $cv->about ?>
                <br> 
              </p>
              <div> 
                <a href="{{$cv->lien_drive}}" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" title="Download my Curriculum Vitae" target="_blank">
                  Download My CV
                  <i class="mdl-color-text--white material-icons mdi-picture-as-pdf" aria-hidden="true"> </i>
                </a>
              </div>
 
        </div>
        <img id="about" class="avatar mdl-shadow--2dp" src="{{$favicon}}" alt="Marc TSIVANYO" width="128" height="128">
      </section>
      <section id="skills" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        <div class="mdl-card mdl-cell mdl-cell--12-col">
          <div class="mdl-card__supporting-text">
            <h4>
              <i class="mdl-color-text--blue-grey-400 material-icons mdi-thumb-up" aria-hidden="true"><!--thumb_up--></i>
              Mes compétences
            </h4>
            <div>
                  <?php echo $cv->skills ?>
            </div>
          </div>
        </div>
      </section>
         
          <section id="projects" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>
                  <i class="mdl-color-text--blue-grey-400 material-icons mdi-forum" aria-hidden="true"><!--forum--></i>
                  Expériences
                </h4> 
                  
                <div>
                  <?php echo $cv->experience ?>
                </div>
              </div>
            </div>
          </section>

          <section id="follow-me" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>
                  <i class="mdl-color-text--blue-grey-400 material-icons mdi-people" aria-hidden="true"><!--people--></i>
                  Follow Me
                </h4>
                <ul class="social">
                  <li>
                    <a href="https://www.linkedin.com/in/{{$cv->linkedin}}" target="_blank">LinkedIn</a>
                  </li>
                  <li>
                    <a href="https://twitter.com/{{$cv->twitter}}" target="_blank">Twitter</a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/{{$cv->facebook}}" target="_blank">Facebook</a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/{{$cv->instagram}}" target="_blank">Instagram</a>  
                  </li>
                  
                </ul>
              </div>
            </div>
          </section>
        </div>
      </main>
@endsection