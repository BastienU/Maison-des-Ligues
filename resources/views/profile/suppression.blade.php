@include('include.head')


<body>    
    <header>
        <a href="{{ url('/') }}"><img src="./asset/Blason_M2L.png" alt="logoMaisonDesLigues retour accueil"></a>
    </header>
    <div class="suppression">
        <h2>Confirmation de la suppression de membre</h2>
        
        <fieldset>
            <legend>
                Supprimer le client
            </legend>
            <form action="suppression" method="post">
                
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
                
                <img src="./assets/?" alt="Photo de profil">
                <p>Êtes vous sûr de vouloir supprimer ce membre ?</p>
                <input type="button" value="Oui, supprimer">
                <input type="button" value="Non, revenir à l'accueil">
            </form>
        </fieldset>
    </div>
</body>
</html>