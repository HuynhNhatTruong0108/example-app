<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Phieudexuat;
use Illuminate\Support\Facades\Auth;


class CtphieudexuatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth::user();
   
        $chitietdx =Phieudexuat::where('magv', $user->id)->paginate(5); 
        return view('view_ct_pdx', compact('chitietdx'))->with('i',(request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Phieudexuat::create($request->all());
        return redirect()->route('chitietdx.index')->with('thongbao', 'thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phieudexuat $chitietdx)
    {
        return view('view_ct_pdx', compact('chitietdx'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $madx)
    {
        $data = Phieudexuat::find($madx);

        $data->update($request->all());
        return redirect()->route('chitietdx.index')->with('thongbao', 'cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($madx)
    {
        $data = Phieudexuat::find($madx);

        $data->delete();

        return redirect()->route('chitietdx.index')->with('thongbao', 'xóa thành công');
    }
}
