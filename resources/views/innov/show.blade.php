    @extends('templates.background')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-primary">
                    <div class="panel-heading">Innovation</div>
                    <div class="panel-body"> 
                    <div class="row"> 
                        <div class="col-sm-12">
                            <div class="col-lg-7 col-sm-7 col-xs-12 offset-md-3"> 

                        <div class="form-group row "></div> 
                          <div class="form-group row ">
                            <div class="col-md-2 ">
                             Titre :  
                            </div>
                            <div class="col-md-8">
                                 {{$list->titre}}
                            </div>  
                        </div> 

                          <div class="form-group row ">
                            <div class="col-md-2 ">
                             Description :  
                            </div>
                            <div class="col-md-8">
                                 {{$list->description}}
                            </div>  
                        </div> 

                          <div class="form-group row ">
                            <div class="col-md-2 ">
                             Site web  :  
                            </div>
                            <div class="col-md-8">
                                 {{$list->url}}
                            </div>  
                        </div> 


                          <div class="form-group row ">
                            <div class="col-md-2 ">
                             Image :  
                            </div>
                            <div class="col-md-8">
                                  <img src="../../{{$list->image}}" style="width: 100%">
                            </div>  
                        </div>  

                          <div class="form-group row ">
                            <div class="col-md-2 ">
                             Type :  
                            </div>
                            <div class="col-md-8">
                                <?php   
                                $innovation =  DB::select('select * from type_innovations where id='.$list->type_innovation_id);
                                $pays =  DB::select('select * from pays where id='.$list->pays_id); 
                            ?> 
                                 {{$list->titre}}
                            </div>  
                        </div> 

                        <div class="form-group row ">
                            <div class="col-md-2 ">
                             Pays  :  
                            </div>
                            <div class="col-md-8">
                                 {{$pays[0]->nom}}
                            </div>  
                        </div> 

                     
                     
                    <div class="col-sm-12">
                        <hr/>
                    </div>

                    <div class="form-group row ">
                        <div class="col-md-2">
                         Nom  & Prénoms:  
                        </div>
                        <div class="col-md-8">
                             {{$list->nom}}  {{$list->prenoms}}
                        </div>  
                    </div> 

                    <div class="form-group row ">
                        <div class="col-md-2">
                         Email :  
                        </div>
                        <div class="col-md-8">
                             {{$list->email}}
                        </div>  
                    </div> 

                     
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection