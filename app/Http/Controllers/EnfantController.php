<?php

namespace App\Http\Controllers;

use App\Enfant;
use App\Citoyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Validator;
use DB;
use App\App;
use Session; 
use Auth;
class EnfantController extends Controller
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
        $enfants=Enfant::get(); 
        $citoyen=null;
        return view('citogo.enfants.index', compact('enfants','citoyen'));
    }

    public function indexByCitoyen($id)
    {
        //
        $enfants=Enfant::where('citoyen_id',$id)->get(); 
        $citoyen=Citoyen::find($id);
        return view('citogo.enfants.index', compact('enfants','citoyen'));
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
        $view='enfant';
        $views=$view.'s';


        $id=$request->input('id');
        
        //$id = 0 pour enregistrement 
        if($request->input('id')==0){

            $v=App::validate($request);
            unset($request['_token']);
                unset($request['id']);
            if($v->passes()){
                if(Enfant::create($request->all())){

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
            $i=Enfant::find($request->input('id'));
            
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
     * @param  \App\Enfant  $enfant
     * @return \Illuminate\Http\Response
     */
    public function show(Enfant $enfant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enfant  $enfant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        //         
        $enfant=Enfant::find($id);
        $enfants=Enfant::where('citoyen_id',$id)->get(); 
        $citoyen=Citoyen::find($id);
        return view('citogo.enfants.index', compact('enfants','enfant','citoyen'));

    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enfant  $enfant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enfant $enfant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enfant  $enfant
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $enfant = Enfant::find($id);
        $enfant->delete();

        // redirect
        Session::flash('flash_message', 'Supression éffectuée avec succès!');
        return redirect()->back();;
    }
}
