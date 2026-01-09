@extends('template.default')
@section('header1', 'Edit Pokedex')

@section('content')
<form action="/pokedex/{{ $pokedex_update->id }}" method="post">

@csrf

<label>Name</label>
<input class="form-control" name="name" value="{{ $pokedex_update->name }}">

<label>Type</label>
<input class="form-control" name="type" value="{{ $pokedex_update->type }}">

<label>Species</label>
<input class="form-control" name="species" value="{{ $pokedex_update->species }}">

<label>Height</label>
<input class="form-control" name="height" value="{{ $pokedex_update->height }}">

<label>Weight</label>
<input class="form-control" name="weight" value="{{ $pokedex_update->weight }}">

<label>HP</label>
<input class="form-control" name="hp" value="{{ $pokedex_update->hp }}">

<label>Attack</label>
<input class="form-control" name="attack" value="{{ $pokedex_update->attack }}">

<label>Defense</label>
<input class="form-control" name="defense" value="{{ $pokedex_update->defense }}">

<label>Image</label>
<input class="form-control" name="image" value="{{ $pokedex_update->image }}">

<button class="btn btn-warning mt-2">อัปเดต</button>
</form>
@endsection
