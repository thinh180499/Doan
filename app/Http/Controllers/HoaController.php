<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoaController extends Controller
{
    public function moltheokhoiluong(){
        return view('hoa.moltheokhoiluong');
    }
    public function tinhmoltheokhoiluong(){
        if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            if($b==0){
                $ketqua="nhập lại";
                return view('hoa.moltheokhoiluong',compact('ketqua'));
            }
            else if($b!=0){
                $ketqua=$a/$b;
                return view('hoa.moltheokhoiluong',compact('ketqua','a','b'));
            }
           
        }
    }
}
