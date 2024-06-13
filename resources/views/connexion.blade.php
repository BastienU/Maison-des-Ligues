@include('include.head')

<body>
    <header>
        <a href="{{ url('/') }}"><img src="./asset/Blason_M2L.png" alt="logoMaisonDesLigues retour accueil"></a>
    </header>
    <div class="connexion">
        <fieldset>
            <legend>
                Connexion
            </legend>
            <form action="connexion" method="post">

                <label for="user-name">Nom</label>
                <input id="user-name" type="text" name="nom" placeholder="Nom" autofocus="true" aria-required="true"
                >
                <label for="user-firstname">Prénom</label>
                <input type="text" id="user-firstname" name="prenom" placeholder="Prénom" aria-required="true"
                >

                <input type="submit" value="Valider">
            </form>
        </fieldset>
    </div>
</body>
</html>