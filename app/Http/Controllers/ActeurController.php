<?php

namespace App\Http\Controllers;

use App\Acteur;
use Illuminate\Http\Request;
use DB;
use App\App;
use Session; 
use Auth;

class ActeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        if (Auth::user()->admin==1) { 
            $acteurs=Acteur::get();
        }else{
           $acteurs=Acteur::where('user_id',Auth()->user()->id_users)->get();
        }
        
        $types=  DB::table('typeacteurs')->get();
        return view('citogo.acteurs.index', compact('acteurs','types'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
    {
        //mettre le nom de la route ici en respectant la syntaxe
        $view='acteur';
        $views=$view.'s';


        $id=$request->input('id');
        
        //$id = 0 pour enregistrement 
        if($request->input('id')==0){

            $v=App::validate($request);
            unset($request['_token']);
            unset($request['id']);
            if($v->passes()){
                if(Acteur::create($request->all())){

                    Session::flash('flash_message', 'Enregistrement effectué avec succès !'); 
                    return redirect()->back();
                }
 
                Session::flash('error_message', 'Erreur lors de l\'enregistrement'); 
                return redirect()->back();
            }
                Session::flash('error_message', 'Erreur lors de l\'enregistrement'); 
                return redirect()->back();
        }
        else{
            $i=Acteur::find($request->input('id'));
            
            $v=App::validate($request);

            if($v->passes()){

                unset($request['_token']);

                if($i->update($request->all())){

                    Session::flash('flash_message', 'Enregistrement effectué avec succès !'); 
                    return redirect()->back();
                }
               Session::flash('error_message', 'Erreur lors de l\'enregistrement'); 
                return redirect()->back();
            }
            Session::flash('error_message', 'Erreur lors de l\'enregistrement'); 
                return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function show(Acteur $acteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        //         
        $acteur=Acteur::find($id);
        if (Auth::user()->admin==1) { 
            $acteurs=Acteur::get();
        }else{
           $acteurs=Acteur::where('user_id',Auth()->user()->id_users)->get();
        }
        $types=  DB::table('typeacteurs')->get(); 
        return view('citogo.acteurs.index', compact('acteurs','acteur','types'));

    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acteur $acteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $acteur = Acteur::find($id);
        $acteur->delete();

        // redirect
        Session::flash('flash_message', 'Supression éffectuée avec succès!');
        return redirect()->back();;
    }
}
