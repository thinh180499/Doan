<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoaController extends Controller
{
    //Tính số mol theo khối lượng
    public function moltheokhoiluong(){
        return view('hoa.moltheokhoiluong');
    }
    public function tinhmoltheokhoiluong(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'m bắt buộc phải nhập',
            'a.numeric'=>'m điện buộc phải là số',
            'a.min'=>'m phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'M bắt buộc phải nhập',
            'b.numeric'=>'M bắt buộc phải là số',
            'b.min'=>'M phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
       
        (float)$ketqua=$a/$b;
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('hoa.moltheokhoiluong',compact('ketqua','a','b'));
        }
        else{
            return view('hoa.moltheokhoiluong',compact('ketqua','a','b'));
        }
    }


//Tính số mol theo khối lượng
public function moltheothetich(){
    return view('hoa.moltheothetich');
}
public function tinhmoltheothetich(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
    ],[
        'a.required'=>'m bắt buộc phải nhập',
        'a.numeric'=>'m điện buộc phải là số',
        'a.min'=>'m phải lớn hơn 0.00000000000000000000001',
    ]);
    $a=$_POST['a'];
   
    (float)$ketqua=$a/22.4;
    //xét kết quả là số vô hạn
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('hoa.moltheothetich',compact('ketqua','a'));
    }
    else{
        return view('hoa.moltheothetich',compact('ketqua','a'));
    }
}



    //Tính số mol theo nồng độ mol và thể tích dung dịch
    public function moltheonongdomolvathetichdungdich(){
        return view('hoa.moltheonongdomolvathetichdungdich');
    }
    public function tinhmoltheonongdomolvathetichdungdich(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'nồng độ mol bắt buộc phải nhập',
            'a.numeric'=>'nồng độ mol buộc phải là số',
            'a.min'=>'nồng độ mol phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'thể tích dung dịch bắt buộc phải nhập',
            'b.numeric'=>'thể tích dung dịch điện buộc phải là số',
            'b.min'=>'thể tích dung dịch phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        //tính kết quả
        $ketqua=$a*$b;
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('hoa.moltheonongdomolvathetichdungdich',compact('ketqua','a','b'));
        }
        else{
            return view('hoa.moltheonongdomolvathetichdungdich',compact('ketqua','a','b'));
        }
    }


    //số mol theo nồng độ phần trăm khối lượng dung dịch
      public function moltheonongdophantramvakhoiluongdungdich(){
        return view('hoa.moltheonongdophantramvakhoiluongdungdich');
    }
    public function tinhmoltheonongdophantramvakhoiluongdungdich(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
            'c'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'nồng độ phần trăm bắt buộc phải nhập',
            'a.numeric'=>'nồng độ phần trăm buộc phải là số',
            'a.min'=>'nồng độ phần trăm phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'khối lượng dung dịch bắt buộc phải nhập',
            'b.numeric'=>'khối lượng dung dịch điện buộc phải là số',
            'b.min'=>'khối lượng dung dịch phải lớn hơn 0.00000000000000000000001',
            'c.required'=>'khối lượng mol bắt buộc phải nhập',
            'c.numeric'=>'khối lượng mol buộc phải là số',
            'c.min'=>'khối lượng mol phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        //tính kết quả
        $ketqua=($a*$b)/(100*$c);
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)) {
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('hoa.moltheonongdophantramvakhoiluongdungdich',compact('ketqua','a','b','c'));
        }
        else{
            return view('hoa.moltheonongdophantramvakhoiluongdungdich',compact('ketqua','a','b','c'));
        }
    }

    //số mol theo nồng độ phần trăm thể tích dung dich
    public function moltheonongdophantramvathetichdungdich(){
        return view('hoa.moltheonongdophantramvathetichdungdich');
    }
    public function tinhmoltheonongdophantramvathetichdungdich(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
            'c'=>'required|numeric|min:0.00000000000000000000001',
            'd'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'nồng độ phần trăm bắt buộc phải nhập',
            'a.numeric'=>'nồng độ phần trăm buộc phải là số',
            'a.min'=>'nồng độ phần trăm phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'thể tích dung dịch bắt buộc phải nhập',
            'b.numeric'=>'thể tích dung dịch điện buộc phải là số',
            'b.min'=>'thể tích dung dịch phải lớn hơn 0.00000000000000000000001',
            'c.required'=>'khối lượng riêng bắt buộc phải nhập',
            'c.numeric'=>'khối lượng riêng buộc phải là số',
            'c.min'=>'khối lượng riêng phải lớn hơn 0.00000000000000000000001',
            'd.required'=>'khối lượng mol bắt buộc phải nhập',
            'd.numeric'=>'khối lượng mol buộc phải là số',
            'd.min'=>'khối lượng mol phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        $d=$_POST['d'];
        //tính kết quả
        $ketqua=($a*$b*$c)/(100*$d);
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)) {
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('hoa.moltheonongdophantramvakhoiluongdungdich',compact('ketqua','a','b','c','d'));
        }
        else{
            return view('hoa.moltheonongdophantramvakhoiluongdungdich',compact('ketqua','a','b','c','d'));
        }
    }


      //nồng độ phần trăm theo khối lượng chất tan
      public function nongdophantramtheokhoiluongchattan(){
        return view('hoa.nongdophantramtheokhoiluongchattan');
    }
    public function tinhnongdophantramtheokhoiluongchattan(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'khối lượng chất tan bắt buộc phải nhập',
            'a.numeric'=>'khối lượng chất tan buộc phải là số',
            'a.min'=>'khối lượng chất tan phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'khối lượng dung dịch bắt buộc phải nhập',
            'b.numeric'=>'khối lượng dung dịch điện buộc phải là số',
            'b.min'=>'khối lượng dung dịch phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
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


     //nồng độ phần trăm theo nồng độ mol
     public function nongdophantramtheonongdomol(){
        return view('hoa.nongdophantramtheonongdomol');
    }
    public function tinhnongdophantramtheonongdomol(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
            'c'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'nồng độ mol bắt buộc phải nhập',
            'a.numeric'=>'nồng độ mol buộc phải là số',
            'a.min'=>'nồng độ mol phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'khối lượng mol bắt buộc phải nhập',
            'b.numeric'=>'khối lượng mol điện buộc phải là số',
            'b.min'=>'khối lượng mol phải lớn hơn 0.00000000000000000000001',
            'c.required'=>'khối lượng riêng bắt buộc phải nhập',
            'c.numeric'=>'khối lượng riêng buộc phải là số',
            'c.min'=>'khối lượng riêng phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
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


      // Tính nồng độ mol theo số mol
      public function nongdomoltheosomol(){
        return view('hoa.nongdomoltheosomol');
    }
    public function tinhnongdomoltheosomol(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
                'a.required'=>'số mol chất tan bắt buộc phải nhập',
                'a.numeric'=>'số mol chất tan bắt buộc phải là số',
                'a.min'=>'số mol chất tan phải lớn hơn 0.00000000000000000000001',
                'b.required'=>'Thể tích dung dịch bắt buộc phải nhập',
                'b.numeric'=>'Thể tích dung dịch bắt buộc phải là số',
                'b.min'=>'Thể tích dung dịch phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        //tính kết quả
        (float)$ketqua=$a/$b;
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('hoa.nongdomoltheosomol',compact('ketqua','a','b'));
        }
        else{
            return view('hoa.nongdomoltheosomol',compact('ketqua','a','b'));
         }
    }


    //nồng độ mol theo nồng độ phần trăm
    public function nongdomolmoltheonongdophantram(){
        return view('hoa.nongdomolmoltheonongdophantram');
    }
    public function tinhnongdomolmoltheonongdophantram(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
            'c'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'khối lượng mol bắt buộc phải nhập',
            'a.numeric'=>'khối lượng mol buộc phải là số',
            'a.min'=>'khối lượng mol phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'nồng độ phần trăm bắt buộc phải nhập',
            'b.numeric'=>'nồng độ phần trăm điện buộc phải là số',
            'b.min'=>'nồng độ phần trăm phải lớn hơn 0.00000000000000000000001',
            'c.required'=>'khối lượng mol bắt buộc phải nhập',
            'c.numeric'=>'khối lượng mol buộc phải là số',
            'c.min'=>'khối lượng mol phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
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




    //Tính khối lượng chất
    public function khoiluongchat(){
        return view('hoa.khoiluongchat');
    }
    public function tinhkhoiluongchat(Request $request){
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
    public function tinhthetichdungdichtheonongdomol(Request $request){
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
                $ketqua="nhập C<sub>M</sub> với C<sub>M</sub> khác 0";
                return view('hoa.thetichdungdichtheonongdomol',compact('ketqua','a'));
            }
        }
        else {
            $ketqua="nhập n";
            return view('hoa.thetichdungdichtheonongdomol',compact('ketqua'));
        }
    }


    //Tính thể tích dung dịch theo khối lượng dung dịch thetichdungdichtheokhoiluongdungdich
    public function thetichdungdichtheokhoiluongdungdich(){
        return view('hoa.thetichdungdichtheokhoiluongdungdich');
    }
    public function tinhthetichdungdichtheokhoiluongdungdich(Request $request){
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
                        return view('hoa.thetichdungdichtheokhoiluongdungdich',compact('ketqua','a','b'));
                    }
                    else{
                        return view('hoa.thetichdungdichtheokhoiluongdungdich',compact('ketqua','a','b'));
                    }
                }
                else {
                    static $ketqua=0;
                    return view('hoa.thetichdungdichtheokhoiluongdungdich',compact('ketqua','a','b'));
                }
            }
            else {
                $ketqua="nhập D với D khác 0";
                return view('hoa.thetichdungdichtheokhoiluongdungdich',compact('ketqua','a'));
            }
        }
        else {
            $ketqua="nhập m<sub>dd</sub>";
            return view('hoa.thetichdungdichtheokhoiluongdungdich',compact('ketqua'));
        }
    }


     //phần trăm khối lượng chất a
     public function phantramkhoiluongchata(){
        return view('hoa.phantramkhoiluongchata');
    }
    public function tinhphantramkhoiluongchata(Request $request){
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
    public function tinhkhoiluongchattan(Request $request){
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
