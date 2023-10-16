<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thoihan;

class ThoihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $thoihan =Thoihan::paginate(5);
      
        return view('view_thoihan', compact('thoihan'))->with('i',(request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function edit(Thoihan $thoihan)
    {
        return view('edit_thoihan', compact('thoihan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Thoihan::find($id);
        $data->update($request->all());
        return redirect()->route('thoihan.index')->with('thongbao', 'cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
