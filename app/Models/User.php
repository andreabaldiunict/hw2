<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Traits\Timestamp;

class User extends Model {

    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'username', 'nome', 'cognome', 'email', 'password' 
    ];

    public function preferiti(){
        return $this->belongsToMany('App\Models\Preferiti');
    }

    public $timestamps = false;
}


