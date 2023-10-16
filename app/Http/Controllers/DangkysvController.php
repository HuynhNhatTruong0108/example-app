<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sinhvien;
use App\Models\Detai;


class DangkysvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dangky =Detai::where('user_id', '!=', 0)->orderBy('updated_at', 'desc')->search1()->paginate(10); 

        return view('view_dangky_sv', compact('dangky'))->with('i',(request()->input('page', 1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('create_dk_sv');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'madk' => 'required|unique:products' ,
        //     'masv' => 'required',
        //     'madt' => 'required',
        // ]);

        Detai::create($request->all());
        return redirect()->route('dangky.index')->with('thongbao', 'thêm thành công');
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
    public function edit(Detai $dangky)
    {
        // return view('edit_dk_sv', compact('dangky'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $madk)
    {
        // $data = Detai::find($madk);
        
        // $data->update($request->except('madk'));
        // return redirect()->route('dangky.index')->with('thongbao', 'cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($madk)
    {
        // $data = Detai::find($madk);
        
        // $data->delete();
       
        // return redirect()->route('dangky.index')->with('thongbao', 'xóa thành công');
    }
}
