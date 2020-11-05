<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ContactUSController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUS()
   {
       return view('frontend.');
   }

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUSPost(Request $request)
   {
   	//dd($request->all());
   	if($request->robot==14){
       $this->validate($request, [
        'name' => 'required',
        'objet' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);

       ContactUS::create($request->all());

          $data = [
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'objet' => $request->get('objet'),
           'user_message' => $request->get('message')
          ]; 
            Mail::send('emails.contact', $data, function ($m) use ($data) {
	              $m->from($data['email'], $data['name']);
	              $m->to(env('MAIL_USERNAME'), 'Depuis Nous contacter')->subject($data['objet']);
	          });
          Session::flash('flash_message', 'Votre message nous est bien parvenu! Nous vous remercions!'); 
          return redirect()->back(); 
    	}else{ 
          Session::flash('error_message', 'Résultat de 4+10 est incorrect '); 
          return redirect()->back(); 
    	}
   }
}