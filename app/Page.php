<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pages';

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
    protected $fillable = ['titre', 'libelle', 'fixe', 'fichier', 'position', 'contenu', 'publier', 'section_id'];
}
