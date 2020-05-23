<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Menu;
use App\SousMenu;
use Illuminate\Support\Facades\Session;
use DB;

class SousMenusController extends Controller
{

    public function listBy($id_menus)
    {
        $sous_menus = DB::table('sous_menus')
        ->where('visible_sous_menus', '=', '1')
        ->where('id_menus', '=', $id_menus)
        ->orderBy('indice_sous_menus','asc')
        ->get();
        $menu = Menu::find($id_menus);
        return view('parametrage.sous_menus.sous_menus_liste',compact('sous_menus', 'menu'));
    }
    public function __construct(){
        //$this->middleware('auth');
    }

    public function index(){
        $sous_menus = DB::table('sous_menus')->where('visible_sous_menus', '=', '1')->orderBy('indice_sous_menus','asc')->get();
        $menus = DB::table('menus')->where('visible_menus', '=', '1')->orderBy('indice_menus','asc')
->get();
        // dd($menus);
        return view('parametrage/sous_menus/sous_menus_liste',compact('sous_menus','menus'));
    }

    public function create(){
        $menus = Menu::where('visible_menus', '=', '1')->get()->pluck('titre_menus',  'id_menus');
        return view('parametrage.sous_menus.sous_menus_form', compact('menus'));
    }

    public function store(Request $request){
        $this->validate($request,SousMenu::rules(),SousMenu::messages());
        $sous_menu = new SousMenu();
        $sous_menu->titre_sous_menus=$request->titre_sous_menus;
        $sous_menu->libelle_sous_menus=$request->libelle_sous_menus;
        $sous_menu->lien_sous_menus=$request->lien_sous_menus;
        $sous_menu->indice_sous_menus=$request->indice_sous_menus;
        $sous_menu->id_menus=$request->id_menus;
        $sous_menu->publier_sous_menus=$request->publier_sous_menus;
        $sous_menu->save();
        $msg="Enregistrement effectué avec succès !";
        Session::flash('menu_id',$request->id_menus);
        Session::flash('flash_message',$msg);

        return redirect()->back();
    }

    public function edit($id){
        $sous_menus = SousMenu::find($id);
        $menus = Menu::where('visible_menus', '=', '1')->get()->pluck('titre_menus',  'id_menus');

        return view('parametrage.sous_menus.sous_menus_form',compact('sous_menus','menus'));
    }

    public function update(Request $request, $id){
        $sous_menu = SousMenu::find($id);
        $this->validate($request,SousMenu::rules(),SousMenu::messages());
        $sous_menu->titre_sous_menus=$request->titre_sous_menus;
        $sous_menu->libelle_sous_menus=$request->libelle_sous_menus;
        $sous_menu->lien_sous_menus=$request->lien_sous_menus;
        $sous_menu->indice_sous_menus=$request->indice_sous_menus;
        $sous_menu->id_menus=$request->id_menus;
        $sous_menu->publier_sous_menus=$request->publier_sous_menus; 
        $sous_menu->save();
        $msg="Modification effectuée avec succès !!";
        Session::flash('flash_message',$msg);
        return redirect()->back();
    }

    public function visible($id){
        $sous_menu=SousMenu::find($id);
        $sous_menu->visible_sous_menus=0;
        $sous_menu->save();
        return redirect()->route('sous_menus.index');
    }
}
