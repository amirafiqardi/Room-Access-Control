<?php

namespace App\Http\Controllers\Admin;

use App\Classes;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class ClassesController extends Controller
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
            $query = Classes::query();
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
                                        <a class="dropdown-item" href="' . route('classes.edit', $item->id) . '">
                                            Edit
                                        </a>
                                        <form action="'. route('classes.destroy', $item->id) .'" method="POST">
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

        return view('pages.admin.class.index');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $classes = Classes::all();
       
        return view('pages.admin.class.create');//, [
           // 'class_name' => $classes,
           
        //]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $classes = Classes::create([
            'class_name' => $request->class_name,
        ]);

        return redirect()->route('classes.index');
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
        $items = Classes::findOrFail($id);
        return view('pages.admin.class.edit', [
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
    public function update(request $request, $id)
    {
        $data['checkout'] = now();

        $item = Classes::findOrFail($id);

        $item->update($request->all());

        return redirect()->route('classes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Classes::findOrFail($id);
        $item->delete();

        return redirect()->route('classes.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}