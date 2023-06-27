<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Lythuyet extends Model
{
    use HasFactory;


    protected $table="lythuyet";
    public function danhsachlythuyet(){
        $lythuyet=DB::select('SELECT * FROM lythuyet');
        return $lythuyet;
    }
    public function themlythuyet($data){
       DB::insert('INSERT INTO lythuyet(tenlythuyet,noidung,congthuc,mon)value(?,?,?,?)',$data);
    }
    public function laylythuyet($id){
        return DB::select('SELECT * FROM '.$this->table.' WHERE id=?',[$id]);
    }
    public function sualythuyet($data,$id){
        $data[]=$id;
        return DB::update('UPDATE '.$this->table.' SET tenlythuyet=?,noidung=?,congthuc=?,mon=? WHERE id=?',$data);
    }
    public function xoalythuyet($id){
        return DB::delete("DELETE FROM $this->table WHERE id=?",[$id]);
    
    }
}
