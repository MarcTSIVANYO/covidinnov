<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests; 
use App\CV; 
use Session;
use Auth;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Validator;

class CVController extends Controller
{
    protected $rules = array(
      'pseudo'=>'required|between:3,30|unique:cv',
      'email'=>'required|between:3,30|unique:cv'
      );

    protected $messages = array( 
      'pseudo.required'=>'Le pseudo est obligatoire !',
      'pseudo.between'=>'Le pseudo doit etre comprise entre 3 et 30 caractères !',
      'pseudo.unique'=>'Ce pseudo existe déjà !',
      'email.unique'=>'Ce adresse email existe déjà !'
      );
 
    public function __construct()
    {
        $this->middleware('auth');
    }   
    
    public function index()
    {
        $lists = CV::get();
        return view('cv.index',compact('lists'));
    }

    public function create()
    {
        return view('cv.create');
    }

     public function store(Request $request)
    {
            $id=$request->input('id');
            //$id = 0 pour enregistrement 
            if($request->input('id')==0){ 
                unset($request['id']);

            $v=Validator::make($request->all(), $this->rules, $this->messages);
 
            $toCreate = $request->all();
            $nom=null;
            $chaine = trim($request->nom)."".trim($request->prenoms); 
            $string = iconv ('UTF-8', 'US-ASCII//TRANSLIT//IGNORE', $chaine);
            $string = preg_replace ('#[^.0-9a-z]+#i', '', $string);
            $titre = strtolower ($string);
            $chemin="public/img/".$titre;
            if (!file_exists($chemin)) { 
                mkdir($chemin, 0700);
            }  
            $photo = $request->file('img-photo');  

          if($photo){ 
            $extension = $photo->getClientOriginalExtension(); 
            $nom ="profils_".$titre.time().'.' . $extension;  
            $photo->move($chemin,$nom);
            $photo=$chemin."/".$nom;  
            $toCreate = array_add($request->all(), 'photo', $photo);
          }
          
          $banner = $request->file('img-banner');
            if($banner){ 
                $extension = $banner->getClientOriginalExtension(); 
                $bnom ="banner_".$titre.time().'.' . $extension; 
                $banner->move($chemin,$bnom);
                $banner=$chemin."/".$bnom;  
                $toCreate = array_add($toCreate, 'banner', $banner);
            }  
          if(CV::create($toCreate)){  
                Session::flash('flash_message', 'Enregistrement effectué avec succès !'); 
                return redirect()->back();
            }else{
                Session::flash('error_message', 'Erreur lors de l\'enregistrement'); 
                return redirect()->back();
            }
        }else{
            //dd($request->all());
            $this->update($id, $request);

            return redirect()->back();
            //return redirect()->route('cv.update', $id);
            //['/admin/cv', $list->id]
        }
    }

    public function show($id)
    {
        $lists = CV::findOrFail($id); 
        return view('cv.show', compact('lists'));
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
        $list = CV::findOrFail($id); 
        return view('cv.edit', compact('list'));
    }

    public function update($id, Request $request)
    {

        $i=CV::find($id); 
        $toCreate = $request->all();
        $nom=null;
        $chaine = trim($request->nom)."".trim($request->prenoms); 
        $string = iconv ('UTF-8', 'US-ASCII//TRANSLIT//IGNORE', $chaine);
        $string = preg_replace ('#[^.0-9a-z]+#i', '', $string);
        $titre = strtolower ($string);
        $chemin="public/img/".$titre;
        if (!file_exists($chemin)) { 
            mkdir($chemin, 0700);
        }  
        $photo = $request->file('img-photo');  
 
          if($photo){ 
            $extension = $photo->getClientOriginalExtension(); 
            $nom ="profils_".$titre.time().'.' . $extension;  
            $photo->move($chemin,$nom);
            $photo=$chemin."/".$nom;  
            $toCreate = array_add($request->all(), 'photo', $photo);
          }
          
          $banner = $request->file('img-banner');
            if($banner){ 
                $extension = $banner->getClientOriginalExtension(); 
                $bnom ="banner_".$titre.time().'.' . $extension; 
                $banner->move($chemin,$bnom);
                $banner=$chemin."/".$bnom;  
                $toCreate = array_add($toCreate, 'banner', $banner);
            }  
        if($i->update($toCreate)){
            Session::flash('flash_message', 'Modification effectuée avec succès !'); 
            return redirect()->back();
        }
 
    }


    public function enable($id)
    {
        # code...
        $cv=CV::find($id);
        $cv->publier=1;
        $cv->save();
        return redirect()->route('cv.index');

    }

    public function desable($id)
    {
        # code...
        $cv=CV::find($id);
        $cv->publier=0;
        $cv->save();
        return redirect()->route('cv.index');

    }

     public function cvPage($url)
    {  
        if (Auth::user()->admin==1) {     
            $cv=CV::where('pseudo','=',$url)->first(); 
        }else{
            $cv=CV::where('pseudo','=',$url)->where('publier',1)->first();  
        }

      
      if(empty($cv) || $cv==null){ 
        $title="Page de CV  introuvable";
         return view('errors.404',compact('title'));
      }else{
        $cv->views+=1;
        $cv->save(); 
        $title=$cv->nom." ".$cv->prenoms;
        if(!empty($cv->photo)){
          $favicon=$cv->photo;
        }else{
           $favicon="resources/assets/cv/img/favicon.png"; 
        }
        return view('frontend.cv-online',compact('favicon','title','cv'));
      }
      
    }


}