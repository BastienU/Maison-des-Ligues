<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
    }

    public function traitement() 
    {
        //dump("Vous êtes dans la méthode Traitement");
        // Permet de récupérer toutes les informations du formulaire d'inscription.
        request()->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'age' => ['required'],
            'ville' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ], [
            // Message spécifique pour le champ password uniquement pour le formulaire d'inscription.
            'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire :min caractères.'
        ]);

        //Insertion de l'utilisateur dans la BDD.
        $utilisateur = Utilisateur::create([
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'age' => request('age'),
            'ville' => request('ville'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        return "Nous avons bien reçu votre email qui est " . request('email');
    }
}
