<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Utilisateur extends Model implements Authenticatable
{
    use BasicAuthenticatable;

    //Protège le modèle contre l'affectation de masse. Seuls les champs renseignés peuvent être remplis.
    protected $fillable = ['nom', 'prenom', 'age', 'ville', 'email', 'password'];
}