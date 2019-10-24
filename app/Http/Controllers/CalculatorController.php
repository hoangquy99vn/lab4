<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator.index');
    }

    public function calculate(Request $request)
    {
        $num_1 = $request->post('num_1');
        $num_2 = $request->post('num_2');
        $result = ':'.($num_1 + $num_2);
        return view('calculator.index',['num_1'=>$num_1,'num_2'=>$num_2,'result'=>$result]);
    }
}
