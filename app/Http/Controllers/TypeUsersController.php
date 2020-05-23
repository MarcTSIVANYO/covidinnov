<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\TypeUser;
use App\utilisateur;
use App\Droit;
use Illuminate\Support\Facades\Session;
use DB;

class TypeUsersController extends Controller
{
    public function test()
    {
        $redacteur_junior = DB::table('groupe_users')
                    ->where('id_type_users', '=', 1)
                    ->join('users', 'groupe_users.id_users', '=', Auth::id())
                    ->select('users.*')
                    ->get();
        $redacteur_senior = DB::table('groupe_users')
                    ->where('id_type_users', '=', 2)
                    ->join('users', 'groupe_users.id_users', '=', Auth::id())
                    ->select('users.*')
                    ->get();
        if (!is_null($redacteur_senior)) {
            
        } elseif(!is_null($redacteur_junior)) {
            
        }
        $type_user = TypeUser::find($id_type_users);
        return view('parametrage.type_users.users_liste',compact('utilisateurs', 'type_user'));
    }

    public function droits($id)
    {
        $droits = DB::table('droits')->where('id_type_users', '=', $id)->get();
        $menus = DB::table('menus')->where('visible_menus', '=', '1')->get();
        $sous_menus = DB::table('sous_menus')->where('visible_sous_menus', '=', '1')->get();
        $type_user = TypeUser::find($id);
        return view('parametrage.type_users.droits',compact('droits', 'menus', 'sous_menus', 'id', 'type_user'));
    }

    public function listBy($id_type_users)
    {
        $utilisateurs = DB::table('groupe_users')
                    ->where('id_type_users', '=', $id_type_users)
                    ->join('users', 'groupe_users.id_users', '=', 'users.id_users')
                    ->select('users.*')
                    ->get();
        $type_user = TypeUser::find($id_type_users);
        return view('parametrage.type_users.users_liste',compact('utilisateurs', 'type_user'));
    }

    public function droits_post(Request $request){
        $id = $request->id_type_users;
        $droits = Droit::where('id_type_users', '=', $id)->get();
        foreach ($droits as $droit) {
            Droit::destroy($droit->id_droits);
        }
        if ($request->sous_menus != null) {
            foreach ($request->sous_menus as $id_sous_menus) {
                $droit=new Droit();
                $droit->id_type_users = $request->id_type_users;
                $droit->id_menus = null;
                $droit->id_sous_menus = $id_sous_menus;
                $droit->save();
            }
        }
        if ($request->menus != null) {
            foreach ($request->menus as $id_menus) {
                $droit=new Droit();
                $droit->id_type_users = $request->id_type_users;
                $droit->id_menus = $id_menus;
                $droit->id_sous_menus = null;
                $droit->save();
            }  
        } 
        $msg="Enrégistrement effectuée avec succès!";
        Session::flash('flash_message',$msg);
        $droits = DB::table('droits')->where('id_type_users', '=', $id)->get();
        $menus = DB::table('menus')->where('visible_menus', '=', '1')->get();
        $sous_menus = DB::table('sous_menus')->where('visible_sous_menus', '=', '1')->get();
        $type_user = TypeUser::find($id);
        //dd( $type_user);
        return view('parametrage.type_users.droits',compact('droits', 'menus', 'sous_menus', 'id', 'type_user'));
    }

    public function __construct(){
        //$this->middleware('auth');
    }

    public function type_utilisateur($id)
    {
        $utilisateur = utilisateur::where('id_users', $id)->first();
        $type_users = DB::table('type_users')->where('visible_type_users', '=', '1')->get();
        $groupe_users = DB::table('groupe_users')->where('visible_groupe_users', '=', '1')->where('id_users', $id)->get();

        return view('parametrage.type_users.create',compact('type_users', 'utilisateur', 'id', 'groupe_users'));
    }

    public function type_utilisateur_post(Request $request)
    {
        $id = $request->id_users;
        DB::table('groupe_users')->where('visible_groupe_users', '=', '1')->where('id_users', $id)->delete();

        if ($request->type_users != null) {
            foreach ($request->type_users as $id_type_users) {
                DB::table('groupe_users')->insert(
                    [
                        'id_users' => $id, 
                        'id_type_users' => $id_type_users,
                        'publier_groupe_users' => 1,
                        'visible_groupe_users' => 1,
                    ]
                );
            }
        }
        $msg="Enrégistrement effectuée avec succès!";
        Session::flash('flash_message',$msg);

        $utilisateur = utilisateur::where('id_users', $id)->first();
        $type_users = DB::table('type_users')->where('visible_type_users', '=', '1')->get();
        $groupe_users = DB::table('groupe_users')->where('visible_groupe_users', '=', '1')->where('id_users', $id)->get();

        return view('parametrage.type_users.create',compact('type_users', 'utilisateur', 'id', 'groupe_users'));

    }
    public function index(){
        $type_users = DB::table('type_users')->where('visible_type_users', '=', '1')->get();
        return view('parametrage.type_users.type_users_liste',compact('type_users'));
    }

    public function create(){
        return view('parametrage.type_users.type_users_form');
    }

    public function store(Request $request){
        $this->validate($request,TypeUser::rules(),TypeUser::messages());
        $type_users = new TypeUser();
        $type_users->libelle_type_users = $request->libelle_type_users;
        $type_users->save();
        $msg="Type d'utlisateurs Enregistr&eacute; !";
        Session::flash('flash_message',$msg);
        return redirect()->back();

    }

    public function edit($id){
        $type_users = TypeUser::find($id);
        return view('parametrage.type_users.type_users_form',compact('type_users'));
    }

    public function update(Request $request,$id){
        $this->validate($request,TypeUser::rules(),TypeUser::messages());
        $type_users= TypeUser::find($id);
        $type_users->libelle_type_users=$request->libelle_type_users;
        $type_users->save();
        $msg="Type d'utlisateurs modifi&eacute; !";
        Session::flash('flash_message',$msg);
        return redirect()->back();
    }

    public function visible($id){
        $type_users = TypeUser::find($id);
        $type_users->visible_type_users=0;
        $type_users->save();
        return redirect()->route('type_users.index');

    }
}
