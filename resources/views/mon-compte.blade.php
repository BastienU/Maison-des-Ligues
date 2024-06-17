@extends('layout')

@section('contenu')

    <div class="section">
        <h1 class="title is-1">Mon compte</h1>

        <p>Vous êtes bien connecté.</p>

        <a href="/deconnexion" class="button">Déconnexion</a>

        <div class="modification">
        <fieldset>
            <legend>
                Formulaire de modification
            </legend>
            <form action="/modification" method="post">

                {{ csrf_field() }}
                
                <label for="name">Nom</label>
                <input type="text" id="name" name="nom" placeholder="Nom" autofocus="true">
                {{-- Permet de retourner la première erreur du champ nom. --}}
                @if($errors->has('nom'))
                    <p>{{ $errors->first('nom') }}</p>
                @endif

                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="prenom" placeholder="Prénom">
                @if($errors->has('prenom'))
                    <p>{{ $errors->first('prenom') }}</p>
                @endif

                <label for="age">Age</label>
                <input type="age" id="age" name="age" placeholder="Age">
                @if($errors->has('age'))
                    <p>{{ $errors->first('age') }}</p>
                @endif
                
                <label for="ville">Ville</label>
                <input type="ville" id="ville" name="ville" placeholder="Ville">
                @if($errors->has('ville'))
                    <p>{{ $errors->first('ville') }}</p>
                @endif

                <label for="email">Mail</label>
                <input type="email" id="email" name="email" placeholder="Mail">
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