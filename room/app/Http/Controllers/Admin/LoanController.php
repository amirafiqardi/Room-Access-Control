<?php

namespace App\Http\Controllers\Admin;

use App\Classes;
use App\Http\Requests\TransactionRequest;

use illuminate\Support\Facades\Auth;
use App\Room;
use App\Loan;
use App\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class LoanController extends Controller
{
    public function index()
    {         
        
        if(request()->ajax())
        {
            $query = Loan::with(['room'])->orderBy('id', 'ASC');
            return Datatables::of($query)
                ->addcolumn('action', function($item) {
                    
                        return '
                            <div class="btn-group">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                            type="button"
                                            data-toggle="dropdown">
                                            Action
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="' . route('loans.edit', $item->id) . '">
                                            Edit
                                        </a>
                                        <form action="'. route('loans.destroy', $item->id) .'" method="POST">
                                            ' . method_field('delete') . csrf_field() .'    
                                            <button type="submit" class="dropdown-item text-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        ';
                    
                })

                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.loan.index');
    }

    public function create()
    {
        return view('pages.admin.loan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loan = Loan::create([
            'NIK' => Auth::user()->NIK,
            //'NIK' => $request->NIK,
            'room_name' => $request->room_name,
            'start' => $request->start,
            'finish' => $request->finish,
            'status' => $request->status,
        ]);
              
        return redirect()->route('loans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Loan::findOrFail($id);
        $room_name = Room::all();

        return view('pages.admin.loan.edit', [
            'items' => $items,
            'room' => $room_name,
        ]);
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

        $item = Loan::findOrFail($id);

        $item->update($request->all());

        return redirect()->route('loans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Loan::findOrFail($id);
        $item->delete();

        return redirect()->route('loans.index');
    }
}
