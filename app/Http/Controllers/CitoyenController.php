<?php

namespace App\Http\Controllers;

use App\Citoyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Validator;
use DB;
use App\App;
use Session; 
use Auth;
class CitoyenController extends Controller
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
            $citoyens=Citoyen::get();
        }else{
            $citoyens=Citoyen::where('user_id',auth()->user()->id_users)->get();
        }
        $types=  DB::table('typecitoyens')->get();
        $regions=  DB::table('regions')->get();
        return view('citogo.citoyens.index', compact('citoyens','types','regions'));

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
        $view='citoyen';
        $views=$view.'s';


        $id=$request->input('id');
        
        //$id = 0 pour enregistrement 
        if($request->input('id')==0){

            $v=App::validate($request);
            unset($request['_token']);
                unset($request['id']);
            if($v->passes()){
                if(Citoyen::create($request->all())){

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
            $i=Citoyen::find($request->input('id'));
            
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
     * @param  \App\Citoyen  $citoyen
     * @return \Illuminate\Http\Response
     */
    public function show(Citoyen $citoyen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Citoyen  $citoyen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        //         
        $citoyen=Citoyen::find($id);
        if (Auth::user()->admin==1) { 
            $citoyens=Citoyen::get();
        }else{
            $citoyens=Citoyen::where('user_id',auth()->user()->id_users)->get();
        }
        $types=  DB::table('typecitoyens')->get();
        $regions=  DB::table('regions')->get();
        return view('citogo.citoyens.index', compact('citoyens','citoyen','types','regions'));

    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citoyen  $citoyen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citoyen $citoyen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citoyen  $citoyen
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $citoyen = Citoyen::find($id);
        $citoyen->delete();

        // redirect
        Session::flash('flash_message', 'Supression éffectuée avec succès!');
        return redirect()->back();;
    }
}
