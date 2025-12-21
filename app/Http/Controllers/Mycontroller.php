<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
// แสดงหน้าฟอร์ม
public function index() {
    return view('myview.index');
}

// รับค่าจากฟอร์ม (POST) มาแสดงผล
public function store(Request $request) {
    //รับค่าทั้งหมดมาเก็บใส่ตัวแปรก่อน
    $name = $request->input('name');
    $lastname = $request->input('lastname');
    $gender = $request->input('gender');
    $age = $request->input('age');
    $birthday = $request->input('birthday');
    $address = $request->input('address');
    $color = $request->input('favoriteColor');
    $music = $request->input('music');

    // $file = $request->file('myFile');

    // 2. ส่งค่าทั้งหมดไปที่ View ในคำสั่ง return เดียว โดยใช้ compact
    return view('myview.process', compact('name', 'lastname', 'gender', 'age', 'birthday', 'address', 'color', 'music'));
}
}
