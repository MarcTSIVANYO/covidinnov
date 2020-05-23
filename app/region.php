<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class region extends Model
{
    //

    protected $table='regions';
    protected $primaryKey="id_regions";
    protected $fillable=['titre_regions'];
    
    public static function rules()
    {
    	return[
    		'titre_regions'=>'required|between:2,100',
    		
    	];
    }

    public static function messages()
    {
    	return[
    	 	'titre_regions.required'=>'Le titre est obligatoire !',
    	 	'titre_regions.between'=>'Le titre doit etre compris entre 2 et 100 !',
            ];
    }

      public function pays()
    {
        return $this->belongsTo('App\pays');
    }
}
