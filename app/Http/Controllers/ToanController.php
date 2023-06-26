<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToanController extends Controller
{
    //lũy thừa mũ n
    public function luythuamunguyenduong(){
        return view('toan.luythuamunguyenduong');
    }
    public function tinhluythuamunguyenduong(Request $request){
        $request->validate([
            'a'=>'required|numeric',
            'b'=>'required|numeric',
        ],[
            'a.required'=>'a bắt buộc phải nhập',
            'a.numeric'=>'a điện buộc phải là số',
            'b.required'=>'n bắt buộc phải nhập',
            'b.numeric'=>'n bắt buộc phải là số',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        $ketqua=pow($a,$b);
                //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('toan.luythuamunguyenduong',compact('ketqua','a','b'));
        }
        else{
            return view('toan.luythuamunguyenduong',compact('ketqua','a','b'));
        }
    }


    //lũy thừa một phân số
    public function luythuacuamotphanso(){
        return view('toan.luythuacuamotphanso');
    }
    public function tinhluythuacuamotphanso(Request $request){
        $request->validate([
            'a'=>'required|numeric',
            'b'=>'required|numeric',
            'c'=>'required|numeric',
        ],[
            'a.required'=>'a bắt buộc phải nhập',
            'a.numeric'=>'a buộc phải là số',
            'b.required'=>'b bắt buộc phải nhập',
            'b.numeric'=>'b bắt buộc phải là số',
            'c.required'=>'n bắt buộc phải nhập',
            'c.numeric'=>'n bắt buộc phải là số',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        //tính kết quả
        if($b==0)
        {
            $err='phải khác 0';
            return view('toan.luythuacuamotphanso',compact('err','a','b','c'));
        }
         $ketqua=pow(($a/$b),$c);
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('toan.luythuacuamotphanso',compact('ketqua','a','b','c'));
        }
        else{
             return view('toan.luythuacuamotphanso',compact('ketqua','a','b','c'));
        }            
                
    }

    //lũy thừa một tích
    public function luythuacuamottich(){
        return view('toan.luythuacuamottich');
    }
    public function tinhluythuacuamottich(Request $request){
        $request->validate([
            'a'=>'required|numeric',
            'b'=>'required|numeric',
            'c'=>'required|numeric',
            ],[
            'a.required'=>'a bắt buộc phải nhập',
            'a.numeric'=>'a buộc phải là số',
            'b.required'=>'b bắt buộc phải nhập',
            'b.numeric'=>'b bắt buộc phải là số',
            'c.required'=>'n bắt buộc phải nhập',
            'c.numeric'=>'n bắt buộc phải là số',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        //tính kết quả
        $ketqua=pow(($a*$b),$c);
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('toan.luythuacuamottich',compact('ketqua','a','b','c'));
        }
        else{
            return view('toan.luythuacuamottich',compact('ketqua','a','b','c'));
        }
               
    }


    //Tính tích của hai lũy thừa với cùng một cơ số:a^n*a^m
    public function tichcuahailuythuacungcoso(){
        return view('toan.tichcuahailuythuacungcoso');
    }
    public function tinhtichcuahailuythuacungcoso(Request $request){
        $request->validate([
            'a'=>'required|numeric',
            'b'=>'required|numeric',
            'c'=>'required|numeric',
            ],[
            'a.required'=>'a bắt buộc phải nhập',
            'a.numeric'=>'a buộc phải là số',
            'b.required'=>'n bắt buộc phải nhập',
            'b.numeric'=>'n bắt buộc phải là số',
            'c.required'=>'m bắt buộc phải nhập',
            'c.numeric'=>'m bắt buộc phải là số',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        //tính kết quả
        $ketqua=pow($a,$b+$c);
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('toan.tichcuahailuythuacungcoso',compact('ketqua','a','b','c'));
        }
        else{
            return view('toan.tichcuahailuythuacungcoso',compact('ketqua','a','b','c'));
        }
    }


    //Tính thương của hai lũy thừa với cùng một cơ số:a^n*a^m
    public function thuongcuahailuythuacungcoso(){
        return view('toan.thuongcuahailuythuacungcoso');
    }
    public function tinhthuongcuahailuythuacungcoso(Request $request){
        $request->validate([
            'a'=>'required|numeric',
            'b'=>'required|numeric',
            'c'=>'required|numeric',
            ],[
            'a.required'=>'a bắt buộc phải nhập',
            'a.numeric'=>'a buộc phải là số',
            'b.required'=>'n bắt buộc phải nhập',
            'b.numeric'=>'n bắt buộc phải là số',
            'c.required'=>'m bắt buộc phải nhập',
            'c.numeric'=>'m bắt buộc phải là số',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        if($a==0)
        {
            $err='phải khác 0';
            return view('toan.thuongcuahailuythuacungcoso',compact('err','a','b','c'));
        }
        //tính kết quả
        $ketqua=pow($a,$b-$c);
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('toan.thuongcuahailuythuacungcoso',compact('ketqua','a','b','c'));
        }
        else{
            return view('toan.thuongcuahailuythuacungcoso',compact('ketqua','a','b','c'));
        }
            
    }



    

//lũy thừa cua một lũy thừa
public function luythuacuamotluythua(){
    return view('toan.luythuacuamotluythua');
}
public function tinhluythuacuamotluythua(Request $request){
    $request->validate([
        'a'=>'required|numeric',
        'b'=>'required|numeric',
        'c'=>'required|numeric',
        ],[
        'a.required'=>'a bắt buộc phải nhập',
        'a.numeric'=>'a buộc phải là số',
        'b.required'=>'n bắt buộc phải nhập',
        'b.numeric'=>'n bắt buộc phải là số',
        'c.required'=>'m bắt buộc phải nhập',
        'c.numeric'=>'m bắt buộc phải là số',
    ]);
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    //tính kết quả
    $ketqua=pow($a,$b*$c);
    //xét kết quả là số vô hạn
     if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.luythuacuamotluythua',compact('ketqua','a','b','c'));
    }
    else{
        return view('toan.luythuacuamotluythua',compact('ketqua','a','b','c'));
    } 
}


    //phương trình bậc 2
    public function phuongtrinhbachai(){
        return view('toan.phuongtrinhbachai');
    }
    public function tinhphuongtrinhbachai(Request $request){
        $request->validate([
            'a'=>'required|numeric',
            'b'=>'required|numeric',
            'c'=>'required|numeric',
            ],[
            'a.required'=>'a bắt buộc phải nhập',
            'a.numeric'=>'a buộc phải là số',
            'b.required'=>'b bắt buộc phải nhập',
            'b.numeric'=>'b bắt buộc phải là số',
            'c.required'=>'c bắt buộc phải nhập',
            'c.numeric'=>'c bắt buộc phải là số',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
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


    //cạnh của tam giác
    public function canhtamgiac(){
        return view('toan.canhtamgiac');
    }
    public function tinhcanhtamgiac(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'b bắt buộc phải nhập',
            'a.numeric'=>'b điện buộc phải là số',
            'a.min'=>'a phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'c bắt buộc phải nhập',
            'b.numeric'=>'c bắt buộc phải là số',
            'b.min'=>'b phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        //tính kết quả
        $ketqua=sqrt(pow($a,2)+pow($b,2));
        //xét kết quả là số vô hạn
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('toan.canhtamgiac',compact('ketqua','a','b'));
        }
        else{
            return view('toan.canhtamgiac',compact('ketqua','a','b'));
        }
    }



    //chu vi tam giác
    public function chuvitamgiac(){
        return view('toan.chuvitamgiac');
    }
    public function tinhchuvitamgiac(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
            'c'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'a bắt buộc phải nhập',
            'a.numeric'=>'a điện buộc phải là số',
            'a.min'=>'a phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'b bắt buộc phải nhập',
            'b.numeric'=>'b bắt buộc phải là số',
            'b.min'=>'b phải lớn hơn 0.00000000000000000000001',
            'c.required'=>'c bắt buộc phải nhập',
            'c.numeric'=>'c bắt buộc phải là số',
            'c.min'=>'c phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        //tính kết quả
        $ketqua = $a + $b + $c;
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('toan.chuvitamgiac',compact('ketqua','a','b','c'));
        }
        else{
        return view('toan.chuvitamgiac',compact('ketqua','a','b','c'));
        }
        
    }


    //diện tích tam giác
    public function dientichtamgiac(){
        return view('toan.dientichtamgiac');
    }
    public function tinhdientichtamgiac(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
            
        ],[
            'a.required'=>'h bắt buộc phải nhập',
            'a.numeric'=>'h điện buộc phải là số',
            'a.min'=>'h phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'b bắt buộc phải nhập',
            'b.numeric'=>'b bắt buộc phải là số',
            'b.min'=>'b phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        //tính kết quả
        $ketqua =0.5* $a * $b;
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('toan.dientichtamgiac',compact('ketqua','a','b'));
        }
        else{
        return view('toan.dientichtamgiac',compact('ketqua','a','b'));
        }
        
    }


     //đường cao tam giác
     public function duongcaotamgiac(){
        return view('toan.duongcaotamgiac');
    }
    public function tinhduongcaotamgiac(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
            'c'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'a bắt buộc phải nhập',
            'a.numeric'=>'a buộc phải là số',
            'a.min'=>'a phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'b bắt buộc phải nhập',
            'b.numeric'=>'b bắt buộc phải là số',
            'b.min'=>'b phải lớn hơn 0.00000000000000000000001',
            'c.required'=>'c bắt buộc phải nhập',
            'c.numeric'=>'c bắt buộc phải là số',
            'c.min'=>'c phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        //tính kết quả
        $p = ($a + $b + $c)/2;
        $ketqua=2*(sqrt($p*($p-$a)*($p-$b)*($p-$c))/$a);
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('toan.chuvitamgiac',compact('ketqua','a','b'));
        }
        else{
            return view('toan.duongcaotamgiac',compact('ketqua','a','b','c'));
        }
    }
         

       //chu vi tu giác
       public function chuvitugiac(){
        return view('toan.chuvitugiac');
    }
    public function tinhchuvitugiac(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
            'b'=>'required|numeric|min:0.00000000000000000000001',
            'c'=>'required|numeric|min:0.00000000000000000000001',
            'd'=>'required|numeric|min:0.00000000000000000000001',
        ],[
            'a.required'=>'a bắt buộc phải nhập',
            'a.numeric'=>'a điện buộc phải là số',
            'a.min'=>'a phải lớn hơn 0.00000000000000000000001',
            'b.required'=>'b bắt buộc phải nhập',
            'b.numeric'=>'b bắt buộc phải là số',
            'b.min'=>'b phải lớn hơn 0.00000000000000000000001',
            'c.required'=>'c bắt buộc phải nhập',
            'c.numeric'=>'c bắt buộc phải là số',
            'c.min'=>'c phải lớn hơn 0.00000000000000000000001',
            'd.required'=>'d bắt buộc phải nhập',
            'd.numeric'=>'d bắt buộc phải là số',
            'd.min'=>'d phải lớn hơn 0.00000000000000000000001',
        ]);
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        $d=$_POST['d'];
        //tính kết quả
        $ketqua = $a + $b + $c+ $d;
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('toan.chuvitugiac',compact('ketqua','a','b','c','d'));
        }
        else{
        return view('toan.chuvitugiac',compact('ketqua','a','b','c','d'));
        }
        
    }


    //chu vi hình chữ nhật
public function chuvihinhchunhat(){
    return view('toan.chuvihinhchunhat');
}
public function tinhchuvihinhchunhat(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
        'b'=>'required|numeric|min:0.00000000000000000000001',
        
    ],[
        'a.required'=>'a bắt buộc phải nhập',
        'a.numeric'=>'a điện buộc phải là số',
        'a.min'=>'a phải lớn hơn 0.00000000000000000000001',
        'b.required'=>'b bắt buộc phải nhập',
        'b.numeric'=>'b bắt buộc phải là số',
        'b.min'=>'b phải lớn hơn 0.00000000000000000000001',
    ]);
    $a=$_POST['a'];
    $b=$_POST['b'];
    //tính kết quả
    $ketqua=2*($a+$b);
    //xét kết quả là số vô hạn
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.chuvihinhchunhat',compact('ketqua','a','b'));
    }
    else{
        return view('toan.chuvihinhchunhat',compact('ketqua','a','b'));
    }
       
}

     //chu vi hinh vuông
     public function chuvihinhvuong(){
        return view('toan.chuvihinhvuong');
    }
    public function tinhchuvihinhvuong(Request $request){
        $request->validate([
            'a'=>'required|numeric|min:0.00000000000000000000001',
           
        ],[
            'a.required'=>'a bắt buộc phải nhập',
            'a.numeric'=>'a điện buộc phải là số',
            'a.min'=>'a phải lớn hơn 0.00000000000000000000001',
            
        ]);
        $a=$_POST['a'];
       
        //tính kết quả
        $ketqua = 4*$a;
        if(is_infinite($ketqua)){
            $ketqua="kết quả vượt qua giới hạn tính";
            return view('toan.chuvihinhvuong',compact('ketqua','a'));
        }
        else{
        return view('toan.chuvihinhvuong',compact('ketqua','a'));
        }
        
    }

