<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\domaine;

use App\sousdomaine;

use Illuminate\Support\Facades\Session;

class sousdomainesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $domaines=DB::table('domaines')->select('id_domaines','titre_domaines')->where('visible_domaines','=','1')->get();
        $sous_domaines=DB::table('sous_domaines')->select('titre_sous_domaines','id_sous_domaines','id_domaines')->where('visible_sous_domaines','=','1')->get();

        // dd($domaines);
        // $sous_domaines=sousdomaine::all();
        // $domaines=domaine::all();
        return view('parametrage/sous_domaines/sous_domaines_liste',compact('sous_domaines','domaines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $domaines=domaine::pluck('titre_domaines','id_domaines');
        return view('parametrage/sous_domaines/sous_domaines_form',compact('domaines'));
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
        $sous_domaines=new sousdomaine();
        $this->validate($request,sousdomaine::rules(),sousdomaine::messages());
        $sous_domaines->titre_sous_domaines=ucfirst($request->titre_sous_domaines);
        $sous_domaines->id_domaines=$request->id_domaines;
        $sous_domaines->publier_sous_domaines=1;
        $sous_domaines->visible_sous_domaines=1;
        $sous_domaines->save();
        $msg="Sous domaine Enregistr&eacute; !";
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
        //
        $sous_domaines=sousdomaine::find($id);
        $domaines=domaine::pluck('titre_domaines','id_domaines');
        // dd($sousdomaine);
        return view('parametrage/sous_domaines/sous_domaines_form',compact('sous_domaines','domaines'));
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
        $sous_domaines=sousdomaine::find($id);
        $this->validate($request,sousdomaine::rules(),sousdomaine::messages());
        $sous_domaines->titre_sous_domaines=ucfirst($request->titre_sous_domaines);
        $sous_domaines->id_domaines=$request->id_domaines;
        $sous_domaines->publier_sous_domaines=1;
        $sous_domaines->visible_sous_domaines=1;
        $sous_domaines->save();
        $msg="Sous domaine modifi&eacute; !";
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
        $sous_domaines=sousdomaine::find($id);
        $sous_domaines->visible_sous_domaines=0;
      
        $sous_domaines->save();
        return redirect()->route('sous_domaines.index');

    }
}
