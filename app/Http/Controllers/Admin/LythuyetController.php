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
    // private $lythuyet;
    // public function __construct(){
        
    //     $this->lythuyet=new Lythuyet();
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_lythuyet=Lythuyet::get();
        //$dslythuyet=$this->lythuyet->danhsachlythuyet();
        $title="danh sách lý thuyết";
        return view('admin.lythuyet.index',compact('list_lythuyet','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="thêm lý thuyết";
        return view('admin.lythuyet.create',compact('title'));
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
            'tenlythuyet'=>'required|min:5',
            'noidung'=>'required',
            'congthuc'=>'required',
            'mon'=>'required',
        ],[
            'tenlythuyet.required'=>'tên lý thuyết bắt buộc phải nhập',
            'tenlythuyet.min'=>'tên lý thuyết phải hơn 5 ký tự',
            //'tenlythuyet.unique'=>'tên lý thuyết đã tồn tại',
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
        return redirect()->route('admin.lythuyet.index');
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
        // $chitietlythuyet = $this->lythuyet->themlythuyet($id);
        // $title="sửa lý thuyết";
        // return view('admin.lythuyet.edit',compact('chitietlythuyet','title'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
