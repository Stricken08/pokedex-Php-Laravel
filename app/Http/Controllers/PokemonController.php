<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    private array $pokedex = [
        'Bulbizarre' => [
            'type' => 'Plante ☘️',
            'attaque' => 49,
            'defense' => 49,
            'pv' => 45,
        ],
        'Salamèche' => [
            'type' => 'Feu 🔥',
            'attaque' => 52, 'defense' => 43,
            'pv' => 39,
        ], 'Carapuce' => [
            'type' => 'Eau 🌊',
            'attaque' => 48,
            'defense' => 65,
            'pv' => 44,
        ], 'Roucool' => [
            'type' => 'Normal ⭐️',
            'attaque' => 45,
            'defense' => 40,
            'pv' => 40,
        ],
        'Rattata' => [
            'type' => 'Normal ⭐️',
            'attaque' => 56,
            'defense' => 35,
            'pv' => 30,
        ],
        'Pikachu' => [
            'type' => 'Electrique ⚡️',
            'attaque' => 55,
            'defense' => 40,
            'pv' => 35,
        ],
        'Sabelette' => [
            'type' => 'Sol 🧱',
            'attaque' => 50,
            'defense' => 55,
            'pv' => 50,
        ],
        'Nosferapti' => [
            'type' => 'Poison ☠️',
            'attaque' => 45,
            'defense' => 35,
            'pv' => 40,
        ]
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pokemon')->with(['pokedex' => $this->pokedex]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $type = $request->input('type');
        $attaque = $request->input('attaque');
        $defense = $request->input('defense');
        $pv = $request->input('pv');


        return view('showstore')
            ->with('name', $name)
            ->with('type', $type)
            ->with('attaque', $attaque)
            ->with('defense', $defense)
            ->with('pv', $pv)
            // integration de ma fonction image aleatoire :)
            ->with('randomImage', $this->getRandomImage());
    }
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $name = $request->input('name');
        $type = $request->input('type');
        $attaque = $request->input('attaque');
        $defense = $request->input('defense');
        $pv = $request->input('pv');
        return view('showstore')
            ->with('name', $name)
            ->with('type', $type)
            ->with('attaque', $attaque)
            ->with('defense', $defense)
            ->with('pv', $pv);
        // return view('pokemon.show')->with(['pokemon' => $this->pokedex[$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function getRandomImage()
    {
        $images = array_diff(scandir(public_path('images')), array('..', '.'));
        $randomImage = $images[array_rand($images)];
        return asset('images/' . $randomImage);
    }
}
