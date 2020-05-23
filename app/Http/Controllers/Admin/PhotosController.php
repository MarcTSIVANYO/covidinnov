<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Photo;
use App\Album;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $photos = DB::table('photos')->where('visible', '=', '1')->orderBy('indice','asc')
        ->get();
        $albums = Album::where('visible', '=', '1')->get();
        return view('admin.photos.index', compact('photos','albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
    	$albums = Album::where('visible', '=', '1')->get()->pluck('titre',  'id');
        return view('admin.photos.create', compact('albums'));
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
        $photos=new Photo(); 
        $photos->titre=$request->titre;
        $photos->libelle=$request->libelle;
        $photos->fichier=$request->fichier;
        $photos->indice=$request->indice;
        $photos->publier=$request->publier;
        $photos->album_id=$request->album_id; 
        //enregistrement du fichier 
        $file = $request->file('fichier');
        if($file)
        { 
            $extension = $file->getClientOriginalExtension();
            $nom = 'photo'.time(). '.' . $extension;
            $file->move('photos',$nom);
            $photos->fichier="photos/".$nom;
        } 
        $photos->save();
        Session::flash('flash_message', 'Enregistrement effectué avec succès !');
        Session::flash('album_id',$request->album_id);
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
        $photos = Photo::findOrFail($id);
        $albums = Album::where('visible', '=', '1')->get();
        return view('admin.photos.show', compact('photos','albums'));
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
        $photos = Photo::findOrFail($id);
        $albums = Album::where('visible', '=', '1')->get()->pluck('titre',  'id');
        return view('admin.photos.edit', compact('photos','albums'));
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
       
        $photos = Photo::findOrFail($id);
        $photos->titre=$request->titre;
        $photos->libelle=$request->libelle;
        $photos->fichier=$request->fichier;
        $photos->indice=$request->indice;
        $photos->publier=$request->publier;
        $photos->album_id=$request->album_id;
        //enregistrement du fichier 
        $file = $request->file('fichier');
        if($file)
        { 
            $extension = $file->getClientOriginalExtension();
            $nom = 'photo'.time(). '.' . $extension;
            $file->move('photos',$nom);
            $photos->fichier="photos/".$nom;
        } 
        $photos->save();

        Session::flash('flash_message', 'Modification effectuée avec succès !');
        Session::flash('album_id',$request->album_id);
        return redirect()->back();
    }

    public function listBy($album_id)
    {
        $photos = DB::table('photos')
        ->where('visible', '=', '1')
        ->where('album_id', '=', $album_id)
        ->orderBy('indice','asc')
        ->get();
        $albums = Album::find($album_id)->get();
        $album_id=$album_id;
        return view('admin.photos.index',compact('photos', 'albums','album_id'));
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
    	$photos = Photo::find($id);
        $photos->visible=0;
        $photos->save(); 
        Session::flash('flash_message', 'Suppression effectuée avec succès!');

        return redirect()->back();
    }
}
