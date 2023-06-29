<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    private $user;
    public function __construct(){
        $this->user=new User();
    }
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
        $this->admin=new User();
        $data = [
             $request->adminname,
             $request->password,
        ];
        
        if(Auth::attempt(['adminname'=>$request->adminname,'password'=>$request->password])){
            $cookie = Cookie::queue(Cookie::make('cookieName', 'value', $minutes));
            return redirect()->route('admin.index');
        }else{
            return back()->with('msr',"không đăng nhập thành công");
        }
    }
}
