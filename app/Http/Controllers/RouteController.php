<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function indexpage(){
        return view('index');
    }
    public function resultados(){
        return view('resultados');
    }
    
}
