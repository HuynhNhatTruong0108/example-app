<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\MAIL;
use App\Models\User;
class HomeController extends Controller
{
    public function checkUserType(){
        if(!Auth::user()){
            return redirect()->route('login');
        }
        if(Auth::user()->quyen === 'ADM'){
            return redirect()->route('admin');
        }
        if(Auth::user()->quyen === 'USR'){
            return redirect()->route('user');
        }
        if(Auth::user()->quyen === 'GV'){
            return redirect()->route('gv');
        }
    }
   
    public function contact(){
        $user = auth::user();
   
        $guimail =User::where('quyen', '!=', 'GV')->where('name', '!=', 'guest')->get(); 
        return view('contact', compact('guimail'));
    }
    public function postcontact(Request $req){
        
        Mail::send('email.contact', [
            'name' => $req->name,
            'content' => $req->content,
        ], function($email) use($req){
            // $email->to('truong.hn.61cntt@ntu.edu.vn', $req->name);
         
            // $email->to('datruonghuynh.2001@gmail.com');
            // $email->to($req->email, $req->name);
            $email->from($req->email);
            $email->to($req->email, $req->name);
            $email->subject('Thông báo');
            
            
        
            
        }   
       
        ); return redirect('contact')->with('thongbao', 'gửi thành công');
    
     

    }

    public function contact1(){
        $user = auth::user();
   
        $guimail1 =User::where('quyen', '!=', 'USR')->where('name', '!=', 'guest')->get(); 
        return view('contact1', compact('guimail1'));
    }
    public function postcontact1(Request $req){
       

        Mail::send('email.contact', [
            'name' => $req->name,
            'content' => $req->content,
             
        ], function($email) use($req){
            // $email->to('kuda.2001.08.01@gmail.com', $req->name);
            
            $email->to([$req->email], $req->name);
            
            $email->from($req->email);
            $email->subject('Thông báo');
       
        }   
        );return redirect('contact1')->with('thongbao', 'gửi thành công');
     

    }

    public function select(){
       
    }

    
}
