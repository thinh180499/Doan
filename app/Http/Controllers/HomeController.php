<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

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
        return view('login');
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
        $kiemtralogin=$this->admin->kiemtralogin($data);
        if(!empty($kiemtralogin[0])){
            
            return redirect()->route('admin.danhsachlythuyet','kiemtralogin');
        }else{

            return back()->with('msr',"không đăng nhập thành công");
        }
    }
}
