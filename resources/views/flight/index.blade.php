@extends('template.default')

@section('header1', 'Flight Data')
@section('content')
    <div class="row">
        <div class="mt-3 col-12">
            <form action="/flight" method="post">
                @csrf
                <div class="col-12">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" id="name">
                </div>
                <div class="col-12">
                    <label for="number_of_planes">Airline</label>
                    <input class="form-control" name="number_of_planes" id="number_of_planes">
                </div>
                <div class="col-12">
                    <label for="price_per_ticket">Price per Ticket</label>
                    <input class="form-control" name="price_per_ticket" id="price_per_ticket">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary mt-3" type="submit">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
    <div class mt-3 col-12>
        <table class="table">
            <thead>
                <tr>
                    

