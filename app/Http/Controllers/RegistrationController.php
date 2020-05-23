<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session; 
use App\Notifications\UserRegisteredSuccessfully;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail; 
 
class RegistrationController extends Controller
{

  use RegistersUsers;

  protected $rulesUser = array(
    'name' => 'required',
    'email' => 'required|email|unique:users,email',
    'password' => 'required|string|min:6|confirmed'
  );
  protected $messagesUser = array( 
    'email.unique'=>"Ce email existe déjà !",
    'name.required'=>'Le nom est obligatoire !',
    'password.required'=>'Le mot de passe  est obligatoire !',
    'password.between'=>'La mot de passe  doit etre comprise entre 6 et 64 caractères !',
    'password.confirmed'=>'Les mots de passes ne sont pas identiques. !'
  );

   public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('frontend.inscrire');
    }
    
    public function store(Request $request)
    {
        //$this->validate(request(), $this->rulesUser, $this->messagesUser);
         $v=Validator::make($request->all(), $this->rulesUser, $this->messagesUser); 
          if($v->passes()){
        //if($v){
          $token=str_random(30).time();
          $user = User::create([
            'nom_users' => $request['name'], 
            'email' => $request['email'], 
            'password' => Hash::make($request['password']),
            'token'=>$token
          ]); 
          //auth()->login($user);

          //$user->notify(new UserRegisteredSuccessfully($user));
 
          $data = [
          'user_email' => $request['email'],
          'token' => $token,
          'user_name' => $request['name']
          ];  
          Mail::send('emails.auth.verify_email', $data, function ($m) use ($data) {
              $m->from(env('MAIL_USERNAME'), env('MAIL_NAME'));
              $m->to($data['user_email'], $data['user_name'])->subject('Confirmation de votre adresse e-mail');
          });

          return redirect()->to('/welcome');
        }else{
          $msg="Ce compte existe déjà! Merci de se connecter";
          Session::flash('flash_message',$msg);
          return redirect()->back();
        }
    }

    public function activateUser(string $token)
    {
        try {
            $user = app(User::class)->where('token', $token)->first();
            if (!$user) {
                return "Le code n'existe pour aucun utilisateur de notre système.";
            }
            $user->status          = 1;
            $user->token = null;
            $user->save();
            auth()->login($user);
        } catch (\Exception $exception) {
            logger()->error($exception);

            return "Whoops! something went wrong.";
        }

        return redirect()->to('/home');
    }
}