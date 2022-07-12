<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller as BaseController;

class RegisterController extends BaseController {

    public function register(){

        $request = request()->all();

        if ($this->countErrors($request) === 0) {
            $newUser = User::create([
                'username' => $request['username'],
                'nome' => $request['nome'],
                'cognome' => $request['cognome'],
                'email' => $request['email'],
                'password' => $request['password']
            ]);
            
            if($newUser){
                Session::put('user_id', $newUser->id);
                return redirect('/home');
            } }
            else{
                return redirect('/signup')->withInput();
            }
        
    }

    public function showSignup(){
        return view('register');
    }

    private function countErrors($data) {
        $error = array();
    
        # INSERIMENTO USERNAME
        if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $data['username'])) {
            $error[] = "Username non valido";
        } else {
            $username = User::where('username', $data['username'])->first();
            if ($username !== null) {
                $error[] = "Username già utilizzato";
            }
        }

        # INSERIMENTO PASSWORD
        if (strlen($data["password"]) < 8) {
            $error[] = "Caratteri password insufficienti";
        } 

        # INSERIMENTO CONFERMA PASSWORD
        if (strcmp($data["password"], $data["conferma_password"]) != 0) {
            $error[] = "Le password non coincidono";
        }
        # EMAIL
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Email non valida";
        } else {
            $email = User::where('email', $data['email'])->first();
            if ($email !== null) {
                $error[] = "Email già utilizzata";
            }
        }

        return count($error);
    }


    public function controllaUsername($username) {
        $exist = User::where('username', $username)->exists();
        return ['exists' => $exist];
    }

    public function controllaEmail($email) {
        $exist = User::where('email', $email)->exists();
        return ['exists' => $exist];
    }
}
?>