//diện tích hình chữ nhật
public function dientichhinhchunhat(){
    return view('toan.dientichhinhchunhat');
}
public function tinhcdientichhinhchunhat(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
        'b'=>'required|numeric|min:0.00000000000000000000001',
        
    ],[
        'a.required'=>'a bắt buộc phải nhập',
        'a.numeric'=>'a điện buộc phải là số',
        'a.min'=>'a phải lớn hơn 0.00000000000000000000001',
        'b.required'=>'b bắt buộc phải nhập',
        'b.numeric'=>'b bắt buộc phải là số',
        'b.min'=>'b phải lớn hơn 0.00000000000000000000001',
    ]);
    $a=$_POST['a'];
    $b=$_POST['b'];
    //tính kết quả
    $ketqua=$a*$b;
    //xét kết quả là số vô hạn
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.dientichhinhchunhat',compact('ketqua','a','b'));
    }
    else{
        return view('toan.dientichhinhchunhat',compact('ketqua','a','b'));
    }
       
}

 //diện tích hình vuông
 public function dientichhinhvuong(){
    return view('toan.dientichhinhvuong');
}
public function tinhdientichhinhvuong(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
       
    ],[
        'a.required'=>'a bắt buộc phải nhập',
        'a.numeric'=>'a điện buộc phải là số',
        'a.min'=>'a phải lớn hơn 0.00000000000000000000001',
        
    ]);
    $a=$_POST['a'];
   
    //tính kết quả
    $ketqua = $a*$a;
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.dientichhinhvuong',compact('ketqua','a'));
    }
    else{
    return view('toan.dientichhinhvuong',compact('ketqua','a'));
    }
    
}



 //chu vi hình tròn
 public function chuvihinhtron(){
    return view('toan.chuvihinhtron');
}
public function tinhchuvihinhtron(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
       
    ],[
        'a.required'=>'bán kính R bắt buộc phải nhập',
        'a.numeric'=>'bán kính R điện buộc phải là số',
        'a.min'=>'bán kính R phải lớn hơn 0.00000000000000000000001',
        
    ]);
    $a=$_POST['a'];
   
    //tính kết quả
    $ketqua = 2*$a*3.14;
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.chuvihinhtron',compact('ketqua','a'));
    }
    else{
    return view('toan.chuvihinhtron',compact('ketqua','a'));
    }
    
}

