<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\region;

use App\pays;

use Illuminate\Support\Facades\Session;
 
use DB;



class paysController extends Controller
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
        // $lepays=pays::all();
        $lepays = DB::table('pays')->where('visible_pays', '=', '1')->get();
        $regions=DB::table('regions')->where('visible_regions', '=', '1')->get();
        return view('parametrage.pays.pays_liste',compact('lepays','regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $regions=region::pluck('titre_regions','id_regions');
        return view('parametrage.pays.pays_form', compact('regions'));
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
        $this->validate($request,pays::rules(),pays::messages());
        $pays=new pays();
        $pays->titre_pays=ucwords($request->titre_pays);
        $pays->id_regions=$request->id_regions;
        $pays->publier_pays=1;
        $pays->save();
        $msg="Pays Enregistr&eacute; !";
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pays=pays::find($id);
        $regions=region::pluck('titre_regions','id_regions');
        return view('parametrage.pays.pays_form',compact('pays','regions'));
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
        //
        $pays=pays::find($id);
        $this->validate($request,pays::rules(),pays::messages());
        $pays->titre_pays=$request->titre_pays;
        $pays->id_regions=$request->id_regions;
        // $pays->publier_pays=$request->publier_pays;
        // dd($pays);
        $pays->save();
        $msg="Pays modifi&eacute; !";
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

    public function visible($id)
    {
        # code...
        $pays=pays::find($id);
        $pays->visible_pays=0;
        $pays->save();
        // $pays = DB::table('pays')->where('visible_pays', '=', '1')->get();
        // dd($pays);
        // return view('parametrage.pays_liste',compact('pays'));
        return redirect()->route('parametrage.index');

    }
}
