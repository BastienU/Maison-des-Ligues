@extends('layout')

@section('contenu')

    <div class="membres">
        <h1>Bienvenue !</h1>
        <br>

        {{-- boucle foreach renvoyant tous les utilisateurs de la bdd--}}
        <ul align="center">
            @foreach($utilisateurs as $utilisateur)
                {{-- if pour tester si l'id de l'utilisateur connecté est celui de l'utilisateur testé dans la boucle afin de n'afficher que ce dernier --}}
                @if($utilisateur->id == auth()->user()->id)
                    <li>
                        <br>
                        <h2 class="utilisateur"> {{ $utilisateur->nom }}&nbsp;{{ $utilisateur->prenom }} </h2>
                        <div class="nvPub">
                            <a href="/{{ $utilisateur->email }}">Ajouter une publication</a>
                        </div>
                        {{-- <br><br>
                        Age : {{ $utilisateur->age }} <br>
                        Ville : {{ $utilisateur->ville }} <br>
                        Email : {{ $utilisateur->email }} <br> --}}
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endsection