//diện tích hình tròn
public function dientichhinhtron(){
    return view('toan.dientichhinhtron');
}
public function tinhdientichhinhtron(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
       
    ],[
        'a.required'=>'bán kính R bắt buộc phải nhập',
        'a.numeric'=>'bán kính R điện buộc phải là số',
        'a.min'=>'bán kính R phải lớn hơn 0.00000000000000000000001',
        
    ]);
    $a=$_POST['a'];
   
    //tính kết quả
    $ketqua = pow($a,2)*3.14;
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.dientichhinhtron',compact('ketqua','a'));
    }
    else{
    return view('toan.dientichhinhtron',compact('ketqua','a'));
    }
    
}




//diện tích xung quanh hình hộp chữ nhật
public function dientichxungquanghinhhopchunhat(){
    return view('toan.dientichxungquanghinhhopchunhat');
}
public function tinhdientichxungquanghinhhopchunhat(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
        'b'=>'required|numeric|min:0.00000000000000000000001',
        'c'=>'required|numeric|min:0.00000000000000000000001',
    ],[
        'a.required'=>'a bắt buộc phải nhập',
        'a.numeric'=>'a điện buộc phải là số',
        'a.min'=>'a phải lớn hơn 0.00000000000000000000001',
        'b.required'=>'b bắt buộc phải nhập',
        'b.numeric'=>'b bắt buộc phải là số',
        'b.min'=>'b phải lớn hơn 0.00000000000000000000001',
        'c.required'=>'h bắt buộc phải nhập',
        'c.numeric'=>'h bắt buộc phải là số',
        'c.min'=>'h phải lớn hơn 0.00000000000000000000001',
    ]);
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    //tính kết quả
    $ketqua = 2*$a*$b*$c;
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.dientichxungquanghinhhopchunhat',compact('ketqua','a','b','c'));
    }
    else{
    return view('toan.dientichxungquanghinhhopchunhat',compact('ketqua','a','b','c'));
    }
    
}

