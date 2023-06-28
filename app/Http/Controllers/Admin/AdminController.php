<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
       return view('admin.index');
    }
    public function login(){
        return view('admin.login');
    }
    public function checklogin(Request $request){
        $request->validate([
            'adminname'=>'required',
            'password'=>'required',
            
        ],[
            'adminname.required'=>'uresname bắt buộc phải nhập',
            'password.required'=>'password bắt buộc phải nhập',
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
