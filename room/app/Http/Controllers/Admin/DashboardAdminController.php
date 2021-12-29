<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transaction;
use App\Loan;
use App\Schedule;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $transaction = Transaction::whereNull('checkout')->count();
        $loan = Loan::where('room_name','=','7')->where('status', '=', 'Diterima')->count();
        $schedule = Schedule::where('room_name','=','7')->count();
        $new = $loan + $schedule;
        $checkin = Transaction::where('room_name','=','7')->whereNull('checkout')->count();

        $loan2 = Loan::where('room_name','=','8')->where('status', '=', 'Diterima')->count();
        $schedule2 = Schedule::where('room_name','=','8')->count();
        $new2 = $loan2 + $schedule2;
        $checkin2 = Transaction::where('room_name','=','8')->whereNull('checkout')->count();

        $loan3 = Loan::where('room_name','=','9')->where('status', '=', 'Diterima')->count();
        $schedule3 = Schedule::where('room_name','=','9')->count();
        $new3 = $loan3 + $schedule3;
        $checkin3 = Transaction::where('room_name','=','9')->whereNull('checkout')->count();

        $loan4 = Loan::where('room_name','=','10')->where('status', '=', 'Diterima')->count();
        $schedule4 = Schedule::where('room_name','=','10')->count();
        $new4 = $loan4 + $schedule4;
        $checkin4 = Transaction::where('room_name','=','10')->whereNull('checkout')->count();

        $loan5 = Loan::where('room_name','=','11')->where('status', '=', 'Diterima')->count();
        $schedule5 = Schedule::where('room_name','=','11')->count();
        $new5 = $loan5 + $schedule5;
        $checkin5 = Transaction::where('room_name','=','11')->whereNull('checkout')->count();

        $loan6 = Loan::where('room_name','=','12')->where('status', '=', 'Diterima')->count();
        $schedule6 = Schedule::where('room_name','=','12')->count();
        $new6 = $loan6 + $schedule6;
        $checkin6 = Transaction::where('room_name','=','12')->whereNull('checkout')->count();

        $loan7 = Loan::where('room_name','=','13')->where('status', '=', 'Diterima')->count();
        $schedule7 = Schedule::where('room_name','=','13')->count();
        $new7 = $loan7 + $schedule7;
        $checkin7 = Transaction::where('room_name','=','13')->whereNull('checkout')->count();

        $loan8 = Loan::where('room_name','=','14')->where('status', '=', 'Diterima')->count();
        $schedule8 = Schedule::where('room_name','=','14')->count();
        $new8 = $loan8 + $schedule8;
        $checkin8 = Transaction::where('room_name','=','14')->whereNull('checkout')->count();

        $loan9 = Loan::where('room_name','=','15')->where('status', '=', 'Diterima')->count();
        $schedule9 = Schedule::where('room_name','=','15')->count();
        $new9 = $loan9 + $schedule9;
        $checkin9 = Transaction::where('room_name','=','15')->whereNull('checkout')->count();

        $loan10 = Loan::where('room_name','=','16')->where('status', '=', 'Diterima')->count();
        $schedule10 = Schedule::where('room_name','=','16')->count();
        $new10 = $loan10 + $schedule10;
        $checkin10 = Transaction::where('room_name','=','16')->whereNull('checkout')->count();

        $loan11 = Loan::where('room_name','=','17')->where('status', '=', 'Diterima')->count();
        $schedule11 = Schedule::where('room_name','=','17')->count();
        $new11 = $loan11 + $schedule11;
        $checkin11 = Transaction::where('room_name','=','17')->whereNull('checkout')->count();

        $loan12 = Loan::where('room_name','=','18')->where('status', '=', 'Diterima')->count();
        $schedule12 = Schedule::where('room_name','=','18')->count();
        $new12 = $loan12 + $schedule12;
        $checkin12 = Transaction::where('room_name','=','18')->whereNull('checkout')->count();

        $loan13 = Loan::where('room_name','=','19')->where('status', '=', 'Diterima')->count();
        $schedule13 = Schedule::where('room_name','=','19')->count();
        $new13 = $loan13 + $schedule13;
        $checkin13 = Transaction::where('room_name','=','19')->whereNull('checkout')->count();

        $loan14 = Loan::where('room_name','=','20')->where('status', '=', 'Diterima')->count();
        $schedule14 = Schedule::where('room_name','=','20')->count();
        $new14 = $loan14 + $schedule14;
        $checkin14 = Transaction::where('room_name','=','20')->whereNull('checkout')->count();

        $loan15 = Loan::where('room_name','=','21')->where('status', '=', 'Diterima')->count();
        $schedule15 = Schedule::where('room_name','=','21')->count();
        $new15 = $loan15 + $schedule15;
        $checkin15 = Transaction::where('room_name','=','21')->whereNull('checkout')->count();

        $loan16 = Loan::where('room_name','=','22')->where('status', '=', 'Diterima')->count();
        $schedule16 = Schedule::where('room_name','=','22')->count();
        $new16 = $loan16 + $schedule16;
        $checkin16 = Transaction::where('room_name','=','22')->whereNull('checkout')->count();

        $loan17 = Loan::where('room_name','=','23')->where('status', '=', 'Diterima')->count();
        $schedule17 = Schedule::where('room_name','=','23')->count();
        $new17 = $loan17 + $schedule17;
        $checkin17 = Transaction::where('room_name','=','23')->whereNull('checkout')->count();

        $loan18 = Loan::where('room_name','=','24')->where('status', '=', 'Diterima')->count();
        $schedule18 = Schedule::where('room_name','=','24')->count();
        $new18 = $loan18 + $schedule18;
        $checkin18 = Transaction::where('room_name','=','24')->whereNull('checkout')->count();

        $loan19 = Loan::where('room_name','=','25')->where('status', '=', 'Diterima')->count();
        $schedule19 = Schedule::where('room_name','=','25')->count();
        $new19 = $loan19 + $schedule19;
        $checkin19 = Transaction::where('room_name','=','25')->whereNull('checkout')->count();

        $loan20 = Loan::where('room_name','=','26')->where('status', '=', 'Diterima')->count();
        $schedule20 = Schedule::where('room_name','=','26')->count();
        $new20 = $loan20 + $schedule20;
        $checkin20 = Transaction::where('room_name','=','26')->whereNull('checkout')->count();

        $loan21 = Loan::where('room_name','=','27')->where('status', '=', 'Diterima')->count();
        $schedule21 = Schedule::where('room_name','=','27')->count();
        $new21 = $loan21 + $schedule21;
        $checkin21 = Transaction::where('room_name','=','27')->whereNull('checkout')->count();

        $loan22 = Loan::where('room_name','=','28')->where('status', '=', 'Diterima')->count();
        $schedule22 = Schedule::where('room_name','=','28')->count();
        $new22 = $loan22 + $schedule22;
        $checkin22 = Transaction::where('room_name','=','28')->whereNull('checkout')->count();

        $loan23 = Loan::where('room_name','=','29')->where('status', '=', 'Diterima')->count();
        $schedule23 = Schedule::where('room_name','=','29')->count();
        $new23 = $loan23 + $schedule23;
        $checkin23 = Transaction::where('room_name','=','29')->whereNull('checkout')->count();

        $loan24 = Loan::where('room_name','=','30')->where('status', '=', 'Diterima')->count();
        $schedule24 = Schedule::where('room_name','=','30')->count();
        $new24 = $loan24 + $schedule24;
        $checkin24 = Transaction::where('room_name','=','30')->whereNull('checkout')->count();
        
        

        return view('pages.admin.dashboard', [
            'transaction' => $transaction,
            'loan' => $loan,
            'schedule' => $schedule,
            'new' => $new,
            'checkin' => $checkin,

            'loan2' => $loan2,
            'schedule2' => $schedule2,
            'new2' => $new2,
            'checkin2' => $checkin2,

            'loan3' => $loan3,
            'schedule3' => $schedule3,
            'new3' => $new3,
            'checkin3' => $checkin3,

            'loan4' => $loan4,
            'schedule4' => $schedule4,
            'new4' => $new4,
            'checkin4' => $checkin4,

            'loan5' => $loan5,
            'schedule5' => $schedule5,
            'new5' => $new5,
            'checkin5' => $checkin5,

            'loan6' => $loan6,
            'schedule6' => $schedule6,
            'new6' => $new6,
            'checkin6' => $checkin6,
            
            'loan7' => $loan7,
            'schedule7' => $schedule7,
            'new7' => $new7,
            'checkin7' => $checkin7,

            'loan8' => $loan8,
            'schedule8' => $schedule8,
            'new8' => $new8,
            'checkin8' => $checkin8,

            'loan9' => $loan9,
            'schedule9' => $schedule9,
            'new9' => $new9,
            'checkin9' => $checkin9,
            
            'loan10' => $loan10,
            'schedule10' => $schedule10,
            'new10' => $new10,
            'checkin10' => $checkin10,

            'loan11' => $loan11,
            'schedule11' => $schedule11,
            'new11' => $new11,
            'checkin11' => $checkin11,
            
            'loan12' => $loan12,
            'schedule12' => $schedule12,
            'new12' => $new12,
            'checkin12' => $checkin12,

            'loan13' => $loan13,
            'schedule13' => $schedule13,
            'new13' => $new13,
            'checkin13' => $checkin13,

            'loan14' => $loan14,
            'schedule14' => $schedule14,
            'new14' => $new14,
            'checkin14' => $checkin14,

            'loan15' => $loan15,
            'schedule15' => $schedule15,
            'new15' => $new15,
            'checkin15' => $checkin15,
            
            'loan16' => $loan16,
            'schedule16' => $schedule16,
            'new16' => $new16,
            'checkin16' => $checkin16,

            'loan17' => $loan17,
            'schedule17' => $schedule17,
            'new17' => $new17,
            'checkin17' => $checkin17,

            'loan18' => $loan18,
            'schedule18' => $schedule18,
            'new18' => $new18,
            'checkin18' => $checkin18,
            
            'loan19' => $loan19,
            'schedule19' => $schedule19,
            'new19' => $new19,
            'checkin19' => $checkin19,

            'loan20' => $loan20,
            'schedule20' => $schedule20,
            'new20' => $new20,
            'checkin20' => $checkin20,
            
            'loan21' => $loan21,
            'schedule21' => $schedule21,
            'new21' => $new21,
            'checkin21' => $checkin21,

            'loan22' => $loan22,
            'schedule22' => $schedule22,
            'new22' => $new22,
            'checkin22' => $checkin22,
            
            'loan23' => $loan23,
            'schedule23' => $schedule23,
            'new23' => $new23,
            'checkin23' => $checkin23,

            'loan24' => $loan24,
            'schedule24' => $schedule24,
            'new24' => $new24,
            'checkin24' => $checkin24,
            // 'transaction17' => $transaction8,
        ]);
        
    }
}
