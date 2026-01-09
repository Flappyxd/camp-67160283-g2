@extends('template.default')

@section('header1', 'Pokedex Data')

@section('content')
<div class="row">
    <div class="mt-3 col-12">
        <form action="/pokedex" method="post">
            @csrf

            <div class="col-12">
                <label for="name">Name</label>
                <input class="form-control" name="name" id="name">
            </div>

            <div class="col-12">
                <label for="type">Type</label>
                <input class="form-control" name="type" id="type">
            </div>

            <div class="col-12">
                <label for="species">Species</label>
                <input class="form-control" name="species" id="species">
            </div>

            <div class="col-12">
                <label for="height">Height</label>
                <input class="form-control" name="height" id="height">
            </div>

            <div class="col-12">
                <label for="weight">Weight</label>
                <input class="form-control" name="weight" id="weight">
            </div>

            <div class="col-12">
                <label for="hp">HP</label>
                <input class="form-control" name="hp" id="hp">
            </div>

            <div class="col-12">
                <label for="attack">Attack</label>
                <input class="form-control" name="attack" id="attack">
            </div>

            <div class="col-12">
                <label for="defense">Defense</label>
                <input class="form-control" name="defense" id="defense">
            </div>

            <div class="col-12">
                <label for="image">Image URL</label>
                <input class="form-control" name="image" id="image">
            </div>

            <div class="col-12 mt-2">
                <button class="btn btn-success" type="submit">บันทึก</button>
            </div>
        </form>
    </div>

    @include('pokedex.table')
</div>
@endsection
