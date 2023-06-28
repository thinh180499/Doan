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
        return DB::select('SELECT * FROM '.$table);
        
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
}
