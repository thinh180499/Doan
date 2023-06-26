<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VatlyController extends Controller
{
    public function dodai(){
        return view('vatly.dodai');
    }
    public function doidodai(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'độ dài bắt buộc phải nhập',
            'a.numeric'=>'độ dài điện buộc phải là số',
            'a.min'=>'độ dài phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
            $i=$_POST['i'];
            $j=$_POST['j'];
            $x=$i;
            $y=$j;
            if($i==$j){
                $ketqua=$a;
                return view('vatly.dodai',compact('ketqua','a','x','y'));
            }
            if($i>$j){
                $ketqua=$a;

                for ($i; $i>$j; $i--) {
                    $ketqua=$ketqua/10;
                  }
                return view('vatly.dodai',compact('ketqua','a','x','y'));
            }
            if($i<$j){
                $ketqua=$a;
                for ($i; $i<$j; $i++) {
                    $ketqua=$ketqua*10;
                  }
                return view('vatly.dodai',compact('ketqua','a','x','y'));
            }

        

    }


    public function thetich(){
        return view('vatly.thetich');
    }
    public function doithetich(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'m bắt buộc phải nhập',
            'a.numeric'=>'m điện buộc phải là số',
            'a.min'=>'m phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
            $i=$_POST['i'];
            $j=$_POST['j'];
            if($a==null){
                $thongbao="nhập thể tích";
                return view('vatly.thetich',compact('i','j','thongbao'));
            }
            else if($i==$j){
                $ketqua=$a;
                if($j==5){
                    $lit=$ketqua;
                }
                else if($j>5){
                    $lit=$ketqua;
                    for ($j; $j>5; $j--) {
                        $lit=$lit/1000;
                    }
                }
                else if($j<5){
                    $lit=$ketqua;
                    for ($j; $j<5; $j++) {
                        $lit=$lit*1000;
                    }

                }
                return view('vatly.thetich',compact('ketqua','a','i','j','lit'));
            }
            else if($i>$j){
                $ketqua=$a;
                for ($i; $i>$j; $i--) {
                    $ketqua=$ketqua/1000;
                }
                if($j==5){
                    $lit=$ketqua;
                }
                else if($j>5){
                    $lit=$ketqua;
                    for ($j; $j>5; $j--) {
                        $lit=$lit/1000;
                    }
                }
                else if($j<5){
                    $lit=$ketqua;
                    for ($j; $j<5; $j++) {
                        $lit=$lit*1000;
                    }

                }
                return view('vatly.thetich',compact('ketqua','a','i','j','lit'));
            }
            else if($i<$j){
                $ketqua=$a;
                for ($i; $i<$j; $i++) {
                    $ketqua=$ketqua*1000;
                }
                if($j==5){
                    $lit=$ketqua;
                }
                else if($j>5){
                    $lit=$ketqua;
                    for ($j; $j>5; $j--) {
                        $lit=$lit/1000;
                    }
                }
                else if($j<5){
                    $lit=$ketqua;
                    for ($j; $j<5; $j++) {
                        $lit=$lit*1000;
                    }

                }
                return view('vatly.thetich',compact('ketqua','a','i','j','lit'));
            }


        

    }


    public function khoiluong(){
        return view('vatly.khoiluong');
    }
    public function doikhoiluong(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'m bắt buộc phải nhập',
            'a.numeric'=>'m điện buộc phải là số',
            'a.min'=>'m phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
            $i=$_POST['i'];
            $j=$_POST['j'];
            $x=$i;
            $y=$j;
            if($a==null){
                $thongbao="nhập khối lượng";
                return view('vatly.khoiluong',compact('thongbao','x','y'));
            }
            else if($i==$j){
                $ketqua=$a;
                return view('vatly.khoiluong',compact('ketqua','a','x','y'));
            }
            else if($i>$j){
                $ketqua=$a;

                for ($i; $i>$j; $i--) {
                    $ketqua=$ketqua/10;
                  }
                return view('vatly.khoiluong',compact('ketqua','a','x','y'));
            }
            else if($i<$j){
                $ketqua=$a;
                for ($i; $i<$j; $i++) {
                    $ketqua=$ketqua*10;
                  }
                return view('vatly.khoiluong',compact('ketqua','a','x','y'));
            }

        

    }


    //khối lượng riêng
    public function khoiluongrieng(){
        return view('vatly.khoiluongrieng');
    }
    public function tinhkhoiluongrieng(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
                'a.required'=>'khối lượng của vật bắt buộc phải nhập',
                'a.numeric'=>'khối lượng của vật buộc phải là số',
                'a.min'=>'khối lượng của vật phải lớn hơn 0.00000000000000000000001',
                'b.required'=>'Thể tích của vật bắt buộc phải nhập',
                'b.numeric'=>'Thể tích của vật bắt buộc phải là số',
                'b.min'=>'Thể tích của vật phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        //tính kết quả
        (float)$ketqua=$a/$b;
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('vatly.khoiluongrieng',compact('ketqua','a','b'));
            }
            else{
                return view('vatly.khoiluongrieng',compact('ketqua','a','b'));
            }
                   
     }
              



