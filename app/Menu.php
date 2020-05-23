<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //

    protected $table='menus';
    protected $primaryKey="id_menus";
    protected $fillable=['titre_menus','libelle_menus','lien_menus','indice_menus','publier_menus','visible_menus'];

    public static function rules()
    {
        # code...
        return[
        'titre_menus'=>'required|between:3,100',
        'libelle_menus'=>'required|between:3,100',
        'lien_menus'=>'required|between:3,100',
        'indice_menus'=>'required|max:2',
        'publier_menus'=>'max:1',
        'visible_menus'=>'max:1',
        ];
    }

    public static function messages(){
        return[
        'titre_menus.required'=>'Le titre est obligatoire !',
        'titre_menus.between'=>'Le titre doit être compris entre 3 et 100 caractères',
        'libelle_menus.required'=>'Le libelle est obligatoire !',
        'libelle_menus.between'=>'Le libelle doit être compris entre 3 et 100 caractères',
        'lien_menus.required'=>'Le lien est obligatoire !',
        'lien_menus.between'=>'Le lien doit être compris entre 3 et 100 caractères',
        'indice_menus.required'=>'L\'indice est obligatoire !',
        'indice_menus.max'=>'L\'indice doit être inférieur ou egal 99',
        'publier_menus.max'=>'Le champ publier ne peut contenir q\'un seul caractère !',
        'visible_menus'=>'Le champ visible ne peut contenir q\'un seul caractère !',
            
            ];
        }
    public function sous_menus()
    {
        return $this->hasMany('App\SousMenu');
    }

    public function droits()
    {
        return $this->hasMany('App\Droit');
    }
}
