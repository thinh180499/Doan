<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToanController extends Controller
{
    public function luythuamunguyenduong(){
        return view('toan.luythuamunguyenduong');
    }
    public function tinhluythuamunguyenduong(){
        if(isset($_POST['='])&&($_POST['='])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            $ketqua=pow($a,$b);
            return view('toan.luythuamunguyenduong',compact('ketqua','a','b'));
        }
        return view('toan.luythuamunguyenduong');
    }
}
