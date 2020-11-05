<?php 
    $most =  DB::select('select * from innovations order by views DESC limit 4');
        $types = DB::select('select * from type_innovations'); 

?>

<div>
   <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Catégorie</div>
</div>
<div class="clearfix"></div>
<div class="fh5co_tags_all"> 
    @foreach($types as $value)
        <a href="{{url('categorie/'.$value->titre)}}" class="fh5co_tagg ">{{$value->titre}}</a>  
    @endforeach
</div>


<div>
   <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Les plus visités</div>
</div>

@foreach($most as $value)
<?php 
    $categorie=DB::select('select * from type_innovations where id='.$value->type_innovation_id);
 ?>
    <div class="row pb-3">
       <div class="col-5 align-self-center">
          <img src="{{ asset($value->image) }}" alt="img" class="fh5co_most_trading"/>
       </div>
       <div class="col-7 paddding">
          <div class="most_fh5co_treding_font"> 
                <a href="{{url($value->lien)}}" class="d-block fh5co_small_post_heading"><span class="">
                  <?php 
                      $max=50;
                      if(strlen($value->titre)>$max){

                          echo substr($value->titre, 0, $max)." ...";
                      }else{
                          echo $value->titre;  
                      }
                  ?>   </span></a></div>
          <div class="most_fh5co_treding_font_123"> {{$categorie[0]->titre}}</div>
       </div>
    </div>
@endforeach