<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Classes;
use App\Schedule;
use App\Loan;
use App\Transaction;

use Carbon\Carbon;

class cekcontroller extends Controller
{
    public function check($id, $room_id)
    {
        $user_cek = User::where('RFID', $id)->get();
        // dd($user_cek);

        foreach ($user_cek as $user) {
            if($user_cek){
                $class_cek = Classes::where('id', $user->class_name)->get();
                foreach ($class_cek as $class) {
                    $schedule_cek = Schedule::where('class_name', $class->id)
                    ->where('room_name', $room_id)->get();
                    return true;
                }

            }
        }

        // if($user_cek){
        //     $class_cek = Classes::where('class_name', $user_cek->class_name)->first();
        //     if($class_cek){
        //         $schedule_cek = Schedule::where('class_name', $class_cek->class_name)
        //         ->where('room_name', $room_id)
        //         ->where('start','<',Carbon::now())
        //         ->where('finish','>',Carbon::now())->get();
        //         if ($schedule_cek){

        //             return true;
        //         }
        //         $loans_cek = Loan::where('NIK', $user_cek->NIK)
        //         ->where('room_name', $room_id)
        //         ->where('start',Carbon::now(), 'finish')
        //         ->where('status','=','diterima')->get();
        //         if ($loans_cek){

        //             return true;
        //         }
        //         return true;
        //     }
        //     return true;
        // }
        // else {
        //     return false;
        // }
    
    }

}
