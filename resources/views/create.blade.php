@extends('layouts.first')

@section('title','page de creation')
<div class="container">

    <h1>Créer un nouveau Pokémon</h1>
    @section('content')
    <form method="POST" action="/pokemon">
        @csrf
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="type">Type :</label>
            <select class="form-control" id="type" name="type">
                <option value="Eau">Eau 🌊</option>
                <option value="Feu">Feu 🔥</option>
                <option value="Normal">Normal ⭐️</option>
                <option value="Plante">Plante ☘️</option>
                <option value="Electrique">Electrique ⚡️</option>
            </select>
        </div>
        <div class="form-group">
            <label for="attaque">Attaque :</label>
            <input type="number" class="form-control" id="attaque" name="attaque">
        </div>
        <div class="form-group">
            <label for="defense">Défense :</label>
            <input type="number" class="form-control" id="defense" name="defense">
        </div>
        <div class="form-group">
            <label for="pv">PV :</label>
            <input type="number" class="form-control" id="pv" name="pv">
        </div>
        <button type="submit" class="btn btn-primary">creer</button>
    </form>
</div>
@endsection