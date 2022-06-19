<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Traits\Timestamp;


class Preferiti extends Model {

    use HasFactory, Notifiable;
    protected $table = 'preferiti';

    protected $fillable = [
        'userid', 'id', 'img', 'titolo', 'autore' 
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public $timestamps = false;
    public $incrementing = false;
    protected $KeyType = 'string';
}