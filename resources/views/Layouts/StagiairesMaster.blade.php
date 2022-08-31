<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav id="Navbar">
    <div class="conteneur">
        <div id="Logo">
            <img src="{{asset('pictures/logo_blanc_jtek.png')}}" alt="Logo de JTEK Solutions">
        </div>
        <ul class="Onglets">
            <li class="onglet">
                <a href="{{route('Home')}}">Accueil</a>
            </li>
            <li class="onglet">
                <a href="{{route('ListeStagiaires')}}">Stagiaires</a>
            </li>
            <li class="onglet">
                <a href="{{route('ListeCertifications')}}">Certifications</a>
            </li>
            <li class="onglet boutonAjout">
                <a href="{{route('AjoutDeStagiaire')}}"> + Stagiaire</a>
            </li>
        </ul>
    </div>
</nav>

<section id="MainSection">
     @yield("MainSection")
</section>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
