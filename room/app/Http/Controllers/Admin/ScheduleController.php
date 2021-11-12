<?php

namespace App\Http\Controllers\Admin;

use App\Schedule;
use App\Room;
use App\Classes;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
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
            $query = Schedule::query();
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
                                <a class="dropdown-item" href="' . route('schedules.edit', $item->id) . '">
                                    Edit
                                </a>
                                <form action="'. route('schedules.destroy', $item->id) .'" method="POST">
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

        return view('pages.admin.schedule.index');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room_name = Room::all();
        $classes = Classes::all();

        return view('pages.admin.schedule.create', [
            'room' => $room_name,
            'classes' => $classes,
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
        $schedule = Schedule::create([
            'room_name' => $request->room_name,
            'class_name' => $request->class_name,
            'start' => $request->start,
            'finish' => $request->finish,
        ]);


        return redirect()->route('schedules.index');
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
        $items = Schedule::findOrFail($id);
        return view('pages.admin.schedule.edit', [
            'items' => $items,
        ]);
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

        $item = Schedule::findOrFail($id);

        $item->update($data);

        return redirect()->route('schedules.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Schedule::findOrFail($id);
        $item->delete();

        return redirect()->route('schedules.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}