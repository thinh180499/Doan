<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mon;

class MonController extends Controller
{
    private $mon;
    public function __construct(){
        $this->mon=new Mon();
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_mon=Mon::get();
        $title="danh sách môn";
        return view('admin.mon.index',compact('list_mon','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="thêm môn";
        return view('admin.mon.create',compact('title'));
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
            
           
            'mon'=>'required',
        ],[
            
            'mon.required'=>'môn bắt buộc phải nhập',
        ]);
        $data=[
           
            $request->mon,
        ];
        
        $this->mon->themmon($data);
        return redirect()->route('admin.mon.index');
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
        $mon = $this->mon->chitietmon($id);
        $title="sửa môn";
        $mon=$mon[0];   
        return view('admin.mon.edit',compact('mon','title'));
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
            'mon'=>'required',
        ],[
            'mon.required'=>'môn bắt buộc phải nhập',
        ]);
        $data=[
          
            $request->mon,
        ];
        $this->mon->suamon($data,$id);

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
        $this->mon->xoamon($id);
        $title="danh sách môn";  
        return redirect()->route('admin.mon.index',compact('title'));
    }
}
