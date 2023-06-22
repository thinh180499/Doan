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
    public function tinhkhoiluongrieng(){
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
                            return view('vatly.khoiluongrieng',compact('ketqua','a','b'));
                        }
                        else{
                            return view('vatly.khoiluongrieng',compact('ketqua','a','b'));
                        }
                    }
                    else {
                        static $ketqua=0;
                        return view('vatly.khoiluongrieng',compact('ketqua','a','b'));
                    }
                }
                else{
                    $ketqua="nhập V với V khác 0";
                    return view('vatly.khoiluongrieng',compact('ketqua','a'));
                }
            }
         else
            {
                $ketqua="nhập m ";
                return view('vatly.khoiluongrieng',compact('ketqua'));
            }
    }



//trọng lượng riêng
    public function trongluongrieng(){
        return view('vatly.trongluongrieng');
    }
    public function tinhtrongluongrieng(){
           //xét biến $a có phải là một số lớn hơn 0 và hữu hạn
           if(is_numeric($_POST['a']) && is_finite($_POST['a']) && $_POST['a']>0){
               $a=$_POST['a'];
               //xét biến $b có phải là một số lớn hơn 0 và hữu hạn
               if($_POST['b'] && is_finite($_POST['b']) && $_POST['b']>0){
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
                           return view('vatly.trongluongrieng',compact('ketqua','a','b'));
                       }
                       else{
                           return view('vatly.trongluongrieng',compact('ketqua','a','b'));
                       }
                   }
                   else {
                       static $ketqua=0;
                       return view('vatly.trongluongrieng',compact('ketqua','a','b'));
                   }
               }
               else{
                   $ketqua="nhập V với V lớn hơn và khác 0";
                   return view('vatly.trongluongrieng',compact('ketqua','a'));
               }
           }
        else{
               $ketqua="nhập m";
               return view('vatly.trongluongrieng',compact('ketqua'));
           }
    }



    public function vantoc(){
        return view('vatly.vantoc');
    }
    public function tinhvantoc(){
         if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            if($b==0){
                $ketqua="nhập lại";
                return view('vatly.vantoc',compact('ketqua'));
            }
            else if($b!=0){
            $ketqua=$a/$b;
            return view('vatly.vantoc',compact('ketqua','a','b'));
            }
        }
    }


    public function thoigian(){
        return view('vatly.thoigian');
    }
    public function tinhthoigian(){
         if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            if($b==0){
                $ketqua="nhập lại";
                return view('vatly.thoigian',compact('ketqua'));
            }
            else if($b!=0){
            $ketqua=$a/$b;
            return view('vatly.thoigian',compact('ketqua','a','b'));
            }
        }
    }


    public function quangduong(){
        return view('vatly.quangduong');
    }
    public function tinhquangduong(){
         if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            if($b==0){
                $ketqua="nhập lại";
                return view('vatly.quangduong',compact('ketqua'));
            }
            else if($b!=0){
            $ketqua=$a*$b;
            return view('vatly.quangduong',compact('ketqua','a','b'));
            }
        }
    }


//lực đẩy acsimet
    public function lucacsimet(){
        return view('vatly.lucacsimet');
    }
    public function tinhlucacsimet(){
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
                    return view('vatly.lucacsimet',compact('ketqua','a','b'));
                }
                else{
                    return view('vatly.lucacsimet',compact('ketqua','a','b'));
                }
            }
            else{
                $ketqua="nhập V";
                return view('vatly.lucacsimet',compact('ketqua','a'));
            }
        }
        else{
            $ketqua="nhập d";
               return view('vatly.lucacsimet',compact('ketqua'));
        }
    }



    public function congcohoc(){
        return view('vatly.congcohoc');
    }
    public function tinhcongcohoc(){
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
    public function tinhcongsuat(){
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
    public function tinhnhietluong(){
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
    public function tinhhieusuatdongconhiet(){
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


    public function apsuat(){
        return view('vatly.apsuat');
    }
    public function tinhapsuat(){
         if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            if($b==0){
                $ketqua="nhập lại";
                return view('vatly.apsuat',compact('ketqua'));
            }
            else if($b!=0){
            $ketqua=$a/$b;
            return view('vatly.apsuat',compact('ketqua','a','b'));
            }
        }
    }


    //Cường độ dòng điện
    public function cuongdodongdien(){
        return view('vatly.cuongdodongdien');
    }
    public function tinhcuongdodongdien(){
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
    public function tinhhieudienthe(){
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
    public function tinhdientro(){
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
    public function tinhcongsuathaophi(){
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
}
