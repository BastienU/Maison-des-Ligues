{{-- @extends('layout')

@section('contenu')

    <div class="connexion">
        <fieldset>
            <legend>
                Formulaire de publication d'évènement
            </legend>
            
            <form action="/message" methode="post">
                {{ csrf_field() }}

                <label class="titre">Titre de l'évènement</label>
                <textarea class="textarea" name="titre" placeholder="Titre de l'évènement"></textarea>
                @if($errors->has('titre'))
                    <p>{{ $errors->first('titre') }}</p>
                @endif

                <label class="label">Message</label>
                <div class="control">
                    <textarea class="textarea" name="message" placeholder="Que souhaitez-vous publier ?"></textarea>
                </div>
                @if($errors->has('message'))
                    <p>{{ $errors->first('message') }}</p>
                @endif
                
                <input type="submit" value="Publier">
            </form>
        </fieldset>
    </div>

@endsection --}}