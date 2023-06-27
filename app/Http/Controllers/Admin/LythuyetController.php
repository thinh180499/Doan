<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Lythuyet;


class LythuyetController extends Controller
{
    private $lythuyet;
    public function __construct(){
        $this->lythuyet=new Lythuyet();
    }
    
    public function index(){
        
        $dslythuyet=$this->lythuyet->danhsachlythuyet();
        return view('admin.danhsachlythuyet',compact('dslythuyet'));
    }

    public function add(){

        return view('admin.themlythuyet');
    }
    
    public function postadd(Request $request){
        $request->validate([
            'tenlythuyet'=>'required|unique:lythuyet',
            'noidung'=>'required',
            'congthuc'=>'required',
            'mon'=>'required',
        ],[
            'tenlythuyet.required'=>'tên lý thuyết bắt buộc phải nhập',
            'tenlythuyet.unique'=>'tên lý thuyết đã tồn tại',
            'noidung.required'=>'nội dung bắt buộc phải nhập',
            'congthuc.required'=>'công thức bắt buộc phải nhập',
            'mon.required'=>'môn bắt buộc phải nhập',
        ]);
        $data=[
            $request->tenlythuyet,
            $request->noidung,
            $request->congthuc,
            $request->mon,
        ];
        $this->lythuyet->themlythuyet($data);
        return redirect()->route('admin.danhsachlythuyet');
    }
}
