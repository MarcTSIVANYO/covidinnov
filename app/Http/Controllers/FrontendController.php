<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Innovation; 
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    //
    public function index()
    { 
      /*if (Auth::guest()){
          return view('frontend.home');
      }else{  
          return view('clientarea.dashboard');
        }  */

        $innovations = Innovation::where('publier',1)->paginate(10);
        return view('frontend.home', compact('innovations'));
    }
}
