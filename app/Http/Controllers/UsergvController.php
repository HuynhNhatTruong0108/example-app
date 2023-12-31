<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsergvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taikhoan1 =User::where('quyen', '!=', 'USR')->search()->search1()->paginate(5);
      
        return view('view_user1', compact('taikhoan1'))->with('i',(request()->input('page', 1)-1)*5);
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
    public function edit(User $taikhoan1)
    {
        return view('edit_user1', compact('taikhoan1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $data = User::find($id);
        $data->update($request->all());
        return redirect()->route('taikhoan1.index')->with('thongbao', 'cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $data = User::find($id);
        
        $data->delete();
       
        return redirect()->route('taikhoan1.index')->with('thongbao', 'xóa thành công');
    }
}
