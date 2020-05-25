<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Session;
use Auth;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Validator;

class Donateur extends Model
{
    //


    protected $table = 'donateurs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $guarded=[];

 
}
