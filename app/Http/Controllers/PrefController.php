<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Preferiti;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller as BaseController;

class PrefController extends BaseController {

    public function index() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user))
            return view('login');
        
        return view("preferiti");
    }

    public function pref(){
     
        $session_id = session('user_id');
        $user = User::find($session_id);
        

         if(isset($user)) {
   
            $query = Preferiti::where('userid', $user->id)->get();

         } 
            return $query;    
    }

    public function remove_pref(){

        $request = request();
        $session_id = session('user_id');
        $user = User::find($session_id);

        $query = Preferiti::where('userid', $user->id)->where('id', $request['id']);
        $query->delete();

        if($query) {
            $response = array('esito' => true);
        } else {
            $response = array('esito' => false);
        }

        return json_encode($response);
    }

}

?>