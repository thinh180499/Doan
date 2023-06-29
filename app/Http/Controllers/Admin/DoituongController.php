<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use App\Models\Doituong;

class DoituongController extends Controller
{
    private $doituong;
    public function __construct(){
        $this->doituong=new Doituong();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_doituong=$this->doituong->danhsachdoituong();
        //var_dump(Auth::user());
        $title="danh sách đối tượng";
        return view('admin.doituong.index',compact('list_doituong','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="thêm đối tượng";
        return view('admin.doituong.create',compact('title'));
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
            'kytu'=>'required',
            'dinhnghia'=>'required',
            'donvi'=>'required',
            
        ],[
            'kytu.required'=>'ký tự bắt buộc phải nhập',
            'dinhnghia.min'=>'định nghĩa phải hơn 5 ký tự',
            'donvi.required'=>'đơn vi bắt buộc phải nhập',
        ]);
        $data=[
            $request->kytu,
            $request->dinhnghia,
            $request->donvi,
        ];
        
        $this->doituong->themdoituong($data);
        return redirect()->route('admin.doituong.index');
    
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
        $doituong = $this->doituong->chitietdoituong($id);
        $title="sửa đối tượng";
        $doituong=$doituong[0];   
        return view('admin.doituong.edit',compact('doituong','title'));
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
            'kytu'=>'required',
            'dinhnghia'=>'required',
            'donvi'=>'required',
            
        ],[
            'kytu.required'=>'ký tự bắt buộc phải nhập',
            'dinhnghia.min'=>'định nghĩa phải hơn 5 ký tự',
            'donvi.required'=>'đơn vi bắt buộc phải nhập',
        ]);
        $data=[
            $request->kytu,
            $request->dinhnghia,
            $request->donvi,
        ];
        $this->doituong->suadoituong($data,$id);

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
        $this->doituong->xoadoituong($id);
        $title="danh sách đối tượng";  
        return redirect()->route('admin.doituong.index',compact('title'));
    }
}
