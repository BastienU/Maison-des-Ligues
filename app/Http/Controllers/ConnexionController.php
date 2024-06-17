<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire()
    {
        return view('connexion');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //Methode permettant de tester une connexion.
        $resultat = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if ($resultat)
        {
            return redirect('/mon-compte');
        }

        //Fonction back() permet de rediriger vers la page précédente
        //withInput() permet de conserver les données remplies.
        //withErrors() permet de renvoyer un message d'erreur personnalisé.
        return back()-> withInput()->withErrors([
            'email' => 'Vos identifiants sont incorrects.',
        ]);
    }
}
