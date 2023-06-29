<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;


class Khainiem extends Model
{
    use HasFactory;
    protected $table="khainiem";

    public function danhsachkhainiem(){
        return DB::select('SELECT * FROM khainiem');
        
    }
    public function danhsachkhainiemchitiet(){
        return DB::select('SELECT khainiem.id,khainiem.tenkhainiem,khainiem.noidung,congthuc.tencongthuc,mon.mon FROM khainiem,congthuc,mon WHERE congthuc_id=congthuc.id AND mon_id=mon.id');
        
    }
    public function themkhainiem($data){
        DB::insert('INSERT INTO khainiem(tenkhainiem,noidung,congthuc_id,mon_id)value(?,?,?,?)',$data);
     }
     public function chitietkhainiem($id){
         return DB::select('SELECT * FROM '.$this->table.' WHERE id=?',[$id]);
     }
     public function suakhainiem($data,$id){
         $data[]=$id;
         return DB::update('UPDATE '.$this->table.' SET tenkhainiem=?,noidung=?,congthuc_id=?,mon_id=? WHERE id=?',$data);
     }
     public function xoakhainiem($id){
         return DB::delete("DELETE FROM $this->table WHERE id=?",[$id]);
     
     }
     public function danhsachkhainiemtheotimkiem($tukhoa){
        $tukhoa='%'.$tukhoa.'%';
        return DB::table($this->table)
        ->select('id','tenkhainiem','noidung')
        ->where('tenkhainiem','like',$tukhoa)
        ->orwhere('noidung','like',$tukhoa)
        ->get();
    
    }
}
