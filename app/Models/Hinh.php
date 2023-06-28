<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Hinh extends Model
{
    use HasFactory;
    protected $table="hinh";

    public function danhsachhinh(){
        return DB::select('SELECT * FROM hinh');
    }
    public function themhinh($data){
       DB::insert('INSERT INTO hinh(img,khainiem_id)value(?,?)',$data);
    }
    public function chitiethinh($id){
        return DB::select('SELECT * FROM '.$this->table.' WHERE id=?',[$id]);
    }
    public function suahinh($data,$id){
        $data[]=$id;
        return DB::update('UPDATE '.$this->table.' SET img=?,khainiem_id=? WHERE id=?',$data);
    }
    public function xoahinh($id){
        return DB::delete("DELETE FROM $this->table WHERE id=?",[$id]);
    
    }
}
