@include('include.head')

<body>
<header>
    <a href="{{ url('/') }}"><img src="./asset/Blason_M2L.png" alt="logoMaisonDesLigues retour accueil"></a>
</header>
<div class="inscription">

    <fieldset>
        <legend>
            Formulaire d'inscription
        </legend>
        <form action="inscription" method="post">

            <label for="user-name">Nom</label>
            <input type="text" id="user-name" name="nom" placeholder="Nom" autofocus="true" aria-required="true"
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
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" aria-required="true"
            >

            <p>
                Télécharger une photo
            </p>
            <input type="button" value="Valider">

        </form>
    </fieldset>
</div>

</body>
</html>