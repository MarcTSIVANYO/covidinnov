<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousMenu extends Model
{
    //

    protected $table='sous_menus';
    protected $primaryKey="id_sous_menus";
    protected $fillable=['titre_sous_menus','libelle_sous_menus','lien_sous_menus','indice_sous_menus','publier_sous_menus','visible_sous_menus'];

    public static function rules()
    {
        # code...
        return[
        'titre_sous_menus'=>'required|between:3,100',
        'libelle_sous_menus'=>'required|between:3,100',
        'lien_sous_menus'=>'required|between:3,100',
        'indice_sous_menus'=>'required|max:2',
        'publier_sous_menus'=>'max:1',
        'visible_sous_menus'=>'max:1',
        ];
    }

    public static function messages(){
        return[
        'titre_sous_menus.required'=>'Le titre est obligatoire !',
        'titre_sous_menus.between'=>'Le titre doit être compris entre 3 et 100 caractères',
        'libelle_sous_menus.required'=>'Le libelle est obligatoire !',
        'libelle_sous_menus.between'=>'Le libelle doit être compris entre 3 et 100 caractères',
        'lien_sous_menus.required'=>'Le lien est obligatoire !',
        'lien_sous_menus.between'=>'Le lien doit être compris entre 3 et 100 caractères',
        'indice_sous_menus.required'=>'L\'indice est obligatoire !',
        'indice_sous_menus.max'=>'L\'indice doit être inférieur ou egal 99',
        'publier_sous_menus.max'=>'Le champ publier ne peut contenir q\'un seul caractère !',
        'visible_sous_menus'=>'Le champ visible ne peut contenir q\'un seul caractère !',
            
            ];
        }

    public function menu()
    {
        return $this->belongsTo('App\menu','id_menus');
    }

    public function droits()
    {
        return $this->hasMany('App\Droit');
    }
}
