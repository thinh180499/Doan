<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Mon extends Model
{
    use HasFactory;
    protected $table="mon";

    public function danhsachmon(){
        return DB::select('SELECT * FROM '.$table);
        
    }
    public function themmon($data){
       DB::insert('INSERT INTO mon(mon)value(?)',$data);
    }
    public function chitietmon($id){
        return DB::select('SELECT * FROM '.$this->table.' WHERE id=?',[$id]);
    }
    public function suamon($data,$id){
        $data[]=$id;
        return DB::update('UPDATE '.$this->table.' SET mon=? WHERE id=?',$data);
    }
    public function xoamon($id){
        return DB::delete("DELETE FROM $this->table WHERE id=?",[$id]);
    
    }
}
