<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationformController extends Controller
{
    public function create() {
        $provinces = ['ha noi','ho chi minh'];
        return view('applicationform.create',['provinces'=>$provinces]);
    }

    public function store(Request $request) {
        $fullname = $request->post('fullname');
        $idnumber = $request->post('idnumber');
        $hometow = $request->post('hometow');
        $result = $request->post('result');
        return view('applicationform',['fullname'=>$fullname,'idnumber'=>$idnumber,'hometow'=>$hometow,'result'=>$result]);
    }
    
}