//trọng lượng riêng
    public function trongluongrieng(){
        return view('vatly.trongluongrieng');
    }
    public function tinhtrongluongrieng(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'trọng lượng bắt buộc phải nhập',
            'a.numeric'=>'trọng lượng buộc phải là số',
            'a.min'=>'trọng lượng phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'Thể tích bắt buộc phải nhập',
            'b.numeric'=>'Thể tích bắt buộc phải là số',
            'b.min'=>'Thể tích phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        //tính kết quả
        (float)$ketqua=$a/$b;
                   
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('vatly.trongluongrieng',compact('ketqua','a','b'));
        }
        else{
            return view('vatly.trongluongrieng',compact('ketqua','a','b'));
        }
                 
    }



    public function vantoc(){
        return view('vatly.vantoc');
    }
    public function tinhvantoc(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'quảng đường bắt buộc phải nhập',
            'a.numeric'=>'quảng đường buộc phải là số',
            'a.min'=>'quảng đường phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'Thời gian bắt buộc phải nhập',
            'b.numeric'=>'Thời gian bắt buộc phải là số',
            'b.min'=>'Thời gian phải lớn hơn 0.00000000000000000000001',
        ]);

        $a=$_POST['a'];
        $b=$_POST['b'];
        (float)$ketqua=$a/$b;
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('vatly.vantoc',compact('ketqua'));
        }
        else{
            return view('vatly.vantoc',compact('ketqua','a','b'));
        }
    }
    

    public function quangduong(){
        return view('vatly.quangduong');
    }
    public function tinhquangduong(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'vận tốc bắt buộc phải nhập',
            'a.numeric'=>'vận tốc buộc phải là số',
            'a.min'=>'vận tốc phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'thời gian bắt buộc phải nhập',
            'b.numeric'=>'thời gian bắt buộc phải là số',
            'b.min'=>'thời gian phải lớn hơn 0.00000000000000000000001',
        ]);

        $a=$_POST['a'];
        $b=$_POST['b'];
        (float)$ketqua=$a*$b;
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('vatly.quangduong',compact('ketqua'));
        }
        else{
            return view('vatly.quangduong',compact('ketqua','a','b'));
        }
    }
 

    public function thoigian(){
        return view('vatly.thoigian');
    }
    public function tinhthoigian(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'quảng đường bắt buộc phải nhập',
            'a.numeric'=>'quảng đường buộc phải là số',
            'a.min'=>'quảng đường phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'vận tốc bắt buộc phải nhập',
            'b.numeric'=>'vận tốc bắt buộc phải là số',
            'b.min'=>'vận tốc phải lớn hơn 0.00000000000000000000001',
        ]);

        $a=$_POST['a'];
        $b=$_POST['b'];
        (float)$ketqua=$a/$b;
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('vatly.thoigian',compact('ketqua'));
        }
        else{
            return view('vatly.thoigian',compact('ketqua','a','b'));
        }
    }


