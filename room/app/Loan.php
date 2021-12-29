<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Loan extends Model
{
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NIK',
        'room_name',
        'start',
        'finish',
        'status',
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class, 'NIK', 'id');
        
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_name', 'id');
        
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'room_name', 'id');
        
    }

}
//}
