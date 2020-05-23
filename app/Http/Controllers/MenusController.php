<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Menu;
use Illuminate\Support\Facades\Session;
use DB;

class MenusController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
    }
    
    public function index(){
        $menus = DB::table('menus')->where('visible_menus', '=', '1')->orderBy('indice_menus','asc')->get();
        return view('parametrage.menus.menus_liste',compact('menus'));
    }

    public function create(){
        return view('parametrage.menus.menus_form');
    }

    public function store(Request $request){
        $this->validate($request,Menu::rules(),Menu::messages());
        $menus = new Menu();
        $menus->titre_menus=$request->titre_menus;
        $menus->libelle_menus=$request->libelle_menus;
        $menus->lien_menus=$request->lien_menus;
        $menus->indice_menus=$request->indice_menus;
        $menus->publier_menus = $request->publier_menus;
        $menus->save();
        $msg="Enregistrement effectué avec succès !";
        Session::flash('flash_message',$msg);
        return redirect()->back();
    }

    public function edit($id)
    {
        $menus = Menu::find($id);
        return view('parametrage.menus.menus_form',compact('menus'));
    }

    public function update(Request $request,$id){
        $this->validate($request,Menu::rules(),Menu::messages());
        $menus= Menu::find($id);
        $menus->titre_menus=$request->titre_menus;
        $menus->libelle_menus=$request->libelle_menus;
        $menus->lien_menus=$request->lien_menus;
        $menus->indice_menus=$request->indice_menus;
        $menus->publier_menus = $request->publier_menus;
        $menus->save();
        $msg="Modification effectuée avec succès !";
        Session::flash('flash_message',$msg);
        return redirect()->back();
    }

    public function visible($id){
        $menus=Menu::find($id);
        $menus->visible_menus=0;
        $menus->save();
        return redirect()->route('menus.index');
    }
}
