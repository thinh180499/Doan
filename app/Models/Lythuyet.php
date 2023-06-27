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
        return DB::select('SELECT * FROM '.$table);
        
    }
    public function themlythuyet($data){
       DB::insert('INSERT INTO lythuyet(tenlythuyet,noidung,congthuc,mon)value(?,?,?,?)',$data);
    }
    public function chitietlythuyet($id){
        return DB::select('SELECT * FROM '.$this->table.' WHERE id=?',[$id]);
    }
    
}
