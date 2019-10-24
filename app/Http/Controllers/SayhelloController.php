<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SayhelloController extends Controller
{
    public function sayhello(){
        return view('sayhello');
    }
}