//lực đẩy acsimet
    public function lucacsimet(){
        return view('vatly.lucacsimet');
    }
    public function tinhlucacsimet(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'trọng lượng riêng của vật bắt buộc phải nhập',
            'a.numeric'=>'trọng lượng riêng của vật buộc phải là số',
            'a.min'=>'trọng lượng riêng của vật phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'thể tích của vật bắt buộc phải nhập',
            'b.numeric'=>'thể tích của vật bắt buộc phải là số',
            'b.min'=>'thể tích của vật phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        //tính kết quả
        $ketqua=$a*$b;
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
             return view('vatly.lucacsimet',compact('ketqua','a','b'));
        }
        else{
            return view('vatly.lucacsimet',compact('ketqua','a','b'));
        }
           
    }


    public function apsuat(){
        return view('vatly.apsuat');
    }
    public function tinhapsuat(Request $request){
         $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'lực tác dụng vào vật bắt buộc phải nhập',
            'a.numeric'=>'lực tác dụng vào vật buộc phải là số',
            'a.min'=>'lực tác dụng vào vật phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'diện tích của vật bắt buộc phải nhập',
            'b.numeric'=>'diện tích của vật bắt buộc phải là số',
            'b.min'=>'diện tích của vật phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
            
        $ketqua=$a/$b;
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
             return view('vatly.apsuat',compact('ketqua','a','b'));
        }
        else{
            return view('vatly.apsuat',compact('ketqua','a','b'));
        }
        
    }


    public function congcohoc(){
        return view('vatly.congcohoc');
    }
    public function tinhcongcohoc(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'lực tác dụng vào vật bắt buộc phải nhập',
            'a.numeric'=>'lực tác dụng vào vật buộc phải là số',
            'a.min'=>'lực tác dụng vào vật phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'quãng đường vật dịch chuyển bắt buộc phải nhập',
            'b.numeric'=>'quãng đường vật dịch chuyển bắt buộc phải là số',
            'b.min'=>'quãng đường vật dịch chuyển phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];

        $ketqua=$a*$b;
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('vatly.congcohoc',compact('ketqua','a','b'));
        }
        else{
            return view('vatly.congcohoc',compact('ketqua','a','b'));
        }
        
    }



    public function congsuat(){
        return view('vatly.congsuat');
    }
    public function tinhcongsuat(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'công của lực tác dụng vào vật bắt buộc phải nhập',
            'a.numeric'=>'công của lực tác dụng vào vật buộc phải là số',
            'a.min'=>'công của lực tác dụng vào vật phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'thời gian tác dụng bắt buộc phải nhập',
            'b.numeric'=>'thời gian tác dụng chuyển bắt buộc phải là số',
            'b.min'=>'thời gian tác dụng phải lớn hơn 0.00000000000000000000001',
        ]);
            $a=$_POST['a'];
            $b=$_POST['b'];
            $ketqua=$a/$b;
            //xét kết quả là số vô hạn
            if(is_infinite($ketqua)){
                $ketqua="kết quả vượt qua giới hạn tính";
                return view('vatly.congsuat',compact('ketqua','a','b'));
            }
            else {
            return view('vatly.congsuat',compact('ketqua','a','b'));
            }
        
    }



    //nhiệt lượng trong quá trình chuyền nhiệt ở vật
    public function nhietluong(){
        return view('vatly.nhietluong');
    }
    public function tinhnhietluong(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
            'c'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'nhiệt lượng mà vật thu vào hoặc toả ra bắt buộc phải nhập',
            'a.numeric'=>'nhiệt lượng mà vật thu vào hoặc toả ra buộc phải là số',
            'a.min'=>'nhiệt lượng mà vật thu vào hoặc toả ra phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'nhiệt dung riêng của chất bắt buộc phải nhập',
            'b.numeric'=>'nhiệt dung riêng của chất bắt buộc phải là số',
            'b.min'=>'nhiệt dung riêng của chất phải lớn hơn 0.00000000000000000000001',
            'c.required'=>'độ thay đổi nhiệt độ bắt buộc phải nhập',
            'c.numeric'=>'độ thay đổi nhiệt độ bắt buộc phải là số',
            'c.min'=>'độ thay đổi nhiệt độ phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        //tính kết quả
        $ketqua=$a*$b*$c;
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('vatly.nhietluong',compact('ketqua','a','b','c'));
        }
        else{
            return view('vatly.nhietluong',compact('ketqua','a','b','c'));
        }
                
    }



    public function hieusuatdongconhiet(){
        return view('vatly.hieusuatdongconhiet');
    }
    public function tinhhieusuatdongconhiet(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'công mà động cơ thực hiện được bắt buộc phải nhập',
            'a.numeric'=>'công mà động cơ thực hiện được buộc phải là số',
            'a.min'=>'công mà động cơ thực hiện được phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'nhiệt lượng do nhiên liệu bị đốt cháy tỏa ra bắt buộc phải nhập',
            'b.numeric'=>'nhiệt lượng do nhiên liệu bị đốt cháy tỏa ra bắt buộc phải là số',
            'b.min'=>'nhiệt lượng do nhiên liệu bị đốt cháy tỏa ra phải lớn hơn 0.00000000000000000000001',
        ]);
            $a=$_POST['a'];
            $b=$_POST['b'];
            $ketqua=$a/$b;
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
                return view('vatly.hieusuatdongconhiet',compact('ketqua','a','b'));
        }
        else{
            return view('vatly.hieusuatdongconhiet',compact('ketqua','a','b'));
        }
        
    }



    //Cường độ dòng điện
    public function cuongdodongdien(){
        return view('vatly.cuongdodongdien');
    }
    public function tinhcuongdodongdien(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'hiệu điện thế bắt buộc phải nhập',
            'a.numeric'=>'hiệu điện thế buộc phải là số',
            'a.min'=>'hiệu điện thế phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'điện trở bắt buộc phải nhập',
            'b.numeric'=>'điện trở bắt buộc phải là số',
            'b.min'=>'điện trở phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        //tính kết quả
        (float)$ketqua=$a/$b;
                    
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('vatly.cuongdodongdien',compact('ketqua','a','b'));
        }
        else{
            return view('vatly.cuongdodongdien',compact('ketqua','a','b'));
         }
    }


    //hiệu điện thế
    public function hieudienthe(){
        return view('vatly.hieudienthe');
    }
    public function tinhhieudienthe(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'cường độ dòng điện bắt buộc phải nhập',
            'a.numeric'=>'cường độ dòng điện buộc phải là số',
            'a.min'=>'cường độ dòng điện phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'điện trở bắt buộc phải nhập',
            'b.numeric'=>'điện trở bắt buộc phải là số',
            'b.min'=>'điện trở phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        //tính kết quả
        $ketqua=$a*$b;
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('vatly.hieudienthe',compact('ketqua','a','b'));
        }
        else{
            return view('vatly.hieudienthe',compact('ketqua','a','b'));
        }
           
    }


     //điện trở
     public function dientro(){
        return view('vatly.dientro');
    }
    public function tinhdientro(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'hiệu điện thế bắt buộc phải nhập',
            'a.numeric'=>'hiệu điện thế buộc phải là số',
            'a.min'=>'hiệu điện thế phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'cường độ dòng điện bắt buộc phải nhập',
            'b.numeric'=>'cường độ dòng điện buộc phải là số',
            'b.min'=>'cường độ dòng điện phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        //tính kết quả
        (float)$ketqua=$a/$b;
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('vatly.dientro',compact('ketqua','a','b'));
        }
        else{
            return view('vatly.dientro',compact('ketqua','a','b'));
        }
    }


    //công suất của dòng điện
    public function congsuatdongdien(){
        return view('vatly.congsuatdongdien');
    }
    public function tinhcongsuatdongdien(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'hiệu điện thế bắt buộc phải nhập',
            'a.numeric'=>'hiệu điện thế buộc phải là số',
            'a.min'=>'hiệu điện thế phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'cường độ dòng điện bắt buộc phải nhập',
            'b.numeric'=>'cường độ dòng điện buộc phải là số',
            'b.min'=>'cường độ dòng điện phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        //tính kết quả
        (float)$ketqua=$a*$b;
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('vatly.congsuatdongdien',compact('ketqua','a','b'));
        }
        else{
            return view('vatly.congsuatdongdien',compact('ketqua','a','b'));
        }
    }

    //công suất của dòng điện
    public function congdongdien(){
        return view('vatly.congdongdien');
    }
    public function tinhcongdongdien(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'công suất của dòng điện bắt buộc phải nhập',
            'a.numeric'=>'công suất của dòng điện buộc phải là số',
            'a.min'=>'công suất của dòng điện thế phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'thời gian bắt buộc phải nhập',
            'b.numeric'=>'thời gian buộc phải là số',
            'b.min'=>'thời gian phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        //tính kết quả
        (float)$ketqua=$a*$b;
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('vatly.congdongdien',compact('ketqua','a','b'));
        }
        else{
            return view('vatly.congdongdien',compact('ketqua','a','b'));
        }
    }


    //nhiệt lượng tỏa ra ở dây dẫn khi có dong điện
    public function nhietluongodaydan(){
        return view('vatly.nhietluongodaydan');
    }
    public function tinhnhietluongodaydan(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
            'c'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'cường độ của dòng điện bắt buộc phải nhập',
            'a.numeric'=>'cường độ của dòng điện buộc phải là số',
            'a.min'=>'cường độ của dòng điện phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'điện trở bắt buộc phải nhập',
            'b.numeric'=>'điện trở bắt buộc phải là số',
            'b.min'=>'điện trở phải lớn hơn 0.00000000000000000000001',
            'c.required'=>'điện trở bắt buộc phải nhập',
            'c.numeric'=>'điện trở bắt buộc phải là số',
            'c.min'=>'điện trở phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        //tính kết quả
        $ketqua=pow($a,2)*$b*$c;
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('vatly.nhietluongodaydan',compact('ketqua','a','b','c'));
        }
        else{
            return view('vatly.nhietluongodaydan',compact('ketqua','a','b','c'));
        }
        
    }



    //công suất hao phí do tỏa nhiệt trên đường dây
    public function congsuathaophi(){
        return view('vatly.congsuathaophi');
    }
    public function tinhcongsuathaophi(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
            'c'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'điện trở bắt buộc phải nhập',
            'a.numeric'=>'điện trở buộc phải là số',
            'a.min'=>'điện trở phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'công suất của dòng điện bắt buộc phải nhập',
            'b.numeric'=>'công suất của dòng điện bắt buộc phải là số',
            'b.min'=>'công suất của dòng điện phải lớn hơn 0.00000000000000000000001',
            'c.required'=>'hiệu điện thế bắt buộc phải nhập',
            'c.numeric'=>'hiệu điện thế bắt buộc phải là số',
            'c.min'=>'hiệu điện thế phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        //tính kết quả
        (float)$ketqua=(pow($b,2)*$a)/(pow($c,2));
        
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('vatly.congsuathaophi',compact('ketqua','a','b','c'));
        }
        else{
            return view('vatly.congsuathaophi',compact('ketqua','a','b','c'));
        }
                   
    }

}



