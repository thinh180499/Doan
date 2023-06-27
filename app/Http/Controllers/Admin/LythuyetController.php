<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Lythuyet;


class LythuyetController extends Controller
{
    private $lythuyet;
    public function __construct(){
        $this->lythuyet=new Lythuyet();
    }
    
    public function index(){
        
        $dslythuyet=$this->lythuyet->danhsachlythuyet();
        return view('admin.danhsachlythuyet',compact('dslythuyet'));
    }

    public function add(){

        return view('admin.themlythuyet');
    }
    
    public function postadd(Request $request){

        return view('admin.themlythuyet');
    }
}
