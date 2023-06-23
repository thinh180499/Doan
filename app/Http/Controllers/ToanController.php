<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToanController extends Controller
{
    //lũy thừa mũ n
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


    //lũy thừa một phân số
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


    //lũy thừa một tích
    public function luythuacuamottich(){
        return view('toan.luythuacuamottich');
    }
    public function tinhluythuacuamottich(){
        //xét biến $a có phải là một số hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a'])){
            $a=$_POST['a'];
             //xét biến $b có phải là một số hữu hạn
            if(is_numeric($_POST['b'])&& is_finite($_POST['b'])){
                $b=$_POST['b'];
                //xét biến $c có phải là một số hữu hạn
                if(is_numeric($_POST['c']) && is_finite($_POST['c'])){
                    $c=$_POST['c'];
                    //tính kết quả
                    $ketqua=pow(($a*$b),$c);
                    //xét kết quả là số vô hạn
                    if(is_infinite($ketqua))
                    {
                        $ketqua="kết quả vượt qua giới hạn tính";
                        return view('toan.luythuacuamottich',compact('ketqua','a','b','c'));
                    }
                    else{
                        return view('toan.luythuacuamottich',compact('ketqua','a','b','c'));
                    }
                }
                else{
                    $ketqua="nhập n";
                    return view('toan.luythuacuamottich',compact('ketqua','a','b'));
                }
            }
            else{
                $ketqua="nhập b ";
                return view('toan.luythuacuamottich',compact('ketqua','a'));
            }
        }
        else{
            $ketqua="nhập a";
            return view('toan.luythuacuamottich',compact('ketqua'));
        }
    }


//lũy thừa cua một lũy thừa
public function luythuacuamotluythua(){
    return view('toan.luythuacuamotluythua');
}
public function tinhluythuacuamotluythua(){
    //xét biến $a có phải là một số hữu hạn
    if(is_numeric($_POST['a']) && is_finite($_POST['a'])){
        $a=$_POST['a'];
         //xét biến $b có phải là một số hữu hạn
        if(is_numeric($_POST['b'])&& is_finite($_POST['b'])){
            $b=$_POST['b'];
            //xét biến $c có phải là một số hữu hạn
            if(is_numeric($_POST['c']) && is_finite($_POST['c'])){
                $c=$_POST['c'];
                //tính kết quả
                $ketqua=pow($a,$b*$c);
                //xét kết quả là số vô hạn
                if(is_infinite($ketqua))
                {
                    $ketqua="kết quả vượt qua giới hạn tính";
                    return view('toan.luythuacuamotluythua',compact('ketqua','a','b','c'));
                }
                else{
                    return view('toan.luythuacuamotluythua',compact('ketqua','a','b','c'));
                }
            }
            else{
                $ketqua="nhập m";
                return view('toan.luythuacuamotluythua',compact('ketqua','a','b'));
            }
        }
        else{
            $ketqua="nhập n ";
            return view('toan.luythuacuamotluythua',compact('ketqua','a'));
        }
    }
    else{
        $ketqua="nhập a";
        return view('toan.luythuacuamotluythua',compact('ketqua'));
    }
}



//Tính tích của hai lũy thừa với cùng một cơ số:a^n*a^m
public function tichcuahailuythuacungcoso(){
    return view('toan.tichcuahailuythuacungcoso');
}
public function tinhtichcuahailuythuacungcoso(){
    //xét biến $a có phải là một số hữu hạn
    if(is_numeric($_POST['a']) && is_finite($_POST['a'])){
        $a=$_POST['a'];
         //xét biến $b có phải là một số hữu hạn
        if(is_numeric($_POST['b'])&& is_finite($_POST['b'])){
            $b=$_POST['b'];
            //xét biến $c có phải là một số hữu hạn
            if(is_numeric($_POST['c']) && is_finite($_POST['c'])){
                $c=$_POST['c'];
                //tính kết quả
                $ketqua=pow($a,$b+$c);
                //xét kết quả là số vô hạn
                if(is_infinite($ketqua))
                {
                    $ketqua="kết quả vượt qua giới hạn tính";
                    return view('toan.tichcuahailuythuacungcoso',compact('ketqua','a','b','c'));
                }
                else{
                    return view('toan.tichcuahailuythuacungcoso',compact('ketqua','a','b','c'));
                }
            }
            else{
                $ketqua="nhập m";
                return view('toan.tichcuahailuythuacungcoso',compact('ketqua','a','b'));
            }
        }
        else{
            $ketqua="nhập n";
            return view('toan.tichcuahailuythuacungcoso',compact('ketqua','a'));
        }
    }
    else{
        $ketqua="nhập a";
        return view('toan.tichcuahailuythuacungcoso',compact('ketqua'));
    }
}


