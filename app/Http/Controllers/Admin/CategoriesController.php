<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Page;
use App\Categorie;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = DB::table('categories')->where('visible', '=', '1')->orderBy('indice','asc')
        ->get();
        $pages = Page::where('visible', '=', '1')->get();
        return view('admin.categories.index', compact('categories','pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
    	$pages = Page::where('visible', '=', '1')->get()->pluck('titre',  'id');
        return view('admin.categories.create', compact('pages'));
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
        $categories=new Categorie(); 
        $categories->titre=$request->titre;
        $categories->libelle=$request->libelle;
        $categories->fichier=$request->fichier;
        $categories->indice=$request->indice;
        $categories->contenu=$request->contenu;
        $categories->publier=$request->publier;
        $categories->page_id=$request->page_id;
 
        //enregistrement du fichier 
        $file = $request->file('fichier');
        if($file)
        { 
            $extension = $file->getClientOriginalExtension();
            $nom = time(). '.' . $extension;
            $file->move('fichiers_siteWeb',$nom);
            $categories->fichier="fichiers_siteWeb/".$nom;
        } 
        $categories->save();
        Session::flash('flash_message', 'Enregistrement effectué avec succès !');
        Session::flash('page_id',$request->page_id);
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
        $categories = Categorie::findOrFail($id);
        $pages = Page::where('visible', '=', '1')->get();
        return view('admin.categories.show', compact('categories','pages'));
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
        $categories = Categorie::findOrFail($id);
        $pages = Page::where('visible', '=', '1')->get()->pluck('titre',  'id');
        return view('admin.categories.edit', compact('categories','pages'));
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
       
        $categories = Categorie::findOrFail($id);
        $categories->titre=$request->titre;
        $categories->libelle=$request->libelle;
        $categories->fichier=$request->fichier;
        $categories->indice=$request->indice;
        $categories->contenu=$request->contenu;
        $categories->publier=$request->publier;
        $categories->page_id=$request->page_id;
        //enregistrement du fichier 
        $file = $request->file('fichier');
        if($file)
        { 
            $extension = $file->getClientOriginalExtension();
            $nom = time(). '.' . $extension;
            $file->move('fichiers_siteWeb',$nom);
            $categories->fichier="fichiers_siteWeb/".$nom;
        } 
        $categories->save();

        Session::flash('flash_message', 'Modification effectuée avec succès !');
        Session::flash('page_id',$request->page_id);
        return redirect()->back();
    }

    public function listBy($page_id)
    {
        $categories = DB::table('categories')
        ->where('visible', '=', '1')
        ->where('page_id', '=', $page_id)
        ->orderBy('indice','asc')
        ->get();
        $pages = Page::find($page_id)->get();
        $page_id=$page_id;
        return view('admin.categories.index',compact('categories', 'pages','page_id'));
    }

 public function listByLibelle($page_libelle)
    {
        $page = Page::where('fixe',$page_libelle)->first();
        $categories = DB::table('categories')
        ->where('visible', '=', '1')
        ->where('page_id', '=', $page->id)
        ->orderBy('indice','asc')
        ->get();
        $page_id=$page->id;
        $pages = Page::find($page_id)->get();
        return view('admin.categories.index',compact('categories', 'pages','page_id'));
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
    	$categories = Categorie::find($id);
        $categories->visible=0;
        $categories->save(); 
        Session::flash('flash_message', 'Suppression effectuée avec succès!');

        return redirect()->back();
    }
}
