<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Khainiem;
use App\Models\Mon;
use App\Models\Congthuc;

class KhainiemController extends Controller
{
    private $khainiem;
    public function __construct(){
        $this->khainiem=new Khainiem();
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $list_khainiem=$this->khainiem->danhsachkhainiemchitiet();
        $title="danh sách khái niêm";
        return view('admin.khainiem.index',compact('list_khainiem','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $congthuc=new Congthuc();
        $mon=new Mon();
        $list_congthuc=$congthuc->danhsachcongthuc();
        $list_mon=$mon->danhsachmon();
        $title="thêm khái niệm";
        return view('admin.khainiem.create',compact('list_congthuc','list_mon','title'));
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
            'tenkhainiem'=>'required|min:5',
            'noidung'=>'required',
            'congthuc'=>'required',
            'mon'=>'required',
        ],[
            'tenkhainiem.required'=>'tên khái niệm bắt buộc phải nhập',
            'tenkhainiem.min'=>'tên khái niệm phải hơn 5 ký tự',
            //'tenkhainiem.unique'=>'tên khái niệm đã tồn tại',
            'noidung.required'=>'nội dung bắt buộc phải nhập',
            'congthuc.required'=>'công thức bắt buộc phải nhập',
            'mon.required'=>'môn bắt buộc phải nhập',
        ]);
        $data=[
            $request->tenkhainiem,
            $request->noidung,
            $request->congthuc,
            $request->mon,
        ];
        
        $this->khainiem->themkhainiem($data);
        return redirect()->route('admin.khainiem.index');
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
        $congthuc=new Congthuc();
        $mon=new Mon();
        $list_congthuc=$congthuc->danhsachcongthuc();
        $list_mon=$mon->danhsachmon();
        $khainiem = $this->khainiem->chitietkhainiem($id);
        $title="sửa khái niệm";
        $khainiem=$khainiem[0];   
        return view('admin.khainiem.edit',compact('list_congthuc','list_mon','khainiem','title'));
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
            'tenkhainiem'=>'required|min:5|unique:khainiem,tenkhainiem,'.$id,
            'noidung'=>'required',
            'congthuc'=>'required',
            'mon'=>'required',
        ],[
            'tenkhainiem.required'=>'tên khái niệm bắt buộc phải nhập',
            'tenkhainiem.min'=>'tên khái niệm phải hơn 5 ký tự',
            'tenkhainiem.unique'=>'tên khái niệm đã tồn tại',
            'noidung.required'=>'nội dung bắt buộc phải nhập',
            'congthuc.required'=>'công thức bắt buộc phải nhập',
            'mon.required'=>'môn bắt buộc phải nhập',
        ]);
        $data=[
            $request->tenkhainiem,
            $request->noidung,
            $request->congthuc,
            $request->mon,
        ];
        $this->khainiem->suakhainiem($data,$id);

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
        $this->khainiem->xoakhainiem($id);
        $title="danh sách khái niệm";  
        return redirect()->route('admin.khainiem.index',compact('title'));
    }
    public function search(Request $request)
    {
        $tukhoa=$request->tukhoa;
        $list_khainiem=$this->khainiem->danhsachkhainiemtheotimkiem($tukhoa);
        
        $title="tìm kiếm ".$tukhoa;
        return view('admin.khainiem.search',compact('list_khainiem','title'));
    }
}
