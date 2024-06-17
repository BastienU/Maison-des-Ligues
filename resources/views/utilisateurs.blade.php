@extends('layout')

@section('contenu')

    <h1>Les utilisateurs</h1>

    {{-- Liste renvoyant  --}}
    <ul align="center">
        @foreach($utilisateurs as $utilisateur)
            <li>
                <h1> {{ $utilisateur->nom }} &nbsp; {{ $utilisateur->prenom }} <hr></h1>
                Age : {{ $utilisateur->age }} <br>
                Ville : {{ $utilisateur->ville }} <br>
                Email : {{ $utilisateur->email }} <br>
                <hr>
            </li>
        @endforeach
    </ul>
@endsection