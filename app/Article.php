<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

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
    protected $fillable = ['titre', 'libelle', 'fichier', 'position', 'contenu', 'publier', 'categorie_id'];
}