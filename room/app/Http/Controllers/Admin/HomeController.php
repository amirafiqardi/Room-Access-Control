<?php

namespace App\Http\Controllers\Admin;

use App\Home;
use App\User;


use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
            $query = Home::all()->query;
            return Datatables::of($query)
                ->addcolumn('action', function($item) {
                    if (is_null($item->checkout)){
                        return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <form action="'. route('home.update', $item->id) .'" method="POST">
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

        return view('pages.admin.home.index');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
        
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

        $item = Home::findOrFail($id);

        $item->update($data);

        return redirect()->route('admin.home.index');
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