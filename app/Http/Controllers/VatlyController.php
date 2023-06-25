<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VatlyController extends Controller
{
    public function dodai(){
        return view('vatly.dodai');
    }
    public function doidodai(){
        if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $i=$_POST['i'];
            $j=$_POST['j'];
            $x=$i;
            $y=$j;
            if($a==null){
                $thongbao="nhập độ dài";
                return view('vatly.dodai',compact('thongbao','x','y'));
            }
            else if($i==$j){
                $ketqua=$a;
                return view('vatly.dodai',compact('ketqua','a','x','y'));
            }
            else if($i>$j){
                $ketqua=$a;

                for ($i; $i>$j; $i--) {
                    $ketqua=$ketqua/10;
                  }
                return view('vatly.dodai',compact('ketqua','a','x','y'));
            }
            else if($i<$j){
                $ketqua=$a;
                for ($i; $i<$j; $i++) {
                    $ketqua=$ketqua*10;
                  }
                return view('vatly.dodai',compact('ketqua','a','x','y'));
            }

        }

    }


    public function thetich(){
        return view('vatly.thetich');
    }
    public function doithetich(){
        if(isset($_POST['='])&&($_POST['='])){
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

    }


    public function khoiluong(){
        return view('vatly.khoiluong');
    }
    public function doikhoiluong(){
        if(isset($_POST['='])&&($_POST['='])){
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
        if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $b=$_POST['b'];

            $ketqua=$a*$b;
            return view('vatly.congcohoc',compact('ketqua','a','b'));


        }
    }



    public function congsuat(){
        return view('vatly.congsuat');
    }
    public function tinhcongsuat(Request $request){
         if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            if($b==0){
                $ketqua="nhập lại";
                return view('vatly.congsuat',compact('ketqua'));
            }
            else if($b!=0){
            $ketqua=$a/$b;
            return view('vatly.congsuat',compact('ketqua','a','b'));
            }
        }
    }



    //nhiệt lượng trong quá trình chuyền nhiệt ở vật
    public function nhietluong(){
        return view('vatly.nhietluong');
    }
    public function tinhnhietluong(Request $request){
         //xét biến $a có phải là một số lớn hơn 0 và hữu hạn
         if(is_numeric($_POST['a']) && is_finite($_POST['a']) && $_POST['a']>0){
             $a=$_POST['a'];
              //xét biến $b có phải là một số lớn hơn 0 và hữu hạn
             if($_POST['b'] && is_finite($_POST['b']) && $_POST['b']>0){
                 $b=$_POST['b'];
                 //xét biến $c có phải là một số lớn hơn 0 và hữu hạn
                if(is_numeric($_POST['c']) && is_finite($_POST['c']) && $_POST['c']>0){
                    $c=$_POST['c'];
                    //tính kết quả
                    $ketqua=$a*$b*$c;
                     //xét kết quả là số vô hạn
                    if(is_infinite($ketqua))
                    {
                        $ketqua="kết quả vượt qua giới hạn tính";
                        return view('vatly.nhietluong',compact('ketqua','a','b','c'));
                    }
                    else{
                        return view('vatly.nhietluong',compact('ketqua','a','b','c'));
                    }
                }
                else{
                    $ketqua="nhập &#916;t";
                    return view('vatly.nhietluong',compact('ketqua','a','b'));
                }
             }
             else{
                 $ketqua="nhập c";
                 return view('vatly.nhietluong',compact('ketqua','a'));
             }
         }
         else{
             $ketqua="nhập m";
                return view('vatly.nhietluong',compact('ketqua'));
         }
    }



    public function hieusuatdongconhiet(){
        return view('vatly.hieusuatdongconhiet');
    }
    public function tinhhieusuatdongconhiet(Request $request){
         if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            if($b==0){
                $ketqua="nhập lại";
                return view('vatly.hieusuatdongconhiet',compact('ketqua'));
            }
            else if($b!=0){
            $ketqua=$a/$b;
            return view('vatly.hieusuatdongconhiet',compact('ketqua','a','b'));
            }
        }
    }



    //Cường độ dòng điện
    public function cuongdodongdien(){
        return view('vatly.cuongdodongdien');
    }
    public function tinhcuongdodongdien(Request $request){
            //xét biến $a có phải là một số lớn hơn 0 và hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a']) && $_POST['a']>0)
            {
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
                            return view('vatly.cuongdodongdien',compact('ketqua','a','b'));
                        }
                        else{
                            return view('vatly.cuongdodongdien',compact('ketqua','a','b'));
                        }
                    }
                    else {
                        static $ketqua=0;
                        return view('vatly.cuongdodongdien',compact('ketqua','a','b'));
                    }
                }
                else{
                    $ketqua="nhập R với R khác 0";
                    return view('vatly.cuongdodongdien',compact('ketqua','a'));
                }
            }
         else
            {
                $ketqua="nhập U ";
                return view('vatly.cuongdodongdien',compact('ketqua'));
            }
    }


    //hiệu điện thế
    public function hieudienthe(){
        return view('vatly.hieudienthe');
    }
    public function tinhhieudienthe(Request $request){
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
                    return view('vatly.hieudienthe',compact('ketqua','a','b'));
                }
                else{
                    return view('vatly.hieudienthe',compact('ketqua','a','b'));
                }
            }
            else{
                $ketqua="nhập R";
                return view('vatly.hieudienthe',compact('ketqua','a'));
            }
        }
        else{
            $ketqua="nhập I";
               return view('vatly.hieudienthe',compact('ketqua'));
        }
    }


     //điện trở
     public function dientro(){
        return view('vatly.dientro');
    }
    public function tinhdientro(Request $request){
            //xét biến $a có phải là một số lớn hơn 0 và hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a']) && $_POST['a']>0)
            {
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
                            return view('vatly.dientro',compact('ketqua','a','b'));
                        }
                        else{
                            return view('vatly.dientro',compact('ketqua','a','b'));
                        }
                    }
                    else {
                        static $ketqua=0;
                        return view('vatly.dientro',compact('ketqua','a','b'));
                    }
                }
                else{
                    $ketqua="nhập I với I khác 0";
                    return view('vatly.dientro',compact('ketqua','a'));
                }
            }
         else
            {
                $ketqua="nhập U ";
                return view('vatly.dientro',compact('ketqua'));
            }
    }


    //công suất hao phí do tỏa nhiệt trên đường dây
    public function congsuathaophi(){
        return view('vatly.congsuathaophi');
    }
    public function tinhcongsuathaophi(Request $request){
         //xét biến $a có phải là một số lớn hơn 0 và hữu hạn
         if(is_numeric($_POST['a']) && is_finite($_POST['a']) && $_POST['a']>0)
         {
             $a=$_POST['a'];
             //xét biến $b có phải là một số lớn hơn 0 và hữu hạn
            if(is_numeric($_POST['b']) && is_finite($_POST['b']) && $_POST['b']>0){
             $b=$_POST['b'];
             //xét biến $c có phải là một số lớn hơn 0 và hữu hạn
                if($_POST['c'] && is_finite($_POST['c']) && $_POST['c']>0){
                    $c=$_POST['c'];
                    //tính kết quả
                    (float)$ketqua=(pow($b,2)*$a)/(pow($c,2));
                    //xét kết quả khác 0
                    if($ketqua)
                    {
                        //xét kết quả là số vô hạn
                        if(is_infinite($ketqua))
                        {
                            $ketqua="kết quả vượt qua giới hạn tính";
                            return view('vatly.congsuathaophi',compact('ketqua','a','b','c'));
                        }
                        else{
                            return view('vatly.congsuathaophi',compact('ketqua','a','b','c'));
                        }
                    }
                    else {
                        static $ketqua=0;
                        return view('vatly.congsuathaophi',compact('ketqua','a','b','c'));
                    }
                }
                else{
                    $ketqua="nhập U với U khác 0";
                    return view('vatly.congsuathaophi',compact('ketqua','a','b'));
                }
            }
            else{
                $ketqua="nhập P ";
                return view('vatly.congsuathaophi',compact('ketqua','a'));
            }
         }
      else
         {
             $ketqua="nhập R ";
             return view('vatly.congsuathaophi',compact('ketqua'));
         }
    }


    //nhiệt lượng tỏa ra ở dây dẫn khi có dong điện
    public function nhietluongodaydan(){
        return view('vatly.nhietluongodaydan');
    }
    public function tinhnhietluongodaydan(Request $request){
        //xét biến $a có phải là một số lớn hơn 0 và hữu hạn
        if(is_numeric($_POST['a']) && is_finite($_POST['a']) && $_POST['a']>0){
             $a=$_POST['a'];
            //xét biến $b có phải là một số lớn hơn 0 và hữu hạn
            if($_POST['b'] && is_finite($_POST['b']) && $_POST['b']>0){
                $b=$_POST['b'];
                //xét biến $c có phải là một số lớn hơn 0 và hữu hạn
                if(is_numeric($_POST['c']) && is_finite($_POST['c']) && $_POST['c']>0){
                    $c=$_POST['c'];
                    //tính kết quả
                    $ketqua=pow($a,2)*$b*$c;
                    //xét kết quả là số vô hạn
                    if(is_infinite($ketqua))
                    {
                        $ketqua="kết quả vượt qua giới hạn tính";
                        return view('vatly.nhietluongodaydan',compact('ketqua','a','b','c'));
                    }
                    else{
                        return view('vatly.nhietluongodaydan',compact('ketqua','a','b','c'));
                    }
                }
                else{
                    $ketqua="nhập t";
                    return view('vatly.nhietluongodaydan',compact('ketqua','a','b'));
                }
            }
            else{
                $ketqua="nhập R";
                return view('vatly.nhietluongodaydan',compact('ketqua','a'));
            }
        }
        else{
            $ketqua="nhập I";
            return view('vatly.nhietluongodaydan',compact('ketqua'));
        }
    }

}