//diện tích toàn phần hình hộp chữ nhật
public function dientichtoanphanhinhhopchunhat(){
    return view('toan.dientichtoanphanhinhhopchunhat');
}
public function tinhdientichtoanphanhinhhopchunhat(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
        'b'=>'required|numeric|min:0.00000000000000000000001',
        'c'=>'required|numeric|min:0.00000000000000000000001',
    ],[
        'a.required'=>'Sxq bắt buộc phải nhập',
        'a.numeric'=>'Sxq điện buộc phải là số',
        'a.min'=>'Sxq phải lớn hơn 0.00000000000000000000001',
        'b.required'=>'a bắt buộc phải nhập',
        'b.numeric'=>'a bắt buộc phải là số',
        'b.min'=>'a phải lớn hơn 0.00000000000000000000001',
        'c.required'=>'b bắt buộc phải nhập',
        'c.numeric'=>'b bắt buộc phải là số',
        'c.min'=>'b phải lớn hơn 0.00000000000000000000001',
    ]);
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    //tính kết quả
    $ketqua = $a+2*($b*$c);
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.dientichtoanphanhinhhopchunhat',compact('ketqua','a','b','c'));
    }
    else{
    return view('toan.dientichtoanphanhinhhopchunhat',compact('ketqua','a','b','c'));
    }
    
}

