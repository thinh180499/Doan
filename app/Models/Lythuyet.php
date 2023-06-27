<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Lythuyet extends Model
{
    use HasFactory;

    public function danhsachlythuyet(){
        $lythuyet=DB::select('SELECT * FROM lythuyet');
        return $lythuyet;
    }
}
