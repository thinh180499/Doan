<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToanController extends Controller
{
    public function luythuamunguyenduong(){
        return view('toan.luythuamunguyenduong');
    }
    public function tinhluythuamunguyenduong(){
        //xét biến $a có phải là một số hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a'])){
            $a=$_POST['a'];
             //xét biến $b có phải là một số hữu hạn
            if($_POST['b'] && is_finite($_POST['b'])){
                $b=$_POST['b'];
                //tính kết quả
                $ketqua=pow($a,$b);
                //xét kết quả là số vô hạn
                if(is_infinite($ketqua))
                {
                    $ketqua="kết quả vượt qua giới hạn tính";
                    return view('toan.luythuamunguyenduong',compact('ketqua','a','b'));
                }
                else{
                    return view('toan.luythuamunguyenduong',compact('ketqua','a','b'));
                }
            }
            else{
                $ketqua="nhập n";
                return view('toan.luythuamunguyenduong',compact('ketqua','a'));
            }
        }
        else{
            $ketqua="nhập a";
            return view('toan.luythuamunguyenduong',compact('ketqua'));
        }
    }
}