//thể tích hình hộp chữ nhật
public function thetichhinhhopchunhat(){
    return view('toan.thetichhinhhopchunhat');
}
public function tinhthetichhinhhopchunhat(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
        'b'=>'required|numeric|min:0.00000000000000000000001',
        'c'=>'required|numeric|min:0.00000000000000000000001',
    ],[
        'a.required'=>'a bắt buộc phải nhập',
        'a.numeric'=>'a điện buộc phải là số',
        'a.min'=>'a phải lớn hơn 0.00000000000000000000001',
        'b.required'=>'b bắt buộc phải nhập',
        'b.numeric'=>'b bắt buộc phải là số',
        'b.min'=>'b phải lớn hơn 0.00000000000000000000001',
        'c.required'=>'h bắt buộc phải nhập',
        'c.numeric'=>'h bắt buộc phải là số',
        'c.min'=>'h phải lớn hơn 0.00000000000000000000001',
    ]);
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    //tính kết quả
    $ketqua = $a*$b*$c;
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.thetichhinhhopchunhat',compact('ketqua','a','b','c'));
    }
    else{
    return view('toan.thetichhinhhopchunhat',compact('ketqua','a','b','c'));
    }
    
}



//diện tích xung quanh hình lập phương
public function dientichxungquanghinhlapphuong(){
    return view('toan.dientichxungquanghinhlapphuong');
}
public function tinhdientichxungquanghinhlapphuong(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
       
    ],[
        'a.required'=>'a bắt buộc phải nhập',
        'a.numeric'=>'a điện buộc phải là số',
        'a.min'=>'a phải lớn hơn 0.00000000000000000000001',
        
    ]);
    $a=$_POST['a'];
    
    //tính kết quả
    $ketqua = 4*$a*$a;
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.dientichxungquanghinhlapphuong',compact('ketqua','a'));
    }
    else{
    return view('toan.dientichxungquanghinhlapphuong',compact('ketqua','a'));
    }
    
}

