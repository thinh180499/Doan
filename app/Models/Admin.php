<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Admin extends Model
{
    use HasFactory;

    public function kiemtralogin($data){
        return DB::select('SELECT * FROM admin WHERE adminname=? AND password=?',$data);
    }
}
