@extends('layout')

@section('contenu')

    <div class="inscription">
        <fieldset>
            <legend>
                Formulaire d'inscription
            </legend>
            <form action="/inscription" method="post">

                {{ csrf_field() }}
                
                <label for="name">Nom</label>
                <input type="text" id="name" name="nom" placeholder="Nom" autofocus="true" value="{{ old('nom') }}">
                {{-- Permet de retourner la première erreur du champ nom. --}}
                @if($errors->has('nom'))
                    <p>{{ $errors->first('nom') }}</p>
                @endif

                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}">
                @if($errors->has('prenom'))
                    <p>{{ $errors->first('prenom') }}</p>
                @endif

                <label for="age">Age</label>
                <input type="age" id="age" name="age" placeholder="Age" value="{{ old('age') }}">
                @if($errors->has('age'))
                    <p>{{ $errors->first('age') }}</p>
                @endif
                
                <label for="ville">Ville</label>
                <input type="ville" id="ville" name="ville" placeholder="Ville" value="{{ old('ville') }}">
                @if($errors->has('ville'))
                    <p>{{ $errors->first('ville') }}</p>
                @endif

                <label for="email">Mail</label>
                <input type="email" id="email" name="email" placeholder="Mail" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif
                
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Password">
                @if($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>
                @endif

                <p>
                    Télécharger une photo
                </p>

                <input type="submit" value="Valider">

            </form>
        </fieldset>
    </div>

@endsection