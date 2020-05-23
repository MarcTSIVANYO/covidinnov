<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\User;
use App\CV;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        if (Auth::user()->admin==1) {    
            $all=Cv::get()->count(); 
            $valide=Cv::where('publier',1)->get()->count(); 
            $wait=Cv::where('publier',0)->get()->count(); 
            return view('dashboard.admin', compact('all','valide','wait'));
        }

        if (Auth::user()->admin==0) {    
            return view('frontend.home'); 
        }
        return view('frontend.home'); 
    }

    public function editerCompte(request $request)
    {  
        $i=User::find(Auth::user()->id_users); 
        $toCreate = $request->all();
        $nom=null;
        $chaine = trim($request->nom_users)."".trim($request->prenoms_users); 
        $string = iconv ('UTF-8', 'US-ASCII//TRANSLIT//IGNORE', $chaine);
        $string = preg_replace ('#[^.0-9a-z]+#i', '', $string);
        $titre = strtolower ($string);
        $chemin="public/img/account";
        if (!file_exists($chemin)) { 
            mkdir($chemin, 0700);
        }  
        $photo = $request->file('photo');   
        if($photo){ 
            $extension = $photo->getClientOriginalExtension(); 
            $nom ="p_".$titre.time().'.' . $extension;  
            $photo->move($chemin,$nom);
            $photo=$chemin."/".$nom;  
            $toCreate = array_add($request->all(), 'logo_users', $photo);
        }
          
        if($i->update($toCreate)){
            Session::flash('flash_message', 'Modification effectuée avec succès !'); 
            return redirect()->back();
        } 
    }

    public function password(request $request)
    {
        if ($request->password_confirmation==$request->password) {

            $user=User::where('id_users',Auth::user()->id_users)->first();
            //dd($user);  
            $user->password=Hash::make($request->password);
               $user->save();
            $msg="Mot de passe modifié avec succès!";
            Session::flash('flash_message',$msg);
            return redirect()->back();
        }else{
            $msg="Mot de passe erron&eacute; !";
            Session::flash('flash_message',$msg);
            return redirect()->back();
       }
    }

}
