<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // get session data
    public function getSessionData(Request $request){
        if($request->session()->has('name')){
            echo $request->session()->get('name');
        }else{
            echo "No data in the session";
        }
    }

    // store session
    public function storeSessionData(Request $request){
        $request->session()->put('name','Pritam');
        echo "Data has been added to the session";
    }

    // delete session
    public function deleteSessionData(Request $request){
        $request->session()->forget('name');
        echo "Data has been removed from session";
    }
}
