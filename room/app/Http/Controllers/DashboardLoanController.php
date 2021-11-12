<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanRequest;

use illuminate\Support\Facades\Auth;
use App\Room;
use App\Loan;
use App\User;
use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;

class DashboardLoanController extends Controller
{
    public function index()
    {         
        
        if(request()->ajax())
        {
            $query = Loan::query();
            return Datatables::of($query)
            ->addcolumn('action', function($item) {
                if (is_null($item->checkout)){
                    return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <form action="'. route('dashboard-loans.update', $item->id) .'" method="POST">
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

        return view('pages.user.loan.index');
    }

    public function create()
    {
        $room_name = Room::all();

        return view('pages.user.loan.create', [
            'room' => $room_name,
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
        $loan = Loan::create([
            //'NIK' => Auth::user()->NIK,
            'NIK' => $request->NIK,
            'room_name' => $request->room_name,
            'start' => $request->start,
            'finish' => $request->finish,
            'status' => $request->status,
        ]);
              
        return redirect()->route('dashboard-loans.index');
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
    public function update($id)
    {
        $data['checkout'] = now();

        $item = Loan::findOrFail($id);
        
        $item->update($data);

        return redirect()->route('dashboard-loans.index');
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
}
