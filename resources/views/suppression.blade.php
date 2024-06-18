@extends('layout')

@section('contenu')

    <div class="section">
        <h1 class="title is-1" align="center">Mon compte</h1>

        <p align="center">Vous êtes bien connecté.</p>

        <div class="suppression">
            <fieldset>
                <legend>
                    Formulaire de suppression
                </legend>
                <form action="/destroy" method="post">

                    {{ csrf_field() }}
                    
                    <label for="name">"{{ auth()->user()->nom }}"</label>
                    {{-- <input type="text" id="name" name="nom" placeholder="Nom" autofocus="true" value="{{ auth()->user()->nom }}"> --}}
                    {{-- Permet de retourner la première erreur du champ nom. --}}
                    @if($errors->has('nom'))
                        <p>{{ $errors->first('nom') }}</p>
                    @endif

                    <label for="firstname">Prénom</label>
                    <input type="text" id="firstname" name="prenom" placeholder="Prénom" value="{{ auth()->user()->prenom }}">
                    @if($errors->has('prenom'))
                        <p>{{ $errors->first('prenom') }}</p>
                    @endif

                    <label for="age">Age</label>
                    <input type="age" id="age" name="age" placeholder="Age" value="{{ auth()->user()->age }}">
                    @if($errors->has('age'))
                        <p>{{ $errors->first('age') }}</p>
                    @endif
                    
                    <label for="ville">Ville</label>
                    <input type="ville" id="ville" name="ville" placeholder="Ville" value="{{ auth()->user()->ville }}">
                    @if($errors->has('ville'))
                        <p>{{ $errors->first('ville') }}</p>
                    @endif

                    <label for="email">Mail</label>
                    <input type="email" id="email" name="email" placeholder="Mail" value="{{ auth()->user()->email }}">
                    @if($errors->has('email'))
                        <p>{{ $errors->first('email') }}</p>
                    @endif
                    
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="Password">
                    @if($errors->has('password'))
                        <p>{{ $errors->first('password') }}</p>
                    @endif

                    <input type="submit" value="Enregistrer">
                </form>
            </fieldset>
        </div>
    </div>
@endsection