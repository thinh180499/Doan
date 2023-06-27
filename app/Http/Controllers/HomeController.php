<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function vatly(){
        return view('vatly');
    }
    public function toan(){
        return view('toan');
    }
    public function hoa(){
        return view('hoa');
    }
    public function login(){
        return view('admin.danhsachlythuyet');
    }
    public function checklogin(Request $request){
        $request->validate([
            'adminname'=>'required',
            'password'=>'required',
            
        ],[
            'adminname.required'=>'tên lý thuyết bắt buộc phải nhập',
            'password.required'=>'tên lý thuyết phải hơn 5 ký tự',
        ]);
        $this->admin=new Admin();
        $data = [
             $request->adminname,
             $request->password,
        ];
        
        if(Auth::attempt(['adminname'=>$request->adminname,'password'=>$request->password])){
            
            return redirect()->route('admin.danhsachlythuyet','kiemtralogin');
        }else{

            return back()->with('msr',"không đăng nhập thành công");
        }
    }
}
