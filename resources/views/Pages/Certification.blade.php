<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/certification.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Certification</title>
</head>
<body>
    <section id="AttestationDeStage">
        <div id="conteneurCertification">
            <div id="certifBadge">
                <img src="{{asset('pictures/badge4.png')}}" alt="Badge de Certification">
            </div>
            <div id="LogoJTEK">
                <img src="{{asset('pictures/LogoJTEK.png')}}" alt="Logo de JTEK SOLUTIONS">
            </div>
            <span id="Uppertitle">Certificat</span>
            <span id="Lowertitle">De Stage</span>
            <div class="certificatebody">
                <span id="FirstSentence">Ceci permet de Certifier que</span><br><br>
                <span id="NomStagiaire">{{$stagiaire->nom}}     {{$stagiaire->prenoms}}_____</span><br>
                <div id="conteneurSpans">
                    <span class="point"></span>
                    <span class="point"></span>
                    <span class="line"></span>
                    <span class="point"></span>
                    <span class="point"></span>
                </div><br>
                <span id="SecondSentence">Etait dans notre entreprise en tant que stagiaire <br> du 02 Août au 02 Septembre 2022</span>
                <div id="Signature">

                </div>
                <div id="Directeur">
                    <span id="NomDirecteur">M. Jean-Pierre KOUKPAKI</span><br>
                    <span id="PosteDirecteur">Directeur De JTEK SOLUTIONS</span>
                </div>
            </div>
        </div>
    </section>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
<!--
    <div class="container">
        <p>
            Le certificat de stage:
        </p>
        <p>
            Nom: {{$stagiaire->nom}}
        </p>
        <p>
            Prenoms: {{$stagiaire->prenoms}}
        </p>
        <p>
            Ecole: {{$stagiaire->ecole}}
        </p>
            @foreach($filieres as $filiere)
            @if($filiere->id == $stagiaire->filiere_id)
                <p>Filiere: {{$filiere->libelle}}</p>
            @endif
            @endforeach


</div>

-->
