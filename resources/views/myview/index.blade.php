@extends('template.default')
@section('title', 'My Controller')
@section('header1', 'My View')

@section('content')
  <form action="#" method="POST">
    @csrf
    <label for="num">ป้อนข้อมูลเเม่สูตรคูณ</label>
    <input type="number" name="num" name="num">
    <class="form-control" name="num">
        <button class="btn btn-success" type="submit">ส่งข้อมูล</button>
  </form>
@endsection
