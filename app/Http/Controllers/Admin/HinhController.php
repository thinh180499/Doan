<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hinh;
use App\Models\Khainiem;


class HinhController extends Controller
{
    private $hinh;
    public function __construct(){
        $this->hinh=new hinh();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $list_hinh=$this->hinh->danhsachhinhchitiet();
        // $list_hinh=Hinh::get();
        // dd($list_hinh);
        $title="danh sách hình";
        return view('admin.hinh.index',compact('list_hinh','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $khainiem=new Khainiem();
        $list_khainiem=$khainiem->danhsachkhainiem();
        $title="thêm hình";
        return view('admin.hinh.create',compact('list_khainiem','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img'=>'required',
            'khainiem_id'=>'required',
            
        ],[
            'img.required'=>'img bắt buộc phải nhập',
            'img.min'=>'img phải hơn 5 ký tự',
           
            'khainiem_id.required'=>'khái niệm bắt buộc phải nhập',
            
        ]);
        $data=[
            $request->img,
            $request->khainiem_id,
        ];
        
        $this->hinh->themhinh($data);
        return redirect()->route('admin.hinh.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $khainiem=new Khainiem();
        $list_khainiem=$khainiem->danhsachkhainiem();
        $hinh = $this->hinh->chitiethinh($id);
        $title="sửa hình";
        $hinh=$hinh[0];   
        return view('admin.hinh.edit',compact('list_khainiem','hinh','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'img'=>'required',
            'khainiem_id'=>'required',
            
        ],[
            'img.required'=>'img bắt buộc phải nhập',
            'img.min'=>'img phải hơn 5 ký tự',
           
            'khainiem_id.required'=>'khái niệm bắt buộc phải nhập',
            
        ]);
        $data=[
            $request->img,
            $request->khainiem_id,
        ];
        $this->hinh->suahinh($data,$id);

        return back()->with('msr','sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->hinh->xoahinh($id);
        $title="danh sách hình";  
        return redirect()->route('admin.hinh.index',compact('title'));
    }
}
