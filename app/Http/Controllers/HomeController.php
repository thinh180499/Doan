<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function vatly(){
        return view('vatly');
    }
    public function toan(){
        return view('toan');
    }
    public function hoa(){
        return view('hoa');
    }
}
