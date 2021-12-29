<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NIK',
        'room_name',
        'schedule',
        'checkin',
        'checkout',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

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
        return $this->belongsTo(Schedule::class, 'schedule', 'id');
        
    }
}