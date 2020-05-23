<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    //
     protected $table = 'cv';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [ 'nom', 'prenoms','pseudo','email','views', 'adresse', 'photo', 'banner', 'lien_drive', 'experience', 'skills', 'publier', 'facebook', 'linkedin', 'twitter', 'instagram', 'user_id', 'recherche_id', 'about', 'titre' ,'localisation'];
 
}
