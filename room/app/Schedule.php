<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Schedule extends Model
{
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'class_name',
        'room_name',
        'start',
        'finish',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_name', 'id');
        
    }

    public function classes()
    {
        return $this->belongsTo(Classes::class, 'class_name', 'id');
        
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   // protected $hidden = [

    //];

    //public function user()
    //{
    //    return $this->belongsTo(User::class, 'users_id', 'id');
    }
//}
