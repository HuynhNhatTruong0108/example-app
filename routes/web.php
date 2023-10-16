<?php

use App\Http\Controllers\BomonController;
use App\Http\Controllers\DangkysvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GiangvienController;
use App\Http\Controllers\QuanlyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrangdangkyController;
use App\Http\Controllers\SinhvienController;
use App\Http\Controllers\TrangdexuatController;
use App\Http\Controllers\DetaiController;
use App\Http\Controllers\DexuatController;
use App\Http\Controllers\PhieudexuatadController;
use App\Http\Controllers\PhieudexuatController;
use App\Http\Controllers\DetaiSVController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OAuthController;
use App\Http\Controllers\QuyenController;
use App\Http\Controllers\GvController;
use App\Http\Controllers\Chitiet_dtController;
use App\Http\Controllers\Chitiet_pdx_adController;
use App\Http\Controllers\CtphieudexuatController;
use App\Http\Controllers\DetaixemController;
use App\Http\Controllers\DetaixemgvController;
use App\Http\Controllers\UserController;
use App\Models\Giangvien;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\MAIL;
use League\CommonMark\Extension\InlinesOnly\ChildRenderer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//dang ký
// Route::get('trangdangky','App\Http\Controllers\TrangdangkyController@index');

// de xuat
// Route::get('trangdexuat','App\Http\Controllers\TrangdexuatController@index');

//back end
// Route::resource('/quanly', QuanlyController::class);

//ecxel
use App\Http\Controllers\ExcelCSVController;
use App\Http\Controllers\ThoihanController;
use App\Http\Controllers\ThongtingvController;
use App\Http\Controllers\UsergvController;

Route::get('excel-csv-file', [ExcelCSVController::class, 'index']);
Route::post('import-excel-csv-file', [ExcelCSVController::class, 'importExcelCSV']);
Route::get('export-excel-csv-file/{slug}', [ExcelCSVController::class, 'exportExcelCSV']);



Route::get('quanly', 'App\Http\Controllers\QuanlyController@index');

// Route::get('layoutql','App\Http\Controllers\QuanlyController@layoutql');

// them sua xoa sinhvien
Route::resource('/sinhvien', SinhvienController::class);

// Route::post('/export-csv','SinhvienController@export_csv');
// Route::post('/import-csv','SinhvienController@import_csv');

//them sua xoa giang vien
Route::resource('/giangvien', GiangvienController::class);

//them sua xoa de tai
Route::resource('/detai', DetaiController::class);

Route::resource('/phieudexuatad', PhieudexuatadController::class);

//trang đề xuất
Route::resource('/trangdexuat', TrangdexuatController::class);

Route::resource('/dexuat', DexuatController::class);

Route::resource('/phieudexuat', PhieudexuatController::class);

//trang đăng ký đề tài sinh viên

Route::resource('/detaisv', DetaiSVController::class);


// bo mon
Route::resource('/bomon', BomonController::class);
//quyen
Route::resource('/quyen', QuyenController::class);


//dang ky de tai
Route::resource('/dangky', DangkysvController::class);

//thong tin giang viên
Route::resource('/tt_gv', GvController::class);

//chi tiet de tai dang ky
Route::resource('/chitiet_dt_sv', Chitiet_dtController::class);

// chi tiet
Route::resource('/chitiet', CtphieudexuatController::class);

// chi tiet ad
Route::resource('/chitiet_pdx_ad', Chitiet_pdx_adController::class);

// xem de tai
Route::resource('/detai1', DetaixemController::class);

Route::resource('/detai2', DetaixemgvController::class);

//
Route::resource('/thoihan', ThoihanController::class);

Route::resource('/thongtincngv', ThongtingvController::class);

//tim kiem

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




// dang nhap phan quyen
Route::get('/', [HomeController::class, 'checkUserType']);

Route::get('/admin', function () {
    return view('quanly_layout');
})->name('admin')->middleware('auth');

Route::get('/user', function () {
    return view('trangdangky');
})->name('user')->middleware('auth');

Route::get('/gv', function () {
    return view('trangdexuat');
})->name('gv')->middleware('auth');

//thông tin cá nhân
Route::get('/thongtingv', function () {
    return view('thongtingv');
})->name('thongtin.thongtingv');


//noi dung mail
// Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('contact', 'App\Http\Controllers\HomeController@contact')->name('contact');
// Route::post('contact', [HomeController::class, 'postcontact'])->name('contact');
Route::post('contact', 'App\Http\Controllers\HomeController@postcontact')->name('contact');

Route::get('contact1', 'App\Http\Controllers\HomeController@contact1')->name('contact1');
// Route::post('contact', [HomeController::class, 'postcontact'])->name('contact');
Route::post('contact1', 'App\Http\Controllers\HomeController@postcontact1')->name('contact1');




// Route::get('guimail', function(){
//     $user = Auth::user();  
//     Mail::send('Mail',compact('user'),function($email) use ($user) {
//         $email->subject('Thong bao');

//         $email->to('truong.hn.61cntt@ntu.edu.vn');

//     });
// });




//quyen
Route::middleware(['auth', 'admin'])->group(
    function () {
        Route::get('/admin', function () {
            return view('quanly_layout');
        })->name('admin')->middleware('auth');


        Route::resource('/giangvien', GiangvienController::class);

        Route::resource('/sinhvien', SinhvienController::class);

        // bo mon
        Route::resource('/bomon', BomonController::class);
        //quyen
        Route::resource('/quyen', QuyenController::class);


        //them sua xoa de tai
        Route::resource('/detai', DetaiController::class);

        Route::resource('/phieudexuatad', PhieudexuatadController::class);

        //tai khoan
        Route::resource('/taikhoan', UserController::class);

        //tkgv
        Route::resource('/taikhoan1', UsergvController::class);

        //thoihan
        Route::resource('/thoihan', ThoihanController::class);


        //noi dung mail
        // Route::get('contact', [HomeController::class, 'contact'])->name('contact');
        Route::get('contact', 'App\Http\Controllers\HomeController@contact')->name('contact');
        // Route::post('contact', [HomeController::class, 'postcontact'])->name('contact');
        Route::post('contact', 'App\Http\Controllers\HomeController@postcontact')->name('contact');

        Route::get('contact1', 'App\Http\Controllers\HomeController@contact1')->name('contact1');
        // Route::post('contact', [HomeController::class, 'postcontact'])->name('contact');
        Route::post('contact1', 'App\Http\Controllers\HomeController@postcontact1')->name('contact1');
    }
);


Route::middleware(['auth', 'GV'])->group(
    function () {

        Route::get('/gv', function () {
            return view('trangdexuat');
        })->name('gv')->middleware('auth');

        //trang đề xuất
        Route::resource('/trangdexuat', TrangdexuatController::class);

        Route::resource('/dexuat', DexuatController::class);

        Route::resource('/phieudexuat', PhieudexuatController::class);

        Route::resource('/detai2', DetaixemgvController::class);

    }

    

);
