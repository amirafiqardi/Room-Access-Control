<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Guest extends Model
{
    
    
    protected $fillable = [
    'NIK', 'name', 'position', 'RFID','username', 'password',
    ];

    

}
