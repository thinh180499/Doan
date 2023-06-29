<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Congthuc extends Model
{
    use HasFactory;
    protected $table="congthuc";

    public function danhsachcongthuc(){
        return DB::select('SELECT * FROM congthuc');
        
    }
    public function themcongthuc($data){
       DB::insert('INSERT INTO congthuc(tencongthuc,congthuc)value(?,?)',$data);
    }
    public function chitietcongthuc($id){
        return DB::select('SELECT * FROM '.$this->table.' WHERE id=?',[$id]);
    }
    public function suacongthuc($data,$id){
        $data[]=$id;
        return DB::update('UPDATE '.$this->table.' SET tencongthuc=?,congthuc=? WHERE id=?',$data);
    }
    public function xoacongthuc($id){
        return DB::delete("DELETE FROM $this->table WHERE id=?",[$id]);
    
    }
    
}
