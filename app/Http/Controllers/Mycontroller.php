<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
function index(){
    //echo $_GET['num'];
    return $this->MYFUNCTION();
}
function myfunction(){
    return view('myview.index');
}
function process(Request $request) {
    //echo $_POST['num'];
    $data['mynum'] = $request->input('num');
    return view('myview.process', $data);
}
}