//diện tích toàn phần hình lập phương
public function dientichtoanphanhinhlapphuong(){
    return view('toan.dientichtoanphanhinhlapphuong');
}
public function tinhdientichtoanphanhinhlapphuong(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
        
    ],[
        'a.required'=>'Sxq bắt buộc phải nhập',
        'a.numeric'=>'Sxq điện buộc phải là số',
        'a.min'=>'Sxq phải lớn hơn 0.00000000000000000000001',
       
    ]);
    $a=$_POST['a'];
   
    //tính kết quả
    $ketqua = 6*$a*$a;
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.dientichtoanphanhinhlapphuong',compact('ketqua','a'));
    }
    else{
    return view('toan.dientichtoanphanhinhlapphuong',compact('ketqua','a'));
    }
    
}

//thể tích hình lập phương
public function thetichhinhlapphuong(){
    return view('toan.thetichhinhlapphuong');
}
public function tinhthetichhinhlapphuong(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
       
    ],[
        'a.required'=>'a bắt buộc phải nhập',
        'a.numeric'=>'a điện buộc phải là số',
        'a.min'=>'a phải lớn hơn 0.00000000000000000000001',
        
    ]);
    $a=$_POST['a'];
    
    //tính kết quả
    $ketqua = $a*$a*$a;
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.thetichhinhlapphuong',compact('ketqua','a'));
    }
    else{
    return view('toan.thetichhinhlapphuong',compact('ketqua','a'));
    }
    
}



//diện tích xung quanh hình trụ
public function dientichxungquanghinhtru(){
    return view('toan.dientichxungquanghinhtru');
}
public function tinhdientichxungquanghinhtru(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
        'b'=>'required|numeric|min:0.00000000000000000000001',
    ],[
        'a.required'=>'r bắt buộc phải nhập',
        'a.numeric'=>'r điện buộc phải là số',
        'a.min'=>'r phải lớn hơn 0.00000000000000000000001',
        'b.required'=>'h bắt buộc phải nhập',
        'b.numeric'=>'h bắt buộc phải là số',
        'b.min'=>'h phải lớn hơn 0.00000000000000000000001',
    ]);
    $a=$_POST['a'];
    $b=$_POST['b'];

    //tính kết quả
    $ketqua = 2*$a*$b*3.14;
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.dientichxungquanghinhtru',compact('ketqua','a','b'));
    }
    else{
    return view('toan.dientichxungquanghinhtru',compact('ketqua','a','b'));
    }
    
}



    //Tính thể tích hình trụ
public function thetichhinhtru(){
    return view('toan.thetichhinhtru');
}
public function tinhthetichhinhtru(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
        'b'=>'required|numeric|min:0.00000000000000000000001',
    ],[
        'a.required'=>'r bắt buộc phải nhập',
        'a.numeric'=>'r điện buộc phải là số',
        'a.min'=>'r phải lớn hơn 0.00000000000000000000001',
        'b.required'=>'h bắt buộc phải nhập',
        'b.numeric'=>'h bắt buộc phải là số',
        'b.min'=>'h phải lớn hơn 0.00000000000000000000001',
    ]);
    $a=$_POST['a'];
    $b=$_POST['b'];
    //tính kết quả
    $ketqua=3.14*pow($a,2)*$b;
    //xét kết quả là số vô hạn
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.thetichhinhtru',compact('ketqua','a','b'));
    }
    else{
        return view('toan.thetichhinhtru',compact('ketqua','a','b'));
    }
}


