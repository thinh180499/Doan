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
            if(is_numeric($_POST['b']) && is_finite($_POST['b'])){
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
    public function luythuacuamotphanso(){
        return view('toan.luythuacuamotphanso');
    }
    public function tinhluythuacuamotphanso(){
        //xét biến $a có phải là một số hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a'])){
            $a=$_POST['a'];
             //xét biến $b có phải là một số hữu hạn và khác 0
            if(is_numeric($_POST['b'])&& is_finite($_POST['b']) && $_POST['b']){
                $b=$_POST['b'];
                //xét biến $c có phải là một số hữu hạn
                if(is_numeric($_POST['c']) && is_finite($_POST['c'])){
                    $c=$_POST['c'];
                    //tính kết quả
                    $ketqua=pow(($a/$b),$c);
                    //xét kết quả là số vô hạn
                    if(is_infinite($ketqua))
                    {
                        $ketqua="kết quả vượt qua giới hạn tính";
                        return view('toan.luythuacuamotphanso',compact('ketqua','a','b','c'));
                    }
                    else{
                        return view('toan.luythuacuamotphanso',compact('ketqua','a','b','c'));
                    }
                }
                else{
                    $ketqua="nhập n";
                    return view('toan.luythuacuamotphanso',compact('ketqua','a','b'));
                }
            }
            else{
                $ketqua="nhập b với b khác 0";
                return view('toan.luythuacuamotphanso',compact('ketqua','a'));
            }
        }
        else{
            $ketqua="nhập a";
            return view('toan.luythuacuamotphanso',compact('ketqua'));
        }
    }
}
