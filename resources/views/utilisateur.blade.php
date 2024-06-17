@extends('layout')

@section('contenu')

    <div class="section">
        <h1>{{ $utilisateur->email }}</h1>

        @if (auth()->check() AND auth()->user()->id === $utilisateur->id)
        <div class="connexion">
            <fieldset>
                <legend>
                    Formulaire de publication d'évènement
                </legend>
                
                <form action="/message" methode="post">
                    {{ csrf_field() }}

                    <label class="label">Message</label>
                    <div class="control">
                        <textarea class="textarea" name="message" placeholder="Que souhaitez-vous publier ?"></textarea>
                    </div>
                    @if($errors->has('message'))
                        <p class="help is-danger">{{ $errors->first('message') }}</p>
                    @endif
                    
                    <input type="submit" value="Publier">

                </form>
            </fieldset>
        </div>
        @endif
    </div>
@endsection