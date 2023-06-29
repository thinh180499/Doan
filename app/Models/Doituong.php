<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Doituong extends Model
{
    use HasFactory;
    protected $table="doituong";

    public function danhsachdoituong(){
        return DB::select('SELECT * FROM doituong');
        
    }
    public function themdoituong($data){
       DB::insert('INSERT INTO doituong(kytu,dinhnghia,donvi)value(?,?,?)',$data);
    }
    public function chitietdoituong($id){
        return DB::select('SELECT * FROM '.$this->table.' WHERE id=?',[$id]);
    }
    public function suadoituong($data,$id){
        $data[]=$id;
        return DB::update('UPDATE '.$this->table.' SET kytu=?,dinhnghia=?,donvi=? WHERE id=?',$data);
    }
    public function xoadoituong($id){
        return DB::delete("DELETE FROM $this->table WHERE id=?",[$id]);
    
    }
}
