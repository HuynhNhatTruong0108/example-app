<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sinhvien;
use App\Exports\UsersExport;
 
use App\Imports\UsersImport;
 
use Maatwebsite\Excel\Facades\Excel;

class ExcelCSVController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('excel-csv-import');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function exportExcelCSV($slug) 
    {
        return Excel::download(new UsersExport, 'users.'.$slug);
    }
    
    public function importExcelCSV(Request $request) 
    {
        $validatedData = $request->validate([
 
           'file' => 'required',
 
        ]);
 
        Excel::import(new UsersImport,$request->file('file'));
 
            
        return redirect('excel-csv-file')->with('status', 'Đã cập nhật dữ liệu từ file');
    }
}
