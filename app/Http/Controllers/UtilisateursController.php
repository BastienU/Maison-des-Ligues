<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use App\Message;
use Illuminate\Http\Request;

class UtilisateursController extends Controller
{
    public function liste()
    {
        //Permet de récupérer tous les utilisateurs de la table "Utilisateurs".
        $utilisateurs = Utilisateur::all();

        return view('utilisateurs', [
            'utilisateurs' => $utilisateurs,
        ]);
    }

    public function voir()
    {
        $email = request('email');
        
        $utilisateur = Utilisateur::where('email', $email)->first();            
        
        return view ('utilisateur', [
            'utilisateur' => $utilisateur,
            // 'messages' => $messages,
        ]); 
    }
}
