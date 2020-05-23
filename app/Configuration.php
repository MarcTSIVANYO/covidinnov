<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'configurations';

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
    protected $fillable = ['nom_site', 'telephone', 'cel', 'email', 'adresse_physique', 'logo', 'url'];

    
}
