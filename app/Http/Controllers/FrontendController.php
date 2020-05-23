<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

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

        return view('frontend.home');
    }
}
