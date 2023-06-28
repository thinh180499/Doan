<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Phantutrongkhainiem extends Model
{
    use HasFactory;
    protected $table="phantutrongkhainiem";

    public function danhsachphantutrongkhainiem(){
        return DB::select('SELECT * FROM '.$table);
        
    }
    public function themphantutrongkhainiem($data){
       DB::insert('INSERT INTO phantutrongkhainiem(tenphantutrongkhainiem,phantutrongkhainiem)value(?,?)',$data);
    }
    public function chitietphantutrongkhainiem($id){
        return DB::select('SELECT * FROM '.$this->table.' WHERE id=?',[$id]);
    }
    public function suaphantutrongkhainiem($data,$id){
        $data[]=$id;
        return DB::update('UPDATE '.$this->table.' SET tenphantutrongkhainiem=?,phantutrongkhainiem=? WHERE id=?',$data);
    }
    public function xoaphantutrongkhainiem($id){
        return DB::delete("DELETE FROM $this->table WHERE id=?",[$id]);
    
    }
}
