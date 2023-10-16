<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Giangvien;

class GiangvienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $giangvien =Giangvien::search()->paginate(5); 
        return view('view_giangvien', compact('giangvien'))->with('i',(request()->input('page', 1)-1)*5);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_gv');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       

        Giangvien::create($request->validate([
            'magv' => 'required',
            'tengv' => 'required',
            'mabm' => 'required',
            'khoa' => 'required',
            'sdt' => 'required',
            'email' => 'required'
        
        ]));
        return redirect()->route('giangvien.index')->with('thongbao', 'thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Giangvien $giagvien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Giangvien $giangvien)
    {
        return view('edit_gv', compact('giangvien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $magv)
    {
        $data = giangvien::find($magv);
        
        $data->update($request->except('magv'));
        return redirect()->route('giangvien.index')->with('thongbao', 'cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($magv)
    {
        $data = Giangvien::find($magv);
        
        $data->delete();
       
        return redirect()->route('giangvien.index')->with('thongbao', 'xóa thành công');
    }
}
