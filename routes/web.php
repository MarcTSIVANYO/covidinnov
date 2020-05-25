<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/ 
use App\User;
use App\CV;
Auth::routes();
  
  // FRONTEND
Route::resource('/', 'FrontendController'); 
Route::get('activate/{token}', 'RegistrationController@activateUser')
    ->name('activate.user');
 //Route::get('login', function () {return view('frontend.login');}); 
 Route::get('/contact', function () {return view('frontend.contact');});
 Route::get('/apropos', function () {return view('frontend.apropos');});
 Route::get('/welcome', function () {return view('frontend.welcome');});

Route::resource('inscrire', 'RegistrationController');
// utilisateur
Route::get('password/email', 'passwordController@index')->name('password.email');
Route::get('password/reset', 'passwordController@password_update')->name('password.update');

 //BACKEND AFTER LOGIN
Route::get('home', 'HomeController@index')->name('home');
Route::resource('dashboard', 'HomeController');
//APP FONCTIONNALITY
Route::resource('donateurs', 'DonateurController');
Route::resource('acteurs', 'ActeurController');
Route::resource('citoyens', 'CitoyenController');
Route::resource('enfants', 'EnfantController');
Route::get('citoyen/{id}','EnfantController@indexByCitoyen');


Route::group([
    'prefix' => 'account', 
    'middleware' => 'user'
    ], function ()
    {
     Route::get('/',function () {  
     	$user=User::where('id_users',Auth::user()->id_users)->first();
	    return view('account.account',compact('user'));
	}); 
 
    Route::post('compte','HomeController@editerCompte');

     Route::get('password',function () { 
	    return view('account.password');
	});

	Route::post('password/reset','HomeController@password');
      
    });
 

/*********PARTIE D'ADMIISTRATION DU SITE WEB*******/

Route::group([
	'prefix' => 'admin', 
	'middleware' => 'admin'
	], function ()
	{ 

 	//Route::get('/login', function () {return view('auth.login');}); 
		Route::get('enable_cv/{id}','CVController@enable');
		Route::get('desable_cv/{id}','CVController@desable');

		Route::resource('configurations', 'Admin\\ConfigurationsController');
		Route::resource('sections', 'Admin\\SectionsController');
		Route::resource('pages', 'Admin\\PagesController');
		Route::resource('categories', 'Admin\\CategoriesController');
		Route::get('page/{libelle}', 'Admin\\CategoriesController@listByLibelle');
		Route::get('categories/list_by/{id}', 'Admin\\CategoriesController@listBy');
		Route::resource('articles', 'Admin\\ArticlesController');
		Route::get('articles/list_by/{id}', 'Admin\\ArticlesController@listBy');
		Route::resource('albums', 'Admin\\AlbumsController');		
		Route::get('albums/list_by/{id}', 'Admin\\AlbumsController@listBy');
		Route::resource('photos', 'Admin\\PhotosController');		
		Route::get('photos/list_by/{id}', 'Admin\\PhotosController@listBy');
	}); 


Route::resource('utilisateurs','utilisateursController');
Route::get('enable_users/{id}','utilisateursController@enable_users');
Route::get('edit_profile/{id}','utilisateursController@edit_profile');
Route::get('desable_users/{id}','utilisateursController@desable_users');
Route::get('visible_users/{id}','utilisateursController@visible_users');
Route::get('logout', 'Auth\LoginController@logout');

// region
Route::resource('regions','regionsController');
Route::get('visibleRegions/{id}','regionsController@visible');
// pays
Route::resource('pays','paysController');
Route::get('visiblePays/{id}','paysController@visible');
// editer un mot de passe
Route::get('password_edit/{id}','passwordController@password_edit');
Route::put('password_update/{id}','passwordController@password_update');
Route::get('password_reset', 'passwordController@index');
Route::post('confirme','passwordController@confirme_email');
Route::get('password_replace/{id}','passwordController@password_edit'); 

/**		TYPE_USERS	**/
Route::resource('type_users','TypeUsersController');
Route::get('type_users/visible/{id}','TypeUsersController@visible');
Route::get('attribuer_type_users/{id}','TypeUsersController@type_utilisateur');
Route::post('attribuer_type_users_post','TypeUsersController@type_utilisateur_post');
Route::get('droits_type_users/{id}','TypeUsersController@droits');
Route::post('droits_type_users_post','TypeUsersController@droits_post');
Route::get('type_users/list_by/{id}','TypeUsersController@listBy');

/**		MENUS	**/
Route::resource('menus','MenusController');
Route::get('menus/visible/{id}','MenusController@visible');

/**		SOUS_MENUS	**/
Route::resource('sous_menus','SousMenusController');
Route::get('sous_menus/visible/{id}','SousMenusController@visible');
Route::get('sous_menus/list_by/{id}','SousMenusController@listBy');

/**		Droits	**/
Route::resource('droits','DroitsController');
Route::get('droits_users/{id}','utilisateursController@droits');
  
Route::any('/{page?}',function(){
  return View::make('errors.404');
})->where('page','.*');

 