<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phantutrongkhainiem;

class PhantutrongkhainiemController extends Controller
{
    private $phantutrongkhainiem;
    public function __construct(){
        $this->phantutrongkhainiem=new Phantutrongkhainiem();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_phantutrongkhainiem=Phantutrongkhainiem::get();
        $title="danh sách phần tử trong công thức";
        return view('admin.phantutrongkhainiem.index',compact('list_phantutrongkhainiem','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="thêm phần tử trong khái niệm";
        return view('admin.phantutrongkhainiem.create',compact('title'));
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
            
           
            'khainiem_id'=>'required',
            'doituong_id'=>'required',
        ],[
            'khainiem_id.required'=>'khái niệm bắt buộc phải nhập',
            'doituong_id.required'=>'đối tượng bắt buộc phải nhập',
        ]);
        $data=[
           
            $request->khainiem_id,
            $request->doituong_id,
        ];
        $this->phantutrongkhainiem->themphantutrongkhainiem($data);
        return redirect()->route('admin.phantutrongkhainiem.index');
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
        $phantutrongkhainiem = $this->phantutrongkhainiem->chitietphantutrongkhainiem($id);
        $title="sửa phần tử trong khái niệm";
        $phantutrongkhainiem=$phantutrongkhainiem[0];   
        return view('admin.phantutrongkhainiem.edit',compact('phantutrongkhainiem','title'));
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
            'khainiem_id'=>'required',
            'doituong_id'=>'required',
        ],[
            'khainiem_id.required'=>'khái niệm bắt buộc phải nhập',
            'doituong_id.required'=>'đối tượng bắt buộc phải nhập',
        ]);
        $data=[
           
            $request->khainiem_id,
            $request->doituong_id,
        ];
        $this->phantutrongkhainiem->suaphantutrongkhainiem($data,$id);

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
        $this->phantutrongkhainiem->xoaphantutrongkhainiem($id);
        $title="danh sách phần tử trong khái niệm";  
        return redirect()->route('admin.phantutrongkhainiem.index',compact('title'));
    }
}
