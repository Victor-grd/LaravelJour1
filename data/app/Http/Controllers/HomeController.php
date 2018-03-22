<?php

namespace App\Http\Controllers;

use App\Genre as Genre;
use App\Musique as Musique;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

/* Redirection des routes */

    public function index()
    {
        return view('home');
    }

    public function show(){
        $musiques = Musique::all();
        return view('liste', ['musiques' => $musiques]);
    }

    public function ajouterMusique()
    {
        return view('ajouterMusique');
    }

/* fonction pour les musiques */

    public function nouvelleMusique(Request $request)
    {
        $newMusique = new Musique();
        $newMusique->artiste = $request->artiste;
        $newMusique->nom = $request->nom;
        $newMusique->genre = $request->genre;
        $newMusique->exemplaire = $request->exemplaire;
        $newMusique->save();
        return redirect ('/liste');
    }

/* fonction pour les mises a jour */

    public function up(Request $request)
    {   
        $musique = Musique::find($request->input('id'));
        $musique->artiste = $request->artiste;
        $musique->nom = $request->nom;
        $musique->genre = $request->genre;
        $musique->exemplaire = $request->exemplaire;
        $musique->save();
        return redirect('/liste');
    }

    public function majMusique(Request $request)
    {
        $musique = Musique::findOrFail($request->input('id'));
        return view('maj',['musique'=>$musique]);
    }

/* fonction pour la suppression */

    public function supr(Request $request)
    {
        Musique::destroy($request->input('id'));
        return redirect ('/liste');
    }
}
