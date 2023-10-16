<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Sinhvien;
use App\Exports\UsersExport;
 
use App\Imports\UsersImport;
 
use Maatwebsite\Excel\Facades\Excel;

class SinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $sinhvien =Sinhvien::search()->paginate(5);
      
        return view('view_sinhvien', compact('sinhvien'))->with('i',(request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('create_sv');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'tensv' => 'required|unique:posts|max:255',
        //     'lop' => 'required',
        
        // ]);
        
        Sinhvien::create($request->validate([
            'masv' => 'required',
            'tensv' => 'required',
            'gioitinh' => 'required',
            'lop' => 'required',
            'ngaysinh' => 'required',
            'sdt' => 'required',
            'email' => 'required'
        
        ]));
        return redirect()->route('sinhvien.index')->with('thongbao', 'thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sinhvien $sinhvien)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sinhvien $sinhvien)
    {
        return view('edit_sv', compact('sinhvien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $masv)
    {
        $data = Sinhvien::find($masv);
        
        $data->update($request->except('masv'));
        return redirect()->route('sinhvien.index')->with('thongbao', 'cập nhật thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($masv)
    {
        $data = Sinhvien::find($masv);
        
        $data->delete();
       
        return redirect()->route('sinhvien.index')->with('thongbao', 'xóa thành công');
    }


   
    
}
