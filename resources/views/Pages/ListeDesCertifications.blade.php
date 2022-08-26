@extends("Layouts.StagiairesMaster")
@section("MainSection")

<div class="my-3 p-3 bg-body rounded shadow-sm">
        <h5 class="border-bottom pb-2 mb-4 title" style="text-align: center;">
            Liste des certifications de Stagiaires JTEK SOLUTIONS
        </h5>
        <div class="row" id="ConteneurCertifications">
            @foreach($liste_certifications as $certification)
            <div class="Certificat">
                <div class="bande">
                    <div class="badge">
                        <img src="{{asset('pictures/badge.png')}}" alt="Image d'un Badge">
                    </div>
                </div>
                <span>
                     {{$certification->nom}} {{$certification->prenoms}}
                </span>
                <div class="bande-bas">
                    <a href="{{route('Certification', ['stagiaire'=>$certification->id])}}" id="view-link"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{route('TelechargerPDF',['stagiaire'=>$certification->id])}}"><i class="fa-solid fa-download" id="download"></i></a>
                </div>
            </div>
            @endforeach
        </div>
       <div class="justify-content-center" id="pagination">
                {{$liste_certifications->links()}}
       </div>
</div>

@endsection
