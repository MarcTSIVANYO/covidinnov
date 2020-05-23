<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Album;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $albums = DB::table('albums')->where('visible', '=', '1')->orderBy('indice','asc')
        ->get(); 
        return view('admin.albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    { 
        return view('admin.albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $albums=new Album(); 
        $albums->titre=$request->titre;
        $albums->fixed=$request->fixed;
        $albums->indice=$request->indice; 
        $albums->publier=$request->publier; 
        $albums->save();
        Session::flash('flash_message', 'Enregistrement effectué avec succès !'); 
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $albums = Album::findOrFail($id);
        return view('admin.albums.show', compact('albums'));
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
        $albums = Album::findOrFail($id);
        return view('admin.albums.edit', compact('albums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
       
        $albums = Album::findOrFail($id);
        $albums->titre=$request->titre;
        $albums->fixed=$request->fixed;
        $albums->indice=$request->indice; 
        $albums->publier=$request->publier; 
        $albums->save();
        Session::flash('flash_message', 'Modification effectuée avec succès !'); 
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
    	$albums = Album::find($id);
        $albums->visible=0;
        $albums->save(); 
        Session::flash('flash_message', 'Suppression effectuée avec succès!');
        return redirect()->back();
    }
}
