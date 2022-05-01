<?php

namespace App\Http\Controllers;

use App\Models\Auteurs;
use App\Models\Livres;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function getAll()
    {
        $titre = 'Titre du Livre';
        $livres = Livres::with('auteur')->get();

        return view('livres', ['livres' => $livres, 'titre' => $titre]);

    }
    public function get(Request $request, $id)
    {
        $livre = Livres::find($id);
        return view('livre', ['livre' => $livre]);
    }
    public function add(Request $request )
    {
        // ----validator
        $input=$request->input();
        // ----c'est un ternaire ci dessous--
        $auteur= Auteurs::where('nom', '=', $input['nom'])
        ->where('prenom', '=', $input['prenom'])
        ->first();
        if(!isset($auteur)){
        $auteur= new Auteurs();
        $auteur-> nom=$input['nom'];
        $auteur-> prenom=$input['prenom'];
        $auteur-> save();

        $livre= new Livres();
        $livre-> titre=$input['titre'];
        $livre-> auteur()->associate($auteur);
        $livre-> save();

        return redirect()->route('livres');
        }



    }

}

// public function getAll()
// {
//     $livres=['liv1', 'liv2', 'li3'];
//   return view ('livres' => $livres);
//      }

//  $livres=[1 =>'liv1',2 => 'liv2',3 => 'li3'];
//   return view ('livres', ['livres' => $livres]);
// $titre = 'Titre du Livre';
// $livres = Livres::with('auteur')->get();

// return view('livres', ['livres' => $livres, 'titre' => $titre]);


