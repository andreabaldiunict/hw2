<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;

class ConsigliatiController extends BaseController {

    public function index() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user))
            return view('login');
        
        return view("consigliati");
    }
}
?>