@extends("Layouts.StagiairesMaster")
@section("MainSection")

<div class="formulaire">
    <h5 class="title">
        Ajouter Stagiaire
    </h5>
        <form action="{{route('Enregistrer')}}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="Nom" class="form-label">Nom du Stagiaire</label>
            <input type="text" class="form-control" id="Nom" name="nom">
        </div>
        <div class="mb-3">
            <label for="Prenoms" class="form-label">Prénoms du Stagiaires</label>
            <input type="text" class="form-control" id="Prenoms" name="prenoms">
        </div>
        <div class="mb-3">
            <label for="Ecole" class="form-label">Ecole du Stagiaires</label>
            <input type="text" class="form-control" id="Ecole" name="ecole">
        </div>
        <div class="mb-3">
            <label for="Filiere" class="form-label">Filière du Stagiaires</label>
            <select type="text" class="form-control" id="Filiere" name="filiere_id">
                <option value="Filière">Filiere</option>
                @foreach($filieres as $filiere)
                    <option value="{{$filiere->id}}">{{$filiere->libelle}}</option>
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
