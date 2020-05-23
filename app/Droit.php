<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Droit extends Model
{

    protected $table='droits';
    protected $primaryKey="id_droits";
    protected $fillable=['visible_droits', 'id_sous_menus', 'id_users'];
}
