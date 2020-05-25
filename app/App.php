<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Session;
use Auth;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Validator;

class App extends Model {

    public static  function validate(Request $request){
        try {
            foreach ($request->except('_token') as $data => $value) {
                $valids[$data] = "required";
        }

        $validator = validator($request->all(), $valids);
        if ($validator->fails()) {
            foreach ($validator->messages()->getMessages() as $key => $val) {
                $response["$key"] = $val;
            }
            return redirect()->back()
                ->withErrors($response)
                ->withInput();
            }
        }catch(\Exception $e){
            die($e->getMessage()) ;
        }

        return $validator;
    } 
}