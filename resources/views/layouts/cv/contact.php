 <section id="contact" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                 <!--Section: Contact v.2-->
                  <section class="mb-12">

                      <!--Section heading-->
                      <h2 class="h1-responsive font-weight-bold text-center my-4">Contact</h2>
                      <!--Section description--> 
                      <div class="row"> 
                          <!--Grid column-->
                          <div class="mdl-cell--12-col"> 
                            {!! Form::open(['url' => 'contacterCV', 'class'=>'formulairemodal', 'enctype'=>'multipart/form-data']) !!}
                            {{ csrf_field() }}
                            <div class = "mdl-grid">
                            <input type="hidden" name="emailSocietes" value="{{$cv->email}}">
                            <input type="hidden" name="nomSocietes" value="{{$title}}"> 
                            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col mdl-textfield--floating-label">
                              <input class="mdl-textfield__input" type="text" name="nomprenoms" pattern="[A-Z,a-z]*" required  id="first">
                              <label class="mdl-textfield__label" for="sample3">Nom & Prénoms :</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="email"  required  name="email">

                                <label class="mdl-textfield__label" for="sample3">Email :</label> 
                            </div> 
                            <div class="mdl-textfield mdl-js-textfield mdl-cell--12-col mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required  name="objet">
                                <label class="mdl-textfield__label" for="sample3">Objet :</label>
                            </div> 
                              <div class = "mdl-cell mdl-cell--12-col graybox">
                                <div class="mdl-textfield mdl-cell--12-col mdl-js-textfield">
                                <textarea class="mdl-textfield__input" type="text" rows= "3" required  name="messages" ></textarea>
                                <label class="mdl-textfield__label" for="sample5">Message...</label>
                              </div>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text"  name="reponse" required >
                                <label class="mdl-textfield__label" for="sample3">4+5 =</label>
                            </div> 
                          </div>    
                          <div class="mdl-card__actions" style="text-align:center;">
                            <a href="#">
                              <input value="submit" type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored"></input>
                            </a>
                          </div>
                          {{ Form::close() }}
                      </div> 
 
                          </div>
                          <!--Grid column-->
 
                      </div>

                  </section>
                  <!--Section: Contact v.2-->
              </div>
            </div>
          </section> 