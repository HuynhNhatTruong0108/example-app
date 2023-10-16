<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Detai;
use Illuminate\Support\Facades\Auth;

class DetaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(request()->tendt);
 
        $detai =Detai::search()->search1()->paginate(10); 

        return view('view_detai', compact('detai'))->with('i',(request()->input('page', 1)-1)*10);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_dt');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Detai::create($request->all());    
        return redirect()->route('detai.index')->with('thongbao', 'thêm thành công');
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
    public function edit(Detai $detai)
    {
        return view('edit_dt', compact('detai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $madt)
    {
        
        $data = Detai::find($madt);
        
        $data->update($request->except('madt'));
        return redirect()->route('detai.index')->with('thongbao', 'cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($madt)
    {
        $data = Detai::find($madt);
        
        $data->delete();
       
        return redirect()->route('detai.index')->with('thongbao', 'xóa thành công');
    }
    
}
