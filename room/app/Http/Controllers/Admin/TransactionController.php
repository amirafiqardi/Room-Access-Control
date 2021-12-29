<?php

namespace App\Http\Controllers\Admin;

use App\Transaction;
use App\User;
use App\Room;
use App\Schedule;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())   
        {
            $query = Transaction::with(['user', 'room', 'schedule', 'schedule.classes'])->orderBy('id', 'DESC');
            return Datatables::of($query)
                ->addcolumn('action', function($item) {
                    if (is_null($item->checkout)){
                        return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <form action="'. route('transactions.update', $item->id) .'" method="POST">
                                    ' . method_field('PUT') . csrf_field() .'    
                                    <button type="submit" class="btn btn-success mr-1 mb-1">
                                        Check Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    ';
                    } else {
                        return '<button type="submit" class="btn btn-dark mr-1 mb-1">
                                        Already Checkout
                                    </button>';
                    }
                    
                })

                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.transaction.index');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room_name = Room::all();
        $user = User::all();
        $schedule = Schedule::all();

        return view('pages.admin.transaction.create', [
            'room' => $room_name,
            'user' => $user,
            'schedule' => $schedule,
        ]);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $transaction = Transaction::create([
            'NIK' => $request->NIK,
            //'NIK' => Auth::user()->NIK,
            'schedule' => $request->schedule,
            'room_name' => $request->room_name,
            'checkin' => now(),
            'checkout' => NULL,
        ]);


        return redirect()->route('transactions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {
        $data['checkout'] = now();

        $item = Transaction::findOrFail($id);

        //$item->update($request->all());
        $item->update($data);

        return redirect()->route('transactions.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}