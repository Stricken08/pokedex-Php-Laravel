@extends('layouts.first')
@section('title','page d affichage')
<div class="body">



  <a class="aCreate" href="/pokemon/create">➡️ajouter un nouveau pokemon à votre pokedex</a>
  @section('content')
  <h1>Liste des Pokémons</h1>
  <div class="pokedex">

    @foreach($pokedex as $nom => $pokemon)
    <h2>{{ $nom }}</h2>
    <div class="flex">

      <div>
        <ul>
          <li>Type: {{ $pokemon['type'] }}</li>
          <li>Attaque: {{ $pokemon['attaque'] }}</li>
          <li>Défense: {{ $pokemon['defense'] }}</li>
          <li>PV: {{ $pokemon['pv'] }}</li>
        </ul>
      </div>
      <div>
        <img src="{{ asset('images/' . strtolower($nom) . '.png') }}" alt="{{ $nom }}" />
      </div>
    </div>
    @endforeach
  </div>

</div>

@endsection