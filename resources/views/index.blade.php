@include('include.head')

<body>
    <h2 align="center">Maison des ligues tous les sports</h2>
    <div align="center" class="Accueil">
        <p>
            Prêt pour la compétition ? Cliquez sur le bouton pour commencer !
        </p>
        <p>
            Tous les mois profitez de toutes les nouveautés et opportunités. A partir du mois prochain on vous propose toutes les séance 
            de sport sur vos support préférés
        </p>
        <img src="/asset/Blason_M2L.png" alt="logoMaisonDesLigues">
        <br>
        Cliquez pour vous <a href="{{ url('/inscription') }}">inscrire</a> ou pour vous <a href="{{ url('/connexion') }}">connecter</a>
    </div>
</body>
</html>