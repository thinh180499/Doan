<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Congthuc;

class CongthucController extends Controller
{
    private $congthuc;
    public function __construct(){
        $this->congthuc=new Congthuc();
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_congthuc=$this->congthuc->danhsachcongthuc();
        $title="danh sách công thức";
        return view('admin.congthuc.index',compact('list_congthuc','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="thêm công thức";
        return view('admin.congthuc.create',compact('title'));
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
            'tencongthuc'=>'required|min:5',
            'congthuc'=>'required',
        ],[
            'tencongthuc.required'=>'tên công thức bắt buộc phải nhập',
            'tencongthuc.min'=>'tên công thức phải hơn 5 ký tự',
            'congthuc.required'=>'công thức bắt buộc phải nhập',
        ]);
        $data=[
            $request->tencongthuc,
            $request->congthuc,
        ];
        
        $this->congthuc->themcongthuc($data);
        return redirect()->route('admin.congthuc.index');
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
        $congthuc = $this->congthuc->chitietcongthuc($id);
        $title="sửa công thức";
        $congthuc=$congthuc[0];   
        return view('admin.congthuc.edit',compact('congthuc','title'));
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
            'tencongthuc'=>'required|min:5|unique:congthucs,tencongthuc,'.$id,
            'congthuc'=>'required',
        ],[
            'tencongthuc.required'=>'tên công thức bắt buộc phải nhập',
            'tencongthuc.min'=>'tên công thức phải hơn 5 ký tự',
            'tencongthuc.unique'=>'tên công thức đã tồn tại',
            'congthuc.required'=>'công thức bắt buộc phải nhập',
        ]);
        $data=[
            $request->tencongthuc,
            $request->congthuc,
        ];
        $this->congthuc->suacongthuc($data,$id);

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
        $this->congthuc->xoacongthuc($id);
        $title="danh sách công thức";  
        return redirect()->route('admin.congthuc.index',compact('title'));
    }
    
}
