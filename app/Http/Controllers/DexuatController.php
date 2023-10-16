<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detai;
use App\Models\Phieudexuat;
use Illuminate\Support\Facades\Auth;

class DexuatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth::user();
        // where('trangthai', '!=' , 'khóa')->
        $dexuat =Detai::orderBy('created_at', 'desc')->where('trangthai', '!=' , 'khóa')->search()->paginate(10);
        return view('view_dexuat', compact('dexuat'))->with('i',(request()->input('page', 1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_dx');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Detai::create($request->validate([
            'madx' => 'required',
            'tendt' => 'required',
            'user_id' => 'required',
            'maldt' => 'required',
            'namhoc' => 'required'
        
        ]));
        return redirect()->route('dexuat.index')->with('thongbao', 'thêm thành công');
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
    public function edit(Detai $dexuat)
    {
        return view('edit_dx', compact('dexuat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $madt)
    {
        $data = Detai::find($madt);
        
        $data->update($request->except('madt'));
        return redirect()->route('dexuat.index')->with('thongbao', 'cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($madt)
    {
        $data = Detai::find($madt);
        
        $data->delete();
       
        return redirect()->route('dexuat.index')->with('thongbao', 'xóa thành công');
    }
}
