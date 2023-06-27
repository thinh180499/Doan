<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
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
            'tenlythuyet'=>'required|min:5|unique:lythuyet',
            'noidung'=>'required',
            'congthuc'=>'required',
            'mon'=>'required',
        ],[
            'tenlythuyet.required'=>'tên lý thuyết bắt buộc phải nhập',
            'tenlythuyet.min'=>'tên lý thuyết phải hơn 5 ký tự',
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
    public function edit($id=0){
        if(!empty($id)){
            $chitietlythuyet=$this->lythuyet->laylythuyet($id);
           if(!empty($chitietlythuyet[0])){
            $chitietlythuyet=$chitietlythuyet[0];
           }else{
            return redirect()->route('admin.danhsachlythuyet');
           }
        }else{
            return redirect()->route('admin.danhsachlythuyet');
        }
        

        return view('admin.sualythuyet',compact('chitietlythuyet'));
    }
    public function postedit(Request $request,$id=0){
        $request->validate([
            'tenlythuyet'=>'required|min:5|unique:lythuyet,tenlythuyet,'.$id,
            'noidung'=>'required',
            'congthuc'=>'required',
            'mon'=>'required',
        ],[
            'tenlythuyet.required'=>'tên lý thuyết bắt buộc phải nhập',
            'tenlythuyet.min'=>'tên lý thuyết phải hơn 5 ký tự',
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
        $this->lythuyet->sualythuyet($data,$id);

        return back();
    }
    public function dele($id){
        if(!empty($id)){
            $chitietlythuyet=$this->lythuyet->laylythuyet($id);
           if(!empty($chitietlythuyet[0])){
            $xoalythuyet=$this->lythuyet->xoalythuyet($id);
           }else{
            return redirect()->route('admin.danhsachlythuyet');
           }
        }else{
            return redirect()->route('admin.danhsachlythuyet');
        }
        return redirect()->route('admin.danhsachlythuyet');
    }
}
