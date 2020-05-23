<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pays extends Model
{
    
    protected $table='pays';
    protected $primaryKey="id_pays";
    protected $fillable=['titre_pays','id_regions'];
    
    public static function rules()
    {
    	return[
    		'titre_pays'=>'required|between:2,100',
    	];
    }

    public static function messages()
    {
    	return[
    	 	'titre_pays.required'=>'Le titre est obligatoire !',
    	 	'titre_pays.between'=>'Le titre doit etre compris entre 2 et 100 !',
            ];
    }

      public function regions()
    {
        return $this->hasMany('App\region','id_regions');
    }

       public function articles()
    {
        return $this->hasMany('App\article','id_pays');
    }
}
