@extends('layouts.frontend.base')

@section('content')

  <div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                
                @if(!isset($thisInnovation))
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">@if(isset($titleCategorie)) {{$titleCategorie}} @else Tous @endif</div>
                    </div>
                    @foreach($innovations as $innov)
                    <?php 
                        $type=DB::select('select * from type_innovations where id='.$innov->type_innovation_id);
                     ?>
                        <div class="row pb-4">
                            <div class="col-md-5">
                                <div class="fh5co_hover_news_img">
                                    <div class="fh5co_news_img">
                                        <img src="{{ asset($innov->image) }}" alt="{{ $innov->titre}}" style="border: 1px solid black" />
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="col-md-7 animate-box">
                                <a href="{{url($innov->lien)}}" class="fh5co_magna py-2" title="Lire Plus"> {{ $innov->titre}} </a> <br/>
                                <a href="{{url($innov->lien)}}" class="fh5co_mini_time py-3" title="{{ $type[0]->titre}}" style=" color: #f5bc04; text-decoration: underline;"> {{ $type[0]->titre}} </a>
                                <div class="fh5co_consectetur justify-content-center" > 
                                    <p style="text-align: justify;">
                                        <?php 
                                            $max=350;
                                            if(strlen($innov->description)>$max){

                                                echo substr($innov->description, 0, $max)."(...)";
                                            }else{
                                                echo $innov->description;  
                                            }
                                        ?>  
                                    </p> 
                                </div>
                            </div>
                        </div>
                    @endforeach
                     <div class="row mx-0">
                        <div class="col-12 text-center pb-4 pt-4"> 
                            {{ $innovations->links("pagination::bootstrap-4") }}
                         </div>
                    </div>
                    @else
                        <div>
                            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">{{$thisInnovation->titre}}</div>
                        </div>

                        <div class="animated-fast" data-animate-effect="fadeInLeft" > 
                            <div class="">
                                <img src=" {{asset($thisInnovation->image)}}" alt="{{ $thisInnovation->titre}}" style="width: 100%; height: 80%" />
                            </div>
                            <br/>
                        <p style="text-align: justify;">
                            {{$thisInnovation->description}}
                            
                        </p> 
                        <p >
                            @if(isset($thisInnovation->url))
                            <a  style="text-align: center;" href="https://{{$thisInnovation->url}}" class="input-group-addon " target="_blank">Lire Plus ici</a>
                            @endif
                        </p> 
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5edd607ed5e5d0d4"></script>

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
                    </div>
                    @endif
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                    @include('layouts.frontend.right')
                </div>
        </div>
       
    </div>
</div>
@if( isset($orthers) && $orthers->toArray() !=null)
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Lire aussi</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            @foreach($orthers as $list)
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img">
                            <img src="{{ asset($list->image) }}" alt="{{$list->titre}}"/>
                        </div>
                        <div>
                            <a href="{{url($list->lien)}}" class="d-block fh5co_small_post_heading"><span class="">{{$list->titre}}</span></a>
                            <div class="c_g"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif
@endsection