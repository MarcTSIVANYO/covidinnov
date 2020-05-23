<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Section;
use DB;
use App\Page;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pages = DB::table('pages')->where('visible', '=', '1')->orderBy('indice','asc')
        ->get();
        $sections = Section::where('visible', '=', '1')->get();
        return view('admin.pages.index', compact('pages','sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
    	$sections = Section::where('visible', '=', '1')->get()->pluck('titre',  'id');
        return view('admin.pages.create', compact('sections'));
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
        $pages=new Page(); 
        $pages->titre=$request->titre;
        $pages->libelle=$request->libelle;
        $pages->fichier=$request->fichier;
        $pages->indice=$request->indice;
        $pages->contenu=$request->contenu;
        $pages->publier=$request->publier;
        $pages->section_id=$request->section_id;
        //enregistrement du fichier 
        $file = $request->file('fichier');
        if($file)
        { 
            $extension = $file->getClientOriginalExtension();
            $nom = time(). '.' . $extension;
            $file->move('fichiers_siteWeb',$nom);
            $pages->fichier="fichiers_siteWeb/".$nom;
        } 
        $pages->save();
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
        $pages = Page::findOrFail($id);
        $sections = Section::where('visible', '=', '1')->get();
        return view('admin.pages.show', compact('pages','sections'));
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
        $pages = Page::findOrFail($id);
        $sections = Section::where('visible', '=', '1')->get()->pluck('titre',  'id');
        return view('admin.pages.edit', compact('pages','sections'));
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
        $pages = Page::findOrFail($id);
        $pages->titre=$request->titre;
        $pages->libelle=$request->libelle;
        $pages->fichier=$request->fichier;
        $pages->indice=$request->indice;
        $pages->contenu=$request->contenu;
        $pages->publier=$request->publier;
        $pages->section_id=$request->section_id;
        //enregistrement du fichier 
        $file = $request->file('fichier');
        if($file)
        { 
            $extension = $file->getClientOriginalExtension();
            $nom = time(). '.' . $extension;
            $file->move('fichiers_siteWeb',$nom);
            $pages->fichier="fichiers_siteWeb/".$nom;
        } 
        $pages->save();

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
        //Page::destroy($id);
        $pages = Page::findOrFail($id);
        $pages->visible=0;
        $pages->save(); 
        Session::flash('flash_message', 'Suppression effectuée avec succès!');

        return redirect()->back();
    }
}
