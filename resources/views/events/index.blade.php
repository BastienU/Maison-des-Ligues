@extends('layout')

@section('contenu')

    <h1 align="center">Liste des évènements !</h1>
    <br>

    <div class="publication">
        <a href="/{{ auth()->user()->email}}">Nouvelle publication</a>
    </div>
    <br><br>
    {{-- Liste renvoyant les évènements de la bdd--}}
    <ul align="center">
        @foreach($events as $event)
            <li>
                <h1>{{ $event->contenu }}</h1>
                
                Publié par {{ auth()->user()->nom}}&nbsp;{{auth()->user()->prenom}} à {{ $event->created_at }}
                

                <div class="modifier">
                    <a href="{{ route('events.edit', $event->id) }}" class="button is-primary">Modifier</a>
                </div>

                <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button id="supprimer" type="submit" class="button is-danger">Supprimer</button>
                </form>
                
                <hr>
            </li>
        @endforeach
    </ul>
@endsection