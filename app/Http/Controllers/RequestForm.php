<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestForm extends Controller
{
   public function postForm(request $request){
       var_dump($request->all());
   }
}
