@include('include.head')

<body>
    <header>
        <a href="{{ url('/') }}"><img src="./asset/Blason_M2L.png" alt="logoMaisonDesLigues retour accueil"></a>
    </header>
    <div class="membre">
        <h2>Merci de vous être inscrit ! Votre formulaire a été soumis avec succès.</h2>

        <h3>Vous êtes le nouveau membre</h3>
        <ul>
            <li>nom : le nom</li>
            <li>prénom : le prénom</li>
            <li>age : l'âge</li>
            <li>ville : votre ville</li>
            <li>mail : admin@net.net</li>
        </ul>
        <p>Votre photo</p>
        <img src="./assets/?" alt="Photo de profil">

        <button type="submit">Revenir à l'accueil</button>
    </div>
</body>
</html>