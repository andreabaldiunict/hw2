<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController {

    public function index() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user))
            return view('login');
        
        return view("home");
    }

    public function quotable(){

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,
        "https://api.quotable.io/random"
        );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        
        return $result;
    }
}

?>