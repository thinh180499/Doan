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
}