//Tính thương của hai lũy thừa với cùng một cơ số:a^n*a^m
public function thuongcuahailuythuacungcoso(){
    return view('toan.thuongcuahailuythuacungcoso');
}
public function tinhthuongcuahailuythuacungcoso(){
    //xét biến $a có phải là một số hữu hạn
    if(is_numeric($_POST['a']) && is_finite($_POST['a'])){
        $a=$_POST['a'];
         //xét biến $b có phải là một số hữu hạn
        if(is_numeric($_POST['b'])&& is_finite($_POST['b'])){
            $b=$_POST['b'];
            //xét biến $c có phải là một số hữu hạn
            if(is_numeric($_POST['c']) && is_finite($_POST['c'])){
                $c=$_POST['c'];
                //tính kết quả
                $ketqua=pow($a,$b-$c);
                //xét kết quả là số vô hạn
                if(is_infinite($ketqua))
                {
                    $ketqua="kết quả vượt qua giới hạn tính";
                    return view('toan.thuongcuahailuythuacungcoso',compact('ketqua','a','b','c'));
                }
                else{
                    return view('toan.thuongcuahailuythuacungcoso',compact('ketqua','a','b','c'));
                }
            }
            else{
                $ketqua="nhập m";
                return view('toan.thuongcuahailuythuacungcoso',compact('ketqua','a','b'));
            }
        }
        else{
            $ketqua="nhập n";
            return view('toan.thuongcuahailuythuacungcoso',compact('ketqua','a'));
        }
    }
    else{
        $ketqua="nhập a";
        return view('toan.thuongcuahailuythuacungcoso',compact('ketqua'));
    }
}


    //phương trình bậc 2
    public function phuongtrinhbachai(){
        return view('toan.phuongtrinhbachai');
    }
    public function tinhphuongtrinhbachai(){
        //xét biến $a có phải là một số hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a'])){
            $a=$_POST['a'];
             //xét biến $b có phải là một số hữu hạn
            if(is_numeric($_POST['b'])&& is_finite($_POST['b']) ){
                $b=$_POST['b'];
                //xét biến $c có phải là một số hữu hạn
                if(is_numeric($_POST['c']) && is_finite($_POST['c'])){
                    $c=$_POST['c'];
                    //giải phương trình
                    if($a==0 && $b==0 && $c==0)
                    {
                        $ketqua="Phương trình: " . $a . "x2 + " . $b . "x + " . $c . " = 0";
                        return view('toan.phuongtrinhbachai',compact('ketqua'));
                    }
                    if ($a == 0) {
                        if ($b == 0) {
                            $ketqua="Phương trình vô nghiệm!";
                        } else {
                            $ketqua="Phương trình có một nghiệm: " . "x = " . (- $c / $b);
                        }
                        return view('toan.phuongtrinhbachai',compact('ketqua','a','b','c'));
                    }
                    $delta = $b * $b - 4 * $a * $c;
                    $x1 = "";
                    $x2 = "";
                    if ($delta > 0) {
                        $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
                        $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
                        $ketqua= ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
                    } else if ($delta == 0) {
                        $x1 = (- $b / (2 * $a));
                        $ketqua= ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
                    } else {
                        $ketqua= ("Phương trình vô nghiệm!");
                    }
                    return view('toan.phuongtrinhbachai',compact('ketqua','a','b','c'));
                }
                else{
                    $ketqua="nhập c";
                    return view('toan.phuongtrinhbachai',compact('ketqua','a','b'));
                }
            }
            else{
                $ketqua="nhập b ";
                return view('toan.phuongtrinhbachai',compact('ketqua','a'));
            }
        }
        else{
            $ketqua="nhập a";
            return view('toan.phuongtrinhbachai',compact('ketqua'));
        }
    }
}
