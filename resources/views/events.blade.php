@extends('layout')

@section('contenu')

    <h1 align="center">Liste des évènements !</h1>
    <br>

    {{-- Liste renvoyant les évènements de la bdd--}}
    <ul align="center">
        @foreach($events as $event)
            <li>
                
                <h1>{{ $event->contenu }}</h1>
                
                Publié par {{ auth()->user()->nom}}&nbsp;{{auth()->user()->prenom}} à {{ $event->created_at }}
                <hr>
            </li>
        @endforeach
    </ul>
@endsection