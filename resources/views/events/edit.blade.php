@extends('layout')

@section('contenu')

    <h1 align="center">Modifier l'évènement</h1>
    <br>

    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="field">
            <label class="label" for="contenu">Contenu</label>
            <div class="control">
                <input class="input" type="text" name="contenu" id="contenu" value="{{ old('contenu', $event->contenu) }}">
            </div>
            @if ($errors->has('contenu'))
                <p class="help is-danger">{{ $errors->first('contenu') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-primary">Mettre à jour</button>
            </div>
        </div>
    </form>
@endsection