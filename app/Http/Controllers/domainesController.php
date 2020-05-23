<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\domaine;
use Illuminate\Support\Facades\Session;
use DB;

class domainesController extends Controller
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
    
    public function index()
    {
        $domaines = DB::table('domaines')->where('visible_domaines', '=', '1')->get();
        return view('parametrage.domaines.domaines_liste',compact('domaines'));
    }

    public function create()
    {
        # code...
        return view('parametrage.domaines.domaines_form');

    }

    public function store(Request $request)
    {
        # code...
        $this->validate($request,domaine::rules(),domaine::messages());
        $domaines=new domaine();
        $domaines->titre_domaines=ucfirst(strtolower($request->titre_domaines));
        $domaines->description_domaines=ucfirst($request->description_domaines);
        $domaines->publier_domaines=1;
        $domaines->save();
        $msg="Domaine Enregistr&eacute; !";
        Session::flash('flash_message',$msg);
        return redirect()->back();

    }

    public function edit($id)
    {
        $domaines=domaine::find($id);
        return view('parametrage.domaines.domaines_form',compact('domaines'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,domaine::rules(),domaine::messages());
        $domaines= domaine::find($id);
        $domaines->titre_domaines=ucfirst(strtolower($request->titre_domaines));
        $domaines->description_domaines=ucfirst($request->description_domaines);
        // $domaines->publier_domaines=$request->publier_domaines;
        $domaines->save();
        $msg="Domaine modifi&eacute; !";
        Session::flash('flash_message',$msg);
        return redirect()->back();
    }

    public function show($id)
    {
        $domaines=domaine::find($id);
        return view('parametrage.domaines.domaines_show',compact('domaines'));

    }

    public function enable($id)
    {
        $domaines=domaine::find($id);
        $domaines->publier_domaines=1;
        $domaines->save();
        return redirect()->route('domaines.index');

    }

    public function desable($id)
    {
        $domaines=domaine::find($id);
        $domaines->publier_domaines=0;
        $domaines->save();
        return redirect()->route('domaines.index');

    }

    public function visible($id)
    {
        $domaines=domaine::find($id);
        $domaines->visible_domaines=0;
        $domaines->save();
        return redirect()->route('domaines.index');

    }
}
