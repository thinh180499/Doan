<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoaController extends Controller
{
    //Tính số mol theo khối lượng
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

    //Tính số mol theo nồng độ mol và thể tích dung dịch
    public function moltheonongdomolvathetichdungdich(){
        return view('hoa.moltheonongdomolvathetichdungdich');
    }
    public function tinhmoltheonongdomolvathetichdungdich(){
         //xét biến $a có phải là một số lớn hơn 0 và hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a']) && $_POST['a']>0){
            $a=$_POST['a'];
             //xét biến $b có phải là một số lớn hơn 0 và hữu hạn
            if($_POST['b'] && is_finite($_POST['b']) && $_POST['b']>0){
                $b=$_POST['b'];
                //tính kết quả
                $ketqua=$a*$b;
                //xét kết quả là số vô hạn
                if(is_infinite($ketqua))
                {
                    $ketqua="kết quả vượt qua giới hạn tính";
                    return view('hoa.moltheonongdomolvathetichdungdich',compact('ketqua','a','b'));
                }
                else{
                    return view('hoa.moltheonongdomolvathetichdungdich',compact('ketqua','a','b'));
                }
            }
            else{
                $ketqua="nhập V<sub>dd</sub>";
                return view('hoa.moltheonongdomolvathetichdungdich',compact('ketqua','a'));
            }
        }
        else{
            $ketqua="nhập C<sub>M</sub>";
               return view('hoa.moltheonongdomolvathetichdungdich',compact('ketqua'));
        }
    }

     //phần trăm khối lượng chất a
     public function phantramkhoiluongchata(){
        return view('hoa.phantramkhoiluongchata');
    }
    public function tinhphantramkhoiluongchata(){
        //xét biến $a có phải là một số hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a'])){
            $a=$_POST['a'];
             //xét biến $b có phải là một số hữu hạn và khác 0
            if(is_numeric($_POST['b'])&& is_finite($_POST['b']) && $_POST['b']){
                $b=$_POST['b'];
                   //tính kết quả
                    $ketqua=$a/$b*100;
                    //xét kết quả là số vô hạn
                    if(is_infinite($ketqua))
                    {
                        $ketqua="kết quả vượt qua giới hạn tính";
                        return view('hoa.phantramkhoiluongchata',compact('ketqua','a','b'));
                    }
                    else{
                        return view('hoa.phantramkhoiluongchata',compact('ketqua','a','b'));
                    }
               
            }
            else{
                $ketqua="nhập mhh với mhh khác 0";
                return view('hoa.phantramkhoiluongchata',compact('ketqua','a'));
            }
        }
        else{
            $ketqua="nhập mA";
            return view('hoa.phantramkhoiluongchata',compact('ketqua'));
        }
    }



    //khối lượng chất tana
    public function khoiluongchattan(){
        return view('hoa.khoiluongchattan');
    }
    public function tinhkhoiluongchattan(){
        //xét biến $a có phải là một số hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a'])){
            $a=$_POST['a'];
             //xét biến $b có phải là một số hữu hạn
            if(is_numeric($_POST['b'])&& is_finite($_POST['b'])){
                $b=$_POST['b'];
                   //tính kết quả
                    $ketqua=$a*$b/100;
                    //xét kết quả là số vô hạn
                    if(is_infinite($ketqua))
                    {
                        $ketqua="kết quả vượt qua giới hạn tính";
                        return view('hoa.khoiluongchattan',compact('ketqua','a','b'));
                    }
                    else{
                        return view('hoa.khoiluongchattan',compact('ketqua','a','b'));
                    }
               
            }
            else{
                $ketqua="nhập mhh với Vdd";
                return view('hoa.khoiluongchattan',compact('ketqua','a'));
            }
        }
        else{
            $ketqua="nhập C&#37;";
            return view('hoa.khoiluongchattan',compact('ketqua'));
        }
    }
}
