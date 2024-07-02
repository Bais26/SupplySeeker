<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
       return view('admin');
    }
    public function __construct(){
        $this->middleware(['auth','verifired']);
    }
}
