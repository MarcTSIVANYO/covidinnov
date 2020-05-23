<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Menu;
use App\Droit;
use App\SousMenu;
use App\TypeUser;
use Illuminate\Support\Facades\Session;
use DB;

class DroitsController extends Controller
{

    public function index(){
        $id = 1;
        $droits = DB::table('droits')->where('id_users', '=', $id)->get();
        $menus = DB::table('menus')->where('visible_menus', '=', '1')->get();
        $sous_menus = DB::table('sous_menus')->where('visible_sous_menus', '=', '1')->get();
        $type_users = TypeUser::where('visible_type_users', '=', '1')->get()->lists('libelle_type_users',  'id_type_users');
        return view('parametrage.test',compact('droits', 'menus', 'sous_menus', 'type_users', 'id'));;
    }

    public function create(){
        $menus = Menu::where('visible_menus', '=', '1')->get()->lists('titre_menus',  'id_menus');
        $sous_menus = SousMenu::where('visible_sous_menus', '=', '1')->get()->lists('titre_sous_menus',  'id_sous_menus');
        $type_users = TypeUser::where('visible_type_users', '=', '1')->get()->lists('libelle_type_users',  'id_type_users');
        return view('parametrage.droits_form', compact('menus', 'sous_menus', 'type_users'));
    }

    public function destroy($id)
    {
        $droits = Droit::where('id_users', '=', $id)->get();
        foreach ($droits as $droit) {
            Droit::destroy($droit->id_droits);
        }
    }

    public function store(Request $request){
        $id = $request->id_users;
        $this->destroy($id);
        foreach ($request->sous_menus as $id_sous_menus) {
            $droit=new Droit();
            $droit->id_users = $request->id_users;
            $droit->id_sous_menus = $id_sous_menus;
            $droit->save();
        }
        $msg="Enrégistrement effectuée avec succès!";
        Session::flash('flash_message',$msg);
        $droits = DB::table('droits')->where('id_users', '=', $id)->get();
        $menus = DB::table('menus')->where('visible_menus', '=', '1')->get();
        $sous_menus = DB::table('sous_menus')->where('visible_sous_menus', '=', '1')->get();
        return view('parametrage.droits.droits_users_liste_post',compact('droits', 'menus', 'sous_menus', 'type_users', 'id'));
    }

    public function edit($id){
        $droit = Droit::find($id);
        $menus = Menu::lists('titre_menus',  'id_menus');
        $sous_menus = DB::table('sous_menus')->where('visible_sous_menus', '=', '1')->get();
        $type_users = TypeUser::where('visible_type_users', '=', '1')->get()->lists('libelle_type_users',  'id_type_users');
        return view('parametrage.droits_form',compact('droit','menus', 'sous_menus', 'type_users'));
    }

    public function update(Request $request, $id){
        $droit = Droit::find($id);
        $droit->id_menus=$request->id_menus;
        $droit->id_sous_menus=$request->id_sous_menus;
        $droit->id_type_users=$request->id_type_users;
        $droit->save();
        $msg="Droit modifié !";
        Session::flash('flash_message',$msg);
        return redirect()->back();
    }

    public function visible($id){
        $droit = Droit::find($id);
        $droit->visible_droits=0;
        $droit->save();
        return redirect()->route('droits.index');
    }








































    /*public function __construct(){
        //$this->middleware('auth');
    }

    public function index(){
        $droits = DB::table('droits')->where('visible_droits', '=', '1')->get();
        $menus = Menu::all();
        $sous_menus = SousMenu::all();
        $type_users = TypeUser::all();
        return view('parametrage.droits_liste',compact('droits','menus', 'sous_menus', 'type_users'));
    }

    public function create(){
        $menus = Menu::lists('titre_menus',  'id_menus');
        $sous_menus = SousMenu::lists('titre_sous_menus',  'id_sous_menus');
        $type_users = TypeUser::lists('libelle_type_users',  'id_type_users');
        return view('parametrage.droits_form', compact('menus', 'sous_menus', 'type_users'));
    }

    public function store(Request $request){
        $droit = new Droit();
        $droit->id_menus=$request->id_menus;
        $droit->id_sous_menus=$request->id_sous_menus;
        $droit->id_type_users=$request->id_type_users;
        $droit->save();
        $msg="Droit Enregistr&eacute; !";
        Session::flash('flash_message',$msg);
        return redirect()->back();
    }

    public function edit($id){
        $droit = Droit::find($id);
        $menus = Menu::lists('titre_menus',  'id_menus');
        $sous_menus = SousMenu::lists('titre_sous_menus',  'id_sous_menus');
        $type_users = TypeUser::lists('libelle_type_users',  'id_type_users');
        return view('parametrage.droits_form',compact('droit','menus', 'sous_menus', 'type_users'));
    }

    public function update(Request $request, $id){
        $droit = Droit::find($id);
        $droit->id_menus=$request->id_menus;
        $droit->id_sous_menus=$request->id_sous_menus;
        $droit->id_type_users=$request->id_type_users;
        $droit->save();
        $msg="Droit modifié !";
        Session::flash('flash_message',$msg);
        return redirect()->back();
    }

    public function visible($id){
        $droit = Droit::find($id);
        $droit->visible_droits=0;
        $droit->save();
        return redirect()->route('droits.index');
    }*/
}
