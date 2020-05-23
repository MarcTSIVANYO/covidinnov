<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\region;

use Illuminate\Support\Facades\Session;

use DB;

class regionsController extends Controller
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
        // $regions=region::all();
        $regions = DB::table('regions')->where('visible_regions', '=', '1')->get();
        return view('parametrage.regions.regions_liste',compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('parametrage.regions.regions_form');
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
        $this->validate($request,region::rules(),region::messages());
        $regions=new region();
        $regions->titre_regions=ucwords($request->titre_regions);
        $regions->publier_regions=1;
        // dd($regions);
        $regions->save();
        $msg="Region Enregistr&eacute;e !";
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
        $regions=region::find($id);
        return view('parametrage.regions.regions_form',compact('regions'));


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
        //   //
        $regions=region::find($id);
        $this->validate($request,region::rules(),region::messages());
        $regions->titre_regions=ucfirst($request->titre_regions);
        // $regions->publier_regions=$request->publier_regions;
        $regions->save();
        $msg="R&eacute;gion modifi&eacute;e !";
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
        $regions=region::find($id);
        $regions->visible_regions=0;
        // dd($regions);

        $regions->save();
        // $regions = DB::table('regions')->where('visible_regions', '=', '1')->get();
        // dd($regions);
        // return view('parametrage.regions_liste',compact('regions'));
        return redirect()->route('parametrage.index');

    }
}
