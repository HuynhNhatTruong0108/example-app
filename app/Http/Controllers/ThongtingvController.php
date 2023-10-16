<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Giangvien;
use App\Models\Bomon;


class ThongtingvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth::user();
        $thongtincngv = Giangvien::where('magv', $user->id)->get();
        $thongtin1 = User::where('id', $user->id)->get();
        // $phieudexuat->user_id = $user->id;
        
        return view('view_thongtin', compact('thongtincngv'));
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
    public function edit(Giangvien $thongtincngv)
    {
        return view('edit_gvtt', compact('thongtincngv'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $magv)
    {
        $data = giangvien::find($magv);
        
        $data->update($request->except('magv'));
        return redirect()->route('thongtincngv.index')->with('thongbao', 'cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
