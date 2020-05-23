<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\utilisateur;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Hash;

use DB;

use App\TypeUser;

use App\Droit;

use Intervention\Image\Facades\Image;

use user;

// use Image;

class utilisateursController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        # code...
        $utilisateurs = DB::table('users')->where('visible_users', '=', '1')
        ->orderBy('nom_users','asc')
        ->get();
        // $utilisateurs->date_users=date('d/m/Y',strtotime($utilisateurs->date_users));
        return view('parametrage.utilisateurs.users_liste',compact('utilisateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        # code...
        return view('parametrage.utilisateurs.users_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,utilisateur::rules(),utilisateur::messages());
        $utilisateurs=new utilisateur();
        $utilisateurs->nom_users=strtoupper($request->nom_users);
        $utilisateurs->prenoms_users=ucwords($request->prenoms_users);
        $utilisateurs->sexe_users=$request->sexe_users;
        $utilisateurs->date_users=date('Y-m-d',strtotime($request->date_users));
        $utilisateurs->email=$request->email;
        $utilisateurs->adresse_users=ucwords($request->adresse_users);
        $utilisateurs->contact_users=$request->contact_users;
        $utilisateurs->ville_users=ucwords($request->ville_users);
        $utilisateurs->login_users=$request->login_users;
        $utilisateurs->password=Hash::make($request->password);
        $utilisateurs->publier_users=1;
        $utilisateurs->visible_users=1;
        $utilisateurs->remember_token=$request->remember_token;
        //enregistrement d'une foto 
        $file = $request->file('logo_users');
        if($file)
        { 
            $extension = $file->getClientOriginalExtension();
                $nom = time(). '.' . $extension;
            $file->move('fichiers',$nom);
            $utilisateurs->logo_users="fichiers/".$nom;
        } 
        $utilisateurs->save();
        $msg="Utilisateur Enregistr&eacute; !";
        Session::flash('flash_message',$msg);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $utilisateurs=utilisateur::find($id);
        $utilisateurs->date_users=date('d/m/Y',strtotime($utilisateurs->date_users));
        return view('parametrage.utilisateurs.users_show',compact('utilisateurs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $utilisateurs=utilisateur::find($id);
        $utilisateurs->date_users=date('d/m/Y',strtotime($utilisateurs->date_users));
        return view('parametrage.utilisateurs.users_edit',compact('utilisateurs'));
    }

    public function edit_profile($id)
    {
        //
        $utilisateurs=utilisateur::find($id);
        $utilisateurs->date_users=date('d/m/Y',strtotime($utilisateurs->date_users));
        return view('parametrage.utilisateurs.users_edit_profile',compact('utilisateurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($this->validate($request,utilisateur::rules(),utilisateur::messages()));

        $utilisateurs=utilisateur::find($id);
        $utilisateurs->nom_users=strtoupper($request->nom_users);
        $utilisateurs->prenoms_users=ucwords($request->prenoms_users);
        $utilisateurs->sexe_users=$request->sexe_users;
        $utilisateurs->date_users=date('Y-m-d',strtotime($request->date_users));
        $utilisateurs->adresse_users=ucwords($request->adresse_users);
        $utilisateurs->contact_users=$request->contact_users;
        $utilisateurs->ville_users=ucwords($request->ville_users);
        $file = $request->file('logo_users');
            // dd($request->file('logo_users'));
        if($file)
        { 
            $extension = $file->getClientOriginalExtension();
            $nom = time(). '.' . $extension;
            $file->move('fichiers',$nom);
            $utilisateurs->logo_users="fichiers/".$nom;
        } 
            $utilisateurs->save();
            
            $msg="Utilisateur modifi&eacute; !";
            Session::flash('flash_message',$msg);
            return redirect()->back();
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function enable_users($id)
    {
        # code...
        $utilisateurs=utilisateur::find($id);
        $utilisateurs->publier_users=1;
        $utilisateurs->save();
        return redirect()->route('utilisateurs.index');

    }

    public function desable_users($id)
    {
        # code...
        $utilisateurs=utilisateur::find($id);
        $utilisateurs->publier_users=0;
        $utilisateurs->save();
        return redirect()->route('utilisateurs.index');

    }
// fonction de suppression d'un user
    public function visible_users($id)
    {
        # code...
        $utilisateurs=utilisateur::find($id);
        $utilisateurs->visible_users=0;
        $utilisateurs->save();
        return redirect()->route('utilisateurs.index');

    }


    //Yao C.
    public function droits($id)
    {
        $droits = DB::table('droits')->where('id_users', '=', $id)->get();
        $menus = DB::table('menus')->where('visible_menus', '=', '1')->get();
        $sous_menus = DB::table('sous_menus')->where('visible_sous_menus', '=', '1')->get();
        $type_users = TypeUser::pluck('libelle_type_users',  'id_type_users');
        return view('parametrage.droits.droits_users_liste_post',compact('droits', 'menus', 'sous_menus', 'type_users', 'id'));
    }




}
