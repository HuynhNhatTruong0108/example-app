<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phieudexuat;


class PhieudexuatadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phieudexuatad =Phieudexuat::orderBy('created_at', 'desc')->search1()->paginate(10); 
        return view('view_phieudexuat_ad', compact('phieudexuatad'))->with('i',(request()->input('page', 1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_pdx_ad');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Phieudexuat::create($request->all());
        return redirect()->route('phieudexuatad.index')->with('thongbao', 'thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Phieudexuat $phieudexuatad)
    {
        return view('edit_pdx_ad', compact('phieudexuatad'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phieudexuat $phieudexuatad)
    {
        return view('edit_pdx_ad', compact('phieudexuatad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $madx)
    {   
        $data = Phieudexuat::find($madx);
        $data->update($request->all());
        return redirect()->route('phieudexuatad.index')->with('thongbao', 'cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($madx)
    {
        $data = Phieudexuat::find($madx);
        
        $data->delete();
       
        return redirect()->route('phieudexuatad.index')->with('thongbao', 'xóa thành công');
    }
}
