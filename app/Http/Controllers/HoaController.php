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


    //Tính khối lượng chất
    public function khoiluongchat(){
        return view('hoa.khoiluongchat');
    }
    public function tinhkhoiluongchat(){
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
                    return view('hoa.khoiluongchat',compact('ketqua','a','b'));
                }
                else{
                    return view('hoa.khoiluongchat',compact('ketqua','a','b'));
                }
            }
            else{
                $ketqua="nhập V<sub>dd</sub>";
                return view('hoa.khoiluongchat',compact('ketqua','a'));
            }
        }
        else{
            $ketqua="nhập C<sub>M</sub>";
               return view('hoa.khoiluongchat',compact('ketqua'));
        }
    }

    //Tính thể tích dung dịch theo nồng dộ mol thetichdungdichtheonongdomol
    public function thetichdungdichtheonongdomol(){
        return view('hoa.thetichdungdichtheonongdomol');
    }
    public function tinhthetichdungdichtheonongdomol(){
            //xét biến $a có phải là một số lớn hơn 0 và hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a']) && $_POST['a']>0){
            $a=$_POST['a'];
            //xét biến $b có phải là một số lớn hơn 0 và hữu hạn
            if($_POST['b'] && is_finite($_POST['b']) && $_POST['b']>0)
            {
                $b=$_POST['b'];
                //tính kết quả
                (float)$ketqua=$a/$b;
                //xét kết quả khác 0
                if($ketqua)
                {
                    //xét kết quả là số vô hạn
                    if(is_infinite($ketqua))
                    {
                        $ketqua="kết quả vượt qua giới hạn tính";
                        return view('hoa.thetichdungdichtheonongdomol',compact('ketqua','a','b'));
                    }
                    else{
                        return view('hoa.thetichdungdichtheonongdomol',compact('ketqua','a','b'));
                    }
                }
                else {
                    static $ketqua=0;
                    return view('hoa.thetichdungdichtheonongdomol',compact('ketqua','a','b'));
                }
            }
            else {
                $ketqua="nhập V<sub>dd</sub> với V<sub>dd</sub> khác 0";
                return view('hoa.thetichdungdichtheonongdomol',compact('ketqua','a'));
            }
        }
        else {
            $ketqua="nhập n<sub>ct</sub>";
            return view('hoa.thetichdungdichtheonongdomol',compact('ketqua'));
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



     //nồng độ phần trăm theo khối lượng chất tan
     public function nongdophantramtheokhoiluongchattan(){
        return view('hoa.nongdophantramtheokhoiluongchattan');
    }
    public function tinhnongdophantramtheokhoiluongchattan(){
        //xét biến $a có phải là một số hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a'])){
            $a=$_POST['a'];
             //xét biến $b có phải là một số hữu hạn và lớn hơn 0
            if(is_numeric($_POST['b'])&& is_finite($_POST['b'])&& $_POST['b']>0){
                $b=$_POST['b'];
                   //tính kết quả
                    $ketqua=$a*100/$b;
                    //xét kết quả là số vô hạn
                    if(is_infinite($ketqua))
                    {
                        $ketqua="kết quả vượt qua giới hạn tính";
                        return view('hoa.nongdophantramtheokhoiluongchattan',compact('ketqua','a','b'));
                    }
                    else{
                        return view('hoa.nongdophantramtheokhoiluongchattan',compact('ketqua','a','b'));
                    }

            }
            else{
                $ketqua="nhập mhh với mhh > 0";
                return view('hoa.nongdophantramtheokhoiluongchattan',compact('ketqua','a'));
            }
        }
        else{
            $ketqua="nhập mct";
            return view('hoa.nongdomoltheokhoiluongchattan',compact('ketqua'));
        }
    }

      //số mol theo nồng độ phần trăm khối lượng dung dịch
      public function moltheonongdophantramvakhoiluongdungdich(){
        return view('hoa.moltheonongdophantramvakhoiluongdungdich');
    }
    public function tinhmoltheonongdophantramvakhoiluongdungdich(){
        //xét biến $a có phải là một số hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a'])){
            $a=$_POST['a'];
             //xét biến $b có phải là một số hữu hạn
            if(is_numeric($_POST['b'])&& is_finite($_POST['b'])){
                $b=$_POST['b'];
                 //xét biến $c có phải là một số hữu hạn
                if(is_numeric($_POST['c'])&& is_finite($_POST['c'])){
                    $c=$_POST['c'];
                   //tính kết quả
                    $ketqua=($a*$b)/(100*$c);
                    //xét kết quả là số vô hạn
                    if(is_infinite($ketqua))
                    {
                        $ketqua="kết quả vượt qua giới hạn tính";
                        return view('hoa.moltheonongdophantramvakhoiluongdungdich',compact('ketqua','a','b','c'));
                    }
                    else{
                        return view('hoa.moltheonongdophantramvakhoiluongdungdich',compact('ketqua','a','b','c'));
                    }
                }
                else{
                    $ketqua="nhập M";
                    return view('hoa.moltheonongdophantramvakhoiluongdungdich',compact('ketqua','a','b','c'));
                }
            }
            else{
                $ketqua="nhập mdd";
                return view('hoa.moltheonongdophantramvakhoiluongdungdich',compact('ketqua','a','b'));
            }
        }
        else{
            $ketqua="nhập C&#37";
            return view('hoa.moltheonongdophantramvakhoiluongdungdich',compact('ketqua'));
        }
    }

     // Tính nồng độ mol theo số mol
    public function nongdomoltheosomol(){
        return view('hoa.nongdomoltheosomol');
    }
    public function tinhnongdomoltheosomol(){
            //xét biến $a có phải là một số lớn hơn 0 và hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a']) && $_POST['a']>0){
            $a=$_POST['a'];
            //xét biến $b có phải là một số lớn hơn 0 và hữu hạn
            if($_POST['b'] && is_finite($_POST['b']) && $_POST['b']>0)
            {
                $b=$_POST['b'];
                //tính kết quả
                (float)$ketqua=$a/$b;
                //xét kết quả khác 0
                if($ketqua)
                {
                    //xét kết quả là số vô hạn
                    if(is_infinite($ketqua))
                    {
                        $ketqua="kết quả vượt qua giới hạn tính";
                        return view('hoa.nongdomoltheosomol',compact('ketqua','a','b'));
                    }
                    else{
                        return view('hoa.nongdomoltheosomol',compact('ketqua','a','b'));
                    }
                }
                else {
                    static $ketqua=0;
                    return view('hoa.nongdomoltheosomol',compact('ketqua','a','b'));
                }
            }
            else {
                $ketqua="nhập V<sub>dd</sub> với V<sub>dd</sub> khác 0";
                return view('hoa.nongdomoltheosomol',compact('ketqua','a'));
            }
        }
        else {
            $ketqua="nhập n<sub>ct</sub>";
            return view('hoa.nongdomoltheosomol',compact('ketqua'));
        }
    }


    //nồng độ mol theo nồng độ phần trăm
    public function nongdomolmoltheonongdophantram(){
        return view('hoa.nongdomolmoltheonongdophantram');
    }
    public function tinhnongdomolmoltheonongdophantram(){
        //xét biến $a có phải là một số hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a'])){
            $a=$_POST['a'];
             //xét biến $b có phải là một số hữu hạn
            if(is_numeric($_POST['b'])&& is_finite($_POST['b'])){
                $b=$_POST['b'];
                 //xét biến $c có phải là một số hữu hạn
                if(is_numeric($_POST['c'])&& is_finite($_POST['c'])){
                    $c=$_POST['c'];
                   //tính kết quả
                    $ketqua=(10*$a*$b)/($c);
                    //xét kết quả là số vô hạn
                    if(is_infinite($ketqua))
                    {
                        $ketqua="kết quả vượt qua giới hạn tính";
                        return view('hoa.nongdomolmoltheonongdophantram',compact('ketqua','a','b','c'));
                    }
                    else{
                        return view('hoa.nongdomolmoltheonongdophantram',compact('ketqua','a','b','c'));
                    }
                }
                else{
                    $ketqua="nhập M";
                    return view('hoa.nongdomolmoltheonongdophantram',compact('ketqua','a','b'));
                }
            }
            else{
                $ketqua="nhập D";
                return view('hoa.nongdomolmoltheonongdophantram',compact('ketqua','a'));
            }
        }
        else{
            $ketqua="nhập C&#37";
            return view('hoa.nongdomolmoltheonongdophantram',compact('ketqua'));
        }
    }


    //nồng độ mol theo nồng độ phần trăm
    public function nongdophantramtheonongdomol(){
        return view('hoa.nongdophantramtheonongdomol');
    }
    public function tinhnongdophantramtheonongdomol(){
        //xét biến $a có phải là một số hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a'])){
            $a=$_POST['a'];
             //xét biến $b có phải là một số hữu hạn
            if(is_numeric($_POST['b'])&& is_finite($_POST['b'])){
                $b=$_POST['b'];
                 //xét biến $c có phải là một số hữu hạn
                if(is_numeric($_POST['c'])&& is_finite($_POST['c'])){
                    $c=$_POST['c'];
                   //tính kết quả
                    $ketqua=($a*$b)/(10*$c);
                    //xét kết quả là số vô hạn
                    if(is_infinite($ketqua))
                    {
                        $ketqua="kết quả vượt qua giới hạn tính";
                        return view('hoa.nongdophantramtheonongdomol',compact('ketqua','a','b','c'));
                    }
                    else{
                        return view('hoa.nongdophantramtheonongdomol',compact('ketqua','a','b','c'));
                    }
                }
                else{
                    $ketqua="nhập D";
                    return view('hoa.nongdophantramtheonongdomol',compact('ketqua','a','b'));
                }
            }
            else{
                $ketqua="nhập M";
                return view('hoa.nongdophantramtheonongdomol',compact('ketqua','a'));
            }
        }
        else{
            $ketqua="nhập CM";
            return view('hoa.nongdophantramtheonongdomol',compact('ketqua'));
        }
    }
}
