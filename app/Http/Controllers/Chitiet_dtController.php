<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phieudexuat;


class Chitiet_dtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $phieudexuatsv =Phieudexuat::search()->paginate(5); 
        // return view('View_chitiet_dt_sv', compact('phieudexuatsv'))->with('i',(request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phieudexuat $chitiet_dt)
    {
        // return view('edit_chitiet', compact('chitiet_dt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $madx)
    {
        // $data = Phieudexuat::find($madx);

        // $data->update($request->all());
        // return redirect()->route('chitiet_dt.index')->with('thongbao', 'cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($madx)
    {
        
    }
}
