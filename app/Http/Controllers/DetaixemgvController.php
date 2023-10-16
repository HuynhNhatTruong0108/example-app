<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detai;

class DetaixemgvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detai2 =Detai::search2()->search1()->paginate(5); 

        return view('view_detaixem1', compact('detai2'))->with('i',(request()->input('page', 1)-1)*5);
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
    public function edit(Detai $detai2)
    {
        return view('edit_dtxem1', compact('detai2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$madt)
    {
        $data = Detai::find($madt);
        
        $data->update($request->except('madt'));
        return redirect()->route('detai2.index')->with('thongbao', 'cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $madt)
    {
        $data = Detai::find($madt);
        
        $data->delete();
       
        return redirect()->route('detai2.index')->with('thongbao', 'xóa thành công');
    }
}
