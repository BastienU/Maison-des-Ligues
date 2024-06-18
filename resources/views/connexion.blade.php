@extends('layout')

@section('contenu')

    <div class="connexion">
        <fieldset>
            <legend>
                Formulaire de connexion
            </legend>
            <form action="/connexion" method="post">

                {{ csrf_field() }}

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

                <input type="submit" value="Connexion">

            </form>
        </fieldset>
    </div>

@endsection