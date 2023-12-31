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
    public function khoiluongrieng(){
        return view('vatly.khoiluongrieng');
    }
    public function tinhkhoiluongrieng(){
        if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            if($b==0){
                $ketqua="nhập lại V";
                return view('vatly.khoiluongrieng',compact('ketqua'));
            }
            else if($b!=0){
                $ketqua=$a/$b;
                return view('vatly.khoiluongrieng',compact('ketqua','a','b'));
            }
           
        }
    }
    
    public function trongluongrieng(){
        return view('vatly.trongluongrieng');
    }
    public function tinhtrongluongrieng(){
        if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            if($b==0){
                $ketqua="nhập lại V";
                return view('vatly.trongluongrieng',compact('ketqua'));
            }
            else if($b!=0){
                $ketqua=$a/$b;
                return view('vatly.trongluongrieng',compact('ketqua','a','b'));
            }
           
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
    public function nhietluong(){
        return view('vatly.nhietluong');
    }
    public function tinhnhietluong(){
         if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            $c=$_POST['c'];
        
            $ketqua=pow($a,2)*$b*$c;
            return view('vatly.nhietluong',compact('ketqua','a','b','c'));
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
    public function lucacsimet(){
        return view('vatly.lucacsimet');
    }
    public function tinhlucacsimet(){
         if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            if($b==0){
                $ketqua="nhập lại";
                return view('vatly.lucacsimet',compact('ketqua'));
            }
            else if($b!=0){
            $ketqua=$a*$b;
            return view('vatly.lucacsimet',compact('ketqua','a','b'));
            }
        }
    }
    public function congsuathaophi(){
        return view('vatly.congsuathaophi');
    }
    public function tinhcongsuathaophi(){
         if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            $c=$_POST['c'];
            if($c==0){
                $ketqua="nhập lại";
                return view('vatly.congsuathaophi',compact('ketqua'));
            }
            else if($b!=0){
                $ketqua=(pow($b,2)*$a)/(pow($c,2));
                return view('vatly.congsuathaophi',compact('ketqua','a','b','c'));
            }
        }
    }
}
