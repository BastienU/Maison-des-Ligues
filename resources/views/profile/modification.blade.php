@include('include.head')

<body>
    <header>
        <a href="{{ url('/') }}"><img src="./asset/Blason_M2L.png" alt="logoMaisonDesLigues retour accueil"></a>
    </header>
    <div class="modifier">
        <h2>Merci de modifier les champs</h2>
        <h1>Modifier l'inscription</h1>

        <fieldset>
            <legend>
                Formulaire de modification du client
            </legend>
        <form action="modification" method="post">

            <label for="user-name">Nom</label>
            <input id="user-name" type="text" name="nom" placeholder="Nom" autofocus="true" aria-required="true"
            >

            <label for="user-firstname">Prénom</label>
            <input type="text" id="user-firstname" name="prenom" placeholder="Prénom" aria-required="true"
            >

            <label for="age">Age</label>
            <input type="age" id="age" name="age" placeholder="Age" aria-required="true"
            >
            
            <label for="ville">ville</label>
            <input type="ville" id="ville" name="ville" placeholder="Ville" aria-required="true"
            >

            <label for="email">E-mail</label>
            <input type="email" id="email" name="mail" placeholder="E-mail" aria-required="true"
            >

            <input type="button" value="Modifier">
        </form>
    </fieldset>
    </div>
</body>
</html>