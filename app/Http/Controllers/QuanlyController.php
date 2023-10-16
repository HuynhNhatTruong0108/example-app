<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Metadata\Uses;

class QuanlyController extends Controller
{
    public function index(){
        
        return view('quanly_dangnhap');
        // , compact('sinhvien'))->with('i',request()->input('page', 1)-1);
    }
    public function layoutql(){
        return view('quanly.tongquan');  //layoutql
    }
  
}

