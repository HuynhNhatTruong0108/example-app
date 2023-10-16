<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Phieudexuat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\Thoihan;


class PhieudexuatController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {
      
        $user = auth::user();
        $thoihan = DB::table('thoihans')->get();
        $phieudexuat = Phieudexuat::where('tinhtrang', '!=', 'lưu trữ')->where('magv', $user->id)->orderBy('created_at', 'desc')->search1()->paginate(10);
        // $phieudexuat->user_id = $user->id;
        
        return view('view_phieudexuat', compact('phieudexuat', 'thoihan'))->with('i', request()->input('page', 1) - 1);
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        // $table = DB::select("SELECT AUTO_INCREMENT FROM madx WHERE TABLE_SCHEMA = 'qldta' AND TABLE_NAME = 'Phieudexuat'");
        // if (!empty($table)) { echo $table[2023]->AUTO_INCREMENT; }
        return view('create_pdx');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $batdau1 = DB::table('thoihans')->select('ngaybddx')->first();

        $ketthuc1 = DB::table('thoihans')->select('ngayktdx')->first();

        $date  = DB::table('phieudexuats')->select('created_at')->first();
        $date->created_at = Carbon::now();

        // $date->created_at = Carbon::today();
        if ($date->created_at <= $ketthuc1->ngayktdx && $date->created_at >= $batdau1->ngaybddx ) {

        Phieudexuat::create($request->all());   
        return redirect()->route('phieudexuat.index')->with('thongbao', 'thêm thành công');
     }
     else  return redirect()->route('phieudexuat.index')->with('thongbao', 'hết hạn thêm đề xuất');
    }

    /**
     * Display the specified resource.
     */
    public function show(Phieudexuat $phieudexuat)
    {
        return view('edit_pdx1', compact('phieudexuat'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phieudexuat $phieudexuat)
    {
        return view('edit_pdx', compact('phieudexuat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $madx)
    {
        $batdau1 = DB::table('thoihans')->select('ngaybddx')->first();

        $ketthuc1 = DB::table('thoihans')->select('ngayktdx')->first();

        $date  = DB::table('phieudexuats')->select('updated_at')->first();
        // $date->updated_at = Carbon::today();
        $date->updated_at = Carbon::now();

        // dd($date);

        if ($date->updated_at <= $ketthuc1->ngayktdx && $date->updated_at >= $batdau1->ngaybddx ) {

        $data = Phieudexuat::find($madx);

        $data->update($request->all());
        return redirect()->route('phieudexuat.index')->with('thongbao', 'cập nhật thành công');
        }
        else
        return redirect()->route('phieudexuat.index')->with('thongbao', 'đã hết thời hạn đề xuất');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($madx)
    {
       

        $batdau1 = DB::table('thoihans')->select('ngaybddx')->first();
   

        $ketthuc1 = DB::table('thoihans')->select('ngayktdx')->first();
    

        $date  = DB::table('phieudexuats')->select('updated_at')->first();
        $date->updated_at = Carbon::today();
            
        if ($date->updated_at < $ketthuc1->ngayktdx && $date->updated_at >= $batdau1->ngaybddx ) {
        {
        $data = Phieudexuat::find($madx);

        $data->delete();

        return redirect()->route('phieudexuat.index')->with('thongbao', 'xóa thành công');
        }
        }
        else
        return redirect()->route('phieudexuat.index')->with('thongbao', 'đã hết hạn để có thể thao tác');

    }


    
}
