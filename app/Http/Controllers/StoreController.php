<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Preferiti;


class StoreController extends BaseController {

    public function index() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user))
            return view('login');
        
        return view("store")->with("user", $user->id)->with("username", $user->username);
    }

    public function Book($book){

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,
        "https://www.googleapis.com/books/v1/volumes?q=".$book
        );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        
        return $result;
    }

    public function ispref($id){
        
    
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user)){
            return view('login');
        }
         
        $pref = Preferiti::where('userid', $user['id'])->where('id', $id)->get();

        $preferito = count($pref)>0;
        
        return json_encode(['preferito' => $preferito]);

    }
    

    public function addPref(){

        $request=request();
        $session_id = session('user_id');
        $user = User::find($session_id);
   
        $add = Preferiti::create([
            'userid' => $user->id,
            'id' => $request['id'],
            'img' => $request['img'],
            'titolo' => $request['title'],
            'autore' => $request['author']
        ]);

        if($add !== NULL) {
        $response = array('esito' => true);
        } else {
        $response = array('esito' => false);
        }

        return json_encode($response);

    }
}
?>