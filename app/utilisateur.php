<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    protected $table='users';
    protected $primaryKey="id_users";
    protected $fillable=['nom_users','prenoms_users','sexe_users','date_users','email','adresse_users','contact_users','logo_users','ville_users','login_users','password','publier_users','visible_users'];
    
    public static function rules()
    {
        return[
            'nom_users'=>'required|between:3,100',
            'prenoms_users'=>'required|between:3,100',
            'email'=>'required|between:6,60',
            'sexe_users'=>'required|max:1',
            'date_users'=>'between:8,10',
            'adresse_users'=>'between:2,200',
            'contact_users'=>'required|between:8,15',
            // 'logo_users'=>'between:,100',
            'ville_users'=>'between:3,100',
            'login_users'=>'required|between:3,100',
            'password'=>'required|between:3,100',
            'publier_users'=>'max:1',
            'visible_users'=>'max:1',
        ];
    }

    public static function messages()
    {
        return[
            'nom_users.required'=>'Le nom est obligatoire !',
            'nom_users.between'=>'Le nom  doit etre compris entre 3 et 100 caracteres !',
            'prenoms_users.required'=>'Le prenom est requis !',
            'email.required'=>'L\'email est requis !',
            'prenoms_users.between'=>'Le prenom doit etre compris entre 3 et 100 caracteres ! ',
            'sexe_users.required'=>'Le sexe est obligatoire!',
            'sexe_users.max'=>'Le sexe ne doit pas depasser 1 caracteres !',
            'date_users.between'=>'la date doit etre compris entre 8 et 10 caracteres !',
            'adresse_users.between'=>'L\'adresse doit etre compris entre 2 et 200 caracteres !',
            'contact_users.required'=>'Le contact est obligatoire !',
            'contact_users.between'=>'Le contact doit etre compris entre 5 et 15 caracteres !',
            // 'logo_users'=>'between:,100',
            'ville_users.between'=>'La ville doit etre comprise entre 3 et 100 caracteres !',
            'login_users.required'=>'Le login est obligatoire !',
            'login_users.between'=>'La login doit etre comprise entre 3 et 100 caracteres !',
            'password.required'=>'Le mot de passe  est obligatoire !',
            'password.between'=>'La login doit etre comprise entre 3 et 100 caracteres !',
            'publier_users.max'=>'Le champ publier ne peut contenir q\'un seul caractere !',
            'visible_users'=>'Le champ visible ne peut contenir q\'un seul caractere !',
            ];
    }
}
