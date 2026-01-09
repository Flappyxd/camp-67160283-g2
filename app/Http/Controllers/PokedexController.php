<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    function index(){
        $data['pokedexes'] = Pokedex::all();
        return view('pokedex.index', $data);
    }

    function store(Request $req){
        $pokedex = new Pokedex;
        $pokedex->name = $req->input('name');
        $pokedex->type = $req->input('type');
        $pokedex->species = $req->input('species');
        $pokedex->height = $req->input('height');
        $pokedex->weight = $req->input('weight');
        $pokedex->hp = $req->input('hp');
        $pokedex->attack = $req->input('attack');
        $pokedex->defense = $req->input('defense');
        $pokedex->image = $req->input('image');
        $pokedex->save();

        return redirect('/pokedex');
    }

    function update($id){
        $data['pokedex_update'] = Pokedex::find($id);
        $data['pokedexes'] = Pokedex::all();
        return view('pokedex.update', $data);
    }

    function update_action(Request $req, $id){
        $pokedex = Pokedex::find($id);
        $pokedex->name = $req->input('name');
        $pokedex->type = $req->input('type');
        $pokedex->species = $req->input('species');
        $pokedex->height = $req->input('height');
        $pokedex->weight = $req->input('weight');
        $pokedex->hp = $req->input('hp');
        $pokedex->attack = $req->input('attack');
        $pokedex->defense = $req->input('defense');
        $pokedex->image = $req->input('image');
        $pokedex->save();

        return $this->index();
    }

    function delete_action(Request $req, $id){
    $pokedex = Pokedex::find($id);

    if($pokedex){
        $pokedex->delete();
    }

    return redirect('/pokedex');
}

}
