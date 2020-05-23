<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    protected $table='type_users';
    protected $primaryKey="id_type_users";
    protected $fillable=['libelle_type_users', 'publier_type_users', 'visible_type_users'];
    
    public static function rules()
    {
    	return[
    		'libelle_type_users'=>'required|between:3,100',
            'publier_type_users'=>'max:1',
    		'visible_type_users'=>'max:1',
    	];
    }

    public static function messages()
    {
    	return[
            'libelle_type_users.required'=>'Le libelle est obligatoire !',
    	 	'libelle_type_users.between'=>'Le nom  doit être compris entre 3 et 100 caractères !',
            'visible_type_users'=>'Le champ visible ne peut contenir q\'un seul caractère !',
    		'visible_type_users'=>'Le champ visible ne peut contenir q\'un seul caractère !',
            ];
    }

    public function droits()
    {
        return $this->hasMany('App\Droit');
    }
}
