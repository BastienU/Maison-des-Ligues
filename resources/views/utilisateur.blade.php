@extends('layout')

@section('contenu')

    <div class="section">           
        
        {{-- <h1 class="title is-1" align="center">{{ $utilisateur->email }}</h1> --}}

        @if($utilisateur)
            <h1 class="title is-1" align="center">{{ auth()->user()->nom }}&nbsp;{{ auth()->user()->prenom }}</h1>
        @endif

        <div class="evenement">
            <fieldset>
                <legend>
                    Formulaire de publication d'évènement
                </legend>
                
                <form action="/events" methode="post">
                    {{ csrf_field() }}
                    
                    <div class="field">
                        <label class="label">Votre message :</label>
                        <div class="control" align="center">
                            <textarea class="textarea" name="message" placeholder="Que souhaitez-vous publier ?"></textarea>
                        </div>
                        @if($errors->has('message'))
                            <p class="help is-danger">{{ $errors->first('message') }}</p>
                        @endif
                    </div>
                    <div class="field">
                        <div class="control" align="center">
                            <button class="button is-link" type="submit">Publier</button>
                        </div>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
@endsection