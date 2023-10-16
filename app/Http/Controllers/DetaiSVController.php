<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detai;
use App\Models\Giangvien;
use App\Models\Huongdan;
use App\Models\Thoihan;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DetaiSVController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $user = auth::user();
        // $date = new DateTime();
        // echo $date->format("y-m-d");       
        // date('d-m-Y', strtotime($user->from_date));
        // $startDate = Carbon::createFromFormat('Y-m-d', '2023-05-29');
        // $endDate = Carbon::createFromFormat('Y-m-d', '2023-06-30');
        // $ketthuc1 = DB::table('thoihans')->select('ngayktdk')->first();
        $thoihan = DB::table('thoihans')->get();
        $detaisv = Detai::where('user_id', '=', 0)->where('trangthai', '!=', 'khóa')->where('trangthai', 'đăng')->orWhere('user_id', '=', $user->id)->orderBy('updated_at', 'desc')->search()->search1()->paginate(10);

        return view('view_detai_sv', compact('detaisv', 'thoihan'))->with('i',(request()->input('page', 1)-1)*10);
        
    }
    // ->where('user_id', '=', 0)
    // ->where('magv', $user->id)->get()
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
    public function store(Request $request, $madt)
    {
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
    public function edit(Detai $detaisv)
    {
        return view('edit_chitiet', compact('detaisv'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $user = auth::user();
        
        $batdau1 = DB::table('thoihans')->select('ngaybddk')->first();

        $ketthuc1 = DB::table('thoihans')->select('ngayktdk')->first();
        // dd($ketthuc1);
        $date  = DB::table('detais')->select('updated_at')->first();
        
        $date->updated_at = Carbon::now();
        // dd($date);
        // dd($date);
        // dd($date);
        // $date->update(['updated_at',$date->updated_at => Carbon::today()]);

        // dd($batdau1);
        
        // dd($date->updated_at>$ketthuc1->ngayktdk);

        $detaiSV = Detai::where('user_id', $user->id)->first();
        if ($date->updated_at <= $ketthuc1->ngayktdk && $date->updated_at >= $batdau1->ngaybddk ) {

            if (is_null($detaiSV)) {
                // whereDate('updated_at', '>=', $startDate)->whereDate('updated_at', '<=', $endDate)->
                $detaiSV = Detai::where('madt', $id)->first();
                $detaiSV->user_id = $user->id;


                $detaiSV->update(['user_id', $user->id]);
                // dd($detaiSV);

                $detaiSV->update(['updated_at', $user->update_at => Carbon::today()->toDateString()]);
                // $detaiSV->updated_at = Carbon::today();
                // $detaiSV->save(['timestamps' => false]);
                // $detaiSV->updated_at =  Carbon::today()->toDateString(); 

                // dd($detaiSV);

                return redirect('detaisv')->with('thongbao', 'đăng ký thành công');
            } else return redirect('detaisv')->with('thongbao', 'bạn đã có đề tài vui lòng hủy nếu muốn chọn đề tài khác');
        } else return redirect('detaisv')->with('thongbao', 'hết hạn đăng ký hoặc chưa đến thời gian');
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = auth::user();
        $detaiSV = Detai::where('madt', $id)->first();
        $detaiSV->user_id = 0;

        $detaiSV->update(['user_id', 0]);


        return redirect('detaisv');
    }

    public function chitiet()
    {
    }
}
