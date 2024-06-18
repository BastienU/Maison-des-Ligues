@extends('layout')

@section('contenu')

    <h1 align="center">Modifier l'évènement</h1>
    <br>

    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="field">
            <div class="txtModifier">
                <textarea class="textarea" name="contenu" id="contenu">{{ old('contenu', $event->contenu) }}</textarea>
            </div>
            @if ($errors->has('contenu'))
                <p class="help is-danger">{{ $errors->first('contenu') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="btnModifier">
                <button type="submit" class="button is-primary">Mettre à jour</button>
            </div>
        </div>
    </form>
@endsection