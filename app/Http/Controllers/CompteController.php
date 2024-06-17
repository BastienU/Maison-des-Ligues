<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil() 
    {
        //Vérifie que l'utilisateur est connecté.
        if(auth()->guest()) 
        {
            return redirect('/connexion')->withErrors([
                'email' => "Vous devez être connecté pour voir cette page.",
            ]);
        }
        return view('mon-compte');
    }

    public function deconnexion()
    {
        auth()->logout();

        return redirect('/');
    }

    public function modification()
    {
        if(auth()->guest()) 
        {
            return redirect('/connexion');
        }

        request()->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'age' => ['required'],
            'ville' => ['required'],
            'email' => ['required'],
            'password' => ['required', 'min:8'],
        ]);

        //Méthode de récupération de l'utilisateur connecté et mise à jour.
        auth()->user()->update([
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'age' => request('age'),
            'ville' => request('ville'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        return redirect('/mon-compte');
    }
}
