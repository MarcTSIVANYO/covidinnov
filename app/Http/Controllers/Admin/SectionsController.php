<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Section;
use Illuminate\Http\Request;
use Session;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $sections = Section::paginate(10);

        return view('admin.sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.sections.create');
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
			'titre' => 'required',
			'fixe_section' => 'required',
			'publier' => 'required'
		]);
        $requestData = $request->all();
        
        Section::create($requestData);

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
        $section = Section::findOrFail($id);

        return view('admin.sections.show', compact('section'));
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
        $section = Section::findOrFail($id);

        return view('admin.sections.edit', compact('section'));
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
        $this->validate($request, [
			'titre' => 'required',
			'fixe_section' => 'required',
			'publier' => 'required'
		]);
        $requestData = $request->all();
        
        $section = Section::findOrFail($id);
        $section->update($requestData);

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
        Section::destroy($id);

        Session::flash('flash_message', 'Suppression effectuée avec succès!');

        return redirect()->back();
    }
}
