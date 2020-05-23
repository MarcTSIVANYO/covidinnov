<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Article;
use App\Categorie;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $articles = DB::table('articles')->where('visible', '=', '1')->orderBy('indice','asc')
        ->get();
        $categories = Categorie::where('visible', '=', '1')->get();
        return view('admin.articles.index', compact('articles','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
    	$categories = Categorie::where('visible', '=', '1')->get()->pluck('titre',  'id');
        return view('admin.articles.create', compact('categories'));
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
        $articles=new Article(); 
        $articles->titre=$request->titre;
        $articles->libelle=$request->libelle;
        $articles->fichier=$request->fichier;
        $articles->indice=$request->indice;
        $articles->contenu=$request->contenu;
        $articles->publier=$request->publier;
        $articles->categorie_id=$request->categorie_id;
 
        //enregistrement du fichier 
        $file = $request->file('fichier');
        if($file)
        { 
            $extension = $file->getClientOriginalExtension();
            $nom = time(). '.' . $extension;
            $file->move('fichiers_siteWeb',$nom);
            $articles->fichier="fichiers_siteWeb/".$nom;
        } 
        $articles->save();
        Session::flash('flash_message', 'Enregistrement effectué avec succès !');
        Session::flash('categorie_id',$request->categorie_id);
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
        $articles = Article::findOrFail($id);
        $categories = Categorie::where('visible', '=', '1')->get();
        return view('admin.articles.show', compact('articles','categories'));
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
        $articles = Article::findOrFail($id);
        $categories = Categorie::where('visible', '=', '1')->get()->pluck('titre',  'id');
        return view('admin.articles.edit', compact('articles','categories'));
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
       
        $articles = Article::findOrFail($id);
        $articles->titre=$request->titre;
        $articles->libelle=$request->libelle;
        $articles->fichier=$request->fichier;
        $articles->indice=$request->indice;
        $articles->contenu=$request->contenu;
        $articles->publier=$request->publier;
        $articles->categorie_id=$request->categorie_id;
        //enregistrement du fichier 
        $file = $request->file('fichier');
        if($file)
        { 
            $extension = $file->getClientOriginalExtension();
            $nom = time(). '.' . $extension;
            $file->move('fichiers_siteWeb',$nom);
            $articles->fichier="fichiers_siteWeb/".$nom;
        } 
        $articles->save();

        Session::flash('flash_message', 'Modification effectuée avec succès !');
        Session::flash('categorie_id',$request->categorie_id);
        return redirect()->back();
    }

    public function listBy($categorie_id)
    {
        $articles = DB::table('articles')
        ->where('visible', '=', '1')
        ->where('categorie_id', '=', $categorie_id)
        ->orderBy('indice','asc')
        ->get();
        $categories = Categorie::find($categorie_id)->get();
        $categorie_id=$categorie_id;
        return view('admin.articles.index',compact('articles', 'categories','categorie_id'));
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
        //Categorie::destroy($id);
    	$articles = Article::find($id);
        $articles->visible=0;
        $articles->save(); 
        Session::flash('flash_message', 'Suppression effectuée avec succès!');

        return redirect()->back();
    }
}
