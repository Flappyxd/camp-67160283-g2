@extends('template.default')

@section('content')

<div class="container mt-5">
    <div class="border p-4 bg-body">
        <h2 class="mb-4">ข้อมูลที่คุณกรอกมา</h2>
    <h1>สวัสดีคุณคือ  "<strong>{{ $name }} {{ $lastname }}</strong>"</h1>
    <h1>คุณเป็นเพศ  "<strong>{{ $gender }}</strong>"</h1>
    <h1>เกิดวันที่  "<strong>{{ $birthday }}</strong>"</h1>
    <h1>คุณมีอายุ "<strong>{{ $age }} ปี"</strong></h1>
    <h1>ที่อยู่ของคุณคือ "<strong>{{ $address }}"</strong></h1>
    <h1>สีที่คุณชอบคือ "<strong>{{ $color }}"</strong></h1>
    <h1>เเนวเพลงที่คุณชอบคือ "<strong>{{ $music }}"</strong></h1>
</div>
</div>






@endsection
