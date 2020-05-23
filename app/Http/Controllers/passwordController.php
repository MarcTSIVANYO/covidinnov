<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Mouchard;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Membre;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Hash;

use Auth;

use DB;

use Mail;


class passwordController extends Controller
{

  public function index()
  {
    # code...
    return view('auth/passwords/email');
  }




    // Function pour modifier le mot de passe utilisateur.
    public function password_edit($id)
    {
        # code...
        $utilisateurs=user::find($id);
        // dd($utilisateurs);
        return view('auth/passwords/password_edit',compact('utilisateurs'));
    } 

    public function password_update(request $request)
    {
 
         if ($request->password_confirmation==$request->password) {

          $user=User::where('email',$request->email)->first(); 
          $user->password=Hash::make($request->password);
          $user->save();
          $msg="Mot de passe modifié avec succès!";
          Session::flash('flash_message',$msg);
          return redirect('login');
        }else{
          $msg="Mot de passe erron&eacute; !";
          Session::flash('flash_message',$msg);
          return redirect()->back();
       }
   }
   // fonction de verification de confirmation d'email

       public function confirme_email(request $request)
    {
      $email=new user();
      $email->email=$request->email;
      $utilisateurs=DB::table('users')->where('email','=',$request->email)->first();
          if ($utilisateurs==null) {
               $msg="Email erron&eacute; !";
               Session::flash('flash_message',$msg);
               return redirect()->back();
          }elseif ($utilisateurs->id_users != null && $utilisateurs->id_users > 0) {
              # code...
                $msg="Email confirm&eacute; avec succes !";
               Session::flash('flash_message',$msg);
             // return view('auth/passwords/password_edit',compact('utilisateurs'));
              // return redirect()->route('password_edit',[1]);
              return redirect()->action('passwordController@password_edit',$utilisateurs->id_users);
            
         }

    }

}
