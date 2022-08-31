@extends("Layouts.StagiairesMaster")
@section("MainSection")

<div class="formulaire">
    <h5 class="title">
        Modifier Stagiaire
    </h5>
        <form action="{{route('EditionDeStagiaire',['stagiaire'=>$stagiaire->id])}}" method="POST">

        @csrf
        <input type="hidden" name="_method" value="put">


        <div class="mb-3">
            <label for="Nom" class="form-label">Nom du Stagiaire</label>
            <input type="text" class="form-control" id="Nom" name="nom" value="{{$stagiaire->nom}}">
        </div>
        <div class="mb-3">
            <label for="Prenoms" class="form-label">Prénoms du Stagiaires</label>
            <input type="text" class="form-control" id="Prenoms" name="prenoms" value="{{$stagiaire->prenoms}}">
        </div>
        <div class="mb-3">
            <label for="Ecole" class="form-label">Ecole du Stagiaires</label>
            <input type="text" class="form-control" id="Ecole" name="ecole" value="{{$stagiaire->ecole}}">
        </div>
        <div class="mb-3">
            <label for="dateDebut" class="form-label">Date de début de stage</label>
            <input type="date" class="form-control" id="dateDebut" name="dateDebut" value="{{(new DateTime($stagiaire -> dateDebut))->format('Y-m-d')}}">
        </div>
        <div class="mb-3">
            <label for="dateFin" class="form-label">Date de fin de stage</label>
            <input type="date" class="form-control" id="dateFin" name="dateFin" value="{{(new DateTime($stagiaire -> dateFin))->format('Y-m-d')}}">
        </div>
        <div class="mb-3">
            <label for="Filiere" class="form-label">Filière du Stagiaires</label>
            <select type="text" class="form-control" id="Filiere" name="filiere_id">
                    @foreach($filieres as $filiere)
                        @if($filiere->id == $stagiaire->filiere_id)
                            <option value="{{$filiere->id}}" selected>{{$filiere->libelle}}</option>
                        @else
                            <option value="{{$filiere->id}}">{{$filiere->libelle}}</option>
                        @endif
                    @endforeach
            </select>
        </div>
        <div class="Errors">
            @if(session()->has("success"))
                <div class="alert alert-success">
                    <p>{{session()->get("success")}}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{route('ListeStagiaires')}}" class="btn btn-danger">Annuler</a>
        </form>
</div>
@endsection
