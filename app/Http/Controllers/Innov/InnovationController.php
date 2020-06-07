<?php
 
namespace App\Http\Controllers\Innov; 
use Illuminate\Http\Request;
use App\Http\Requests; 
use App\Innovation; 
use Session;
use Auth;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use DB;

use App\App;

class InnovationController extends Controller
{
    protected $rules = array(
      'titre'=>'required|between:3,30|unique:innovation'
      );

    protected $messages = array( 
      'titre.required'=>'Le titre est obligatoire !',
      'titre.between'=>'Le titre doit etre comprise entre 3 et 30 caractères !'
      );
  
    public function index()
    {
        $lists = Innovation::get();
        return view('innov.index',compact('lists'));
    }

    public function create()
    { 
 		return view('innov.create');
    }

     public function store(Request $request)
    {
            $id=$request->input('id');
            //$id = 0 pour enregistrement 
            if($request->input('id')==0){  

            $v=App::validate($request);
            unset($request['_token']);
            unset($request['id']); 
           // if($v->passes()){
                $v=Validator::make($request->all(), $this->rules, $this->messages);
     
                $toCreate = $request->all();
                $nom=null;
                $chaine = trim($request->titre); 
                $string = iconv ('UTF-8', 'US-ASCII//TRANSLIT//IGNORE', $chaine);
                $string = preg_replace ('#[^.0-9a-z]+#i', '-', $string);
                $titre = strtolower ($string);

                /*GESTION DE LIEN*/
                do{ 
                    $rand="";
                    $length = 2;
                    $taille = "123456789";
                    srand((double)microtime()*1000000);
                    for($i=0; $i<$length; $i++) {
                      $rand .= $taille[rand()%strlen($taille)];
                    } 

                    $link=$titre."-".$rand;

                    $verifLink= Innovation::where('lien', '=', $link)->get();  
                  if(empty($verifLink->toArray())){
                    $existLink="";
                  }else{
                    $existLink=$verifLink[0]->lien;
                  }
                }while ($link==$existLink);


                $chemin="public/img/innov";
                if (!file_exists($chemin)) { 
                    mkdir($chemin, 0700);
                }  
                $image = $request->file('img');   
                $request = $request->except('img'); 
    			if($image){ 
    				$extension = $image->getClientOriginalExtension(); 
    				$nom =$link.'.' .$extension;   
    				$image->move($chemin,$nom);
    				$image=$chemin."/".$nom;  
    				$toCreate = array_add($request, 'image', $image); 
    			} 
                $toCreate = array_add($toCreate, 'lien', $link);

    			if(Innovation::create($toCreate)){   
                    if (isset(Auth::user()->admin) && Auth::user()->admin==1) {    
                        Session::flash('flash_message', 'Enregistrement effectué avec succès !'); 
                    }else{
                        Session::flash('flash_message', 'Soumission de l\' innovation effectuée avec succès ! Votre innovation est en attente de validation.');  
                    }
    			    return redirect()->back();
    			}else{
    			    Session::flash('error_message', 'Erreur lors de l\'enregistrement'); 
    			    return redirect()->back();
    			}
                //  }
                // Session::flash('error_message', 'Erreur lors de l\'enregistrement : Merci de bien vouloir renseigner les informations indispensables'); 
                // return redirect()->back();
			}else{ 
			$this->update($id, $request);

				return redirect()->back();
			//return redirect()->route('innov.update', $id);
			//['/admin/innovation', $list->id]
			}
    }

    public function show($id)
    {
        $list = Innovation::where('id', $id)->first(); 
        return view('innov.show', compact('list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $list = Innovation::findOrFail($id); 
        return view('innov.edit', compact('list'));
    }

    public function update($id, Request $request)
    {

        $i=Innovation::find($id); 
        unset($request['_token']);
        $toCreate = $request->all();
        $nom=null;
        $chaine = trim($request->nom)."".trim($request->prenoms); 
        $string = iconv ('UTF-8', 'US-ASCII//TRANSLIT//IGNORE', $chaine);
        $string = preg_replace ('#[^.0-9a-z]+#i', '-', $string);
        $titre = strtolower ($string); 
        //dd($i);
        /*GESTION DE LIEN*/
                do{ 
                    $rand="";
                    $length = 2;
                    $taille = "123456789";
                    srand((double)microtime()*1000000);
                    for($i=0; $i<$length; $i++) {
                      $rand .= $taille[rand()%strlen($taille)];
                    } 

                    $link=$titre."-".$rand;

                    $verifLink= Innovation::where('lien', '=', $link)->get();  
                  if(empty($verifLink->toArray())){
                    $existLink="";
                  }else{
                    $existLink=$verifLink[0]->lien;
                  }
                }while ($link==$existLink);


            $chemin="public/img/innov";
            if (!file_exists($chemin)) { 
                mkdir($chemin, 0700);
            }  
            $image = $request->file('img');  

            if($image){ 
                $extension = $image->getClientOriginalExtension(); 
                $nom =$link.'.' .$extension;  
                $image->move($chemin,$link);
                $image=$chemin."/".$nom;  
                //unset($request['img']);
                $toCreate = array_add($request->all(), 'image', $image); 
            } 
            $toCreate = array_add($toCreate, 'lien', $link);
          
          
        if($i->update($toCreate)){
            Session::flash('flash_message', 'Modification effectuée avec succès !'); 
            return redirect()->back();
        }
 
    }


    public function enable($id)
    {
        # code...
        $innovation=Innovation::find($id);
        $innovation->publier=1;
        $innovation->save();
        return redirect()->back();

    }

    public function desable($id)
    {
        # code...
        $innovation=Innovation::find($id);
        $innovation->publier=0;
        $innovation->save();
        return redirect()->back();
    }

    public function single($link)
    {   

        $thisInnovation=Innovation::where('lien','=',$link)->where('publier',1)->first(); 
        if(empty($thisInnovation) || $thisInnovation==null){ 
            $title="Page  introuvable";
            return view('errors.404',compact('title'));
        }else{
            $types = DB::select('select * from type_innovations');
            $orthers=Innovation::where('id','<>', $thisInnovation->id)->where('publier',1)->where('type_innovation_id', $thisInnovation->type_innovation_id)->get(); 
            $thisInnovation->views+=1;
            $thisInnovation->save(); 
            $title=$thisInnovation->titre; 
            return view('frontend.home',compact('title','thisInnovation','types','orthers'));
        }
    }

    public function categorie($name)
    {   

        $type = DB::select('select * from type_innovations where titre="'.$name.'"');
        $titleCategorie=$type[0]->titre;
        $title=$name;
        $innovations=Innovation::where('type_innovation_id','=',$type[0]->id)->where('publier',1)->paginate(10); 
         
        return view('frontend.home',compact('title','innovations','titleCategorie')); 
    }
}