//diện tích xung quanh hình nón
public function dientichhinhnon(){
    return view('toan.dientichhinhnon');
}
public function tinhdientichhinhnon(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
        'b'=>'required|numeric|min:0.00000000000000000000001',
    ],[
        'a.required'=>'r bắt buộc phải nhập',
        'a.numeric'=>'r điện buộc phải là số',
        'a.min'=>'r phải lớn hơn 0.00000000000000000000001',
        'b.required'=>'l bắt buộc phải nhập',
        'b.numeric'=>'l bắt buộc phải là số',
        'b.min'=>'l phải lớn hơn 0.00000000000000000000001',
    ]);
    $a=$_POST['a'];
    $b=$_POST['b'];

    //tính kết quả
    $ketqua = $a*$b*3.14;
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.dientichhinhnon',compact('ketqua','a','b'));
    }
    else{
    return view('toan.dientichhinhnon',compact('ketqua','a','b'));
    }
    
}


//Tính thể tích hình nón
public function thetichhinhnon(){
    return view('toan.thetichhinhnon');
}
public function tinhthetichhinhnon(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
        'b'=>'required|numeric|min:0.00000000000000000000001',
    ],[
        'a.required'=>'r bắt buộc phải nhập',
        'a.numeric'=>'r điện buộc phải là số',
        'a.min'=>'r phải lớn hơn 0.00000000000000000000001',
        'b.required'=>'h bắt buộc phải nhập',
        'b.numeric'=>'h bắt buộc phải là số',
        'b.min'=>'h phải lớn hơn 0.00000000000000000000001',
    ]);
    $a=$_POST['a'];
    $b=$_POST['b'];
            
    //tính kết quả
    $ketqua=(1/3)*3.14*pow($a,2)*$b;
    //xét kết quả là số vô hạn
    if(is_infinite($ketqua))
    {
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.thetichhinhnon',compact('ketqua','a','b'));
    }
    else{
        return view('toan.thetichhinhnon',compact('ketqua','a','b'));
    }
           
        
}



//Tính diện tích mặt cầu
public function dientichmatcau(){
    return view('toan.dientichmatcau');
}
public function tinhdientichmatcau(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
       
    ],[
        'a.required'=>'bán kính R bắt buộc phải nhập',
        'a.numeric'=>'bán kính R điện buộc phải là số',
        'a.min'=>'bán kính R phải lớn hơn 0.00000000000000000000001',
        
    ]);
    $a=$_POST['a'];
        
    //tính kết quả
    $ketqua=(4)*3.14*pow($a,2);
    //xét kết quả là số vô hạn
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.dientichmatcau',compact('ketqua','a'));
    }
    else{
        return view('toan.dientichmatcau',compact('ketqua','a'));
    }
           
}



//Tính thể tích hình cầu
public function thetichhinhcau(){
    return view('toan.thetichhinhcau');
}
public function tinhthetichhinhcau(Request $request){
    $request->validate([
        'a'=>'required|numeric|min:0.00000000000000000000001',
       
    ],[
        'a.required'=>'bán kính R bắt buộc phải nhập',
        'a.numeric'=>'bán kính R điện buộc phải là số',
        'a.min'=>'bán kính R phải lớn hơn 0.00000000000000000000001',
        
    ]);
    $a=$_POST['a'];
    //tính kết quả
    $ketqua=(4/3)*3.14*pow($a,3);
    //xét kết quả là số vô hạn
    if(is_infinite($ketqua)){
        $ketqua="kết quả vượt qua giới hạn tính";
        return view('toan.thetichhinhcau',compact('ketqua','a'));
    }
    else{
        return view('toan.thetichhinhcau',compact('ketqua','a'));
    }
}

}


