<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Configuration;
use Illuminate\Http\Request;
use Session;

class ConfigurationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (Configuration::first()) {

            $configuration = Configuration::first();
            return view('admin.configurations.edit', compact('configuration'));
        } else {
            return view('admin.configurations.create');
        }

        $configurations = Configuration::paginate(10);

        return view('admin.configurations.index', compact('configurations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.configurations.create');
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
        $this->validate($request, [
			'nom_site' => 'required',
            'telephone' => 'required',
			'cel' => 'required',
			'email' => 'required',
			'adresse_physique' => 'required',
			'url' => 'required',
		]);
        $file = $request->file('logo');
        if($file)
        { 
            $extension = $file->getClientOriginalExtension();
                $nom = time(). '.' . $extension;
            $file->move('fichiers',$nom);
            $utilisateurs->logo_users="fichiers/".$nom;
        } 
        $requestData = $request->all();
        
        Configuration::create($requestData);

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
        $configuration = Configuration::findOrFail($id);

        return view('admin.configurations.show', compact('configuration'));
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
        $configuration = Configuration::findOrFail($id);

        return view('admin.configurations.edit', compact('configuration'));
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
        /*$this->validate($request, [
			'nom_site' => 'required',
			'telephone' => 'required',
            'cel' => 'required',
			'email' => 'required',
			'adresse_physique' => 'required',
			'url' => 'required',
		]);
        $requestData = $request->all();
        
        $configuration = Configuration::findOrFail($id);
        $configuration->update($requestData);*/

        $configuration=Configuration::find($id);
        $configuration->nom_site=$request->nom_site;
        $configuration->telephone=$request->telephone;
        $configuration->cel=$request->cel; 
        $configuration->adresse_physique=$request->adresse_physique;
        $configuration->url=$request->url; 
        $file_logo = $request->file('logo'); 
        if($file_logo)
        { 
            $extension = $file_logo->getClientOriginalExtension();
            $nom = 'logo-'.time(). '.' . $extension;
            $file_logo->move('fichiers',$nom);
            $configuration->logo="fichiers/".$nom;
        } 

        $file_favicon = $request->file('favicon'); 
        if($file_favicon)
        { 
            $extension = $file_favicon->getClientOriginalExtension();
            $nom = 'favicon-'.time(). '.' . $extension;
            $file_favicon->move('fichiers',$nom);
            $configuration->favicon="fichiers/".$nom;
        } 

        $configuration->save();

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
        Configuration::destroy($id);

        Session::flash('flash_message', 'Suppression effectuée avec succès!');

        return redirect()->back();
    }
}
