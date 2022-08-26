@extends("Layouts.StagiairesMaster")
@section("MainSection")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h5 class="border-bottom pb-2 mb-4 title" style="text-align: center;">Listes des stagiaires de JTEK SOLUTIONS 2022</h5>
<div class="container">
<div class="d-flex justify-content-between mb-2">
        {{$liste_stagiaires ->links()}}
        <div>
            <a href="{{route('AjoutDeStagiaire')}}" class="btn btn-info">+ Ajouter un stagiaire</a>
        </div>
        </div>
        @if(session()->has("successDelete"))
            <div class="alert alert-success">
                <p>{{session()->get("successDelete")}}</p>
            </div>
        @endif
   <table class="table table-bordered table-hover mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Ecole</th>
      <th scope="col">Filière</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($liste_stagiaires as $stagiaire)
    <tr>
      <th scope="row">{{$loop->index + 1}}</th>
      <td>{{$stagiaire -> nom}}</td>
      <td>{{$stagiaire -> prenoms}}</td>
      <td>{{$stagiaire -> ecole}}</td>
      @foreach($filieres as $filiere)
        @if($filiere->id == $stagiaire->filiere_id)
            <td>{{$filiere->libelle}}</td>
        @endif
      @endforeach
     <td>
            <a href="{{route('ModificationDeStagiaire',['stagiaire'=>$stagiaire->id])}}" class="btn" style="background: #152238;"><i class="fa-solid fa-pencil" style="color:orange;"></i></a>
            <a href="#" class="btn" onclick="if(confirm('Voulez-vous vraiment supprimer ce stagiaire?'))
            {document.getElementById('form-{{$stagiaire->id}}').submit()}" style="background: #152238;"><i class="fa-solid fa-trash-can" style="color: red;"></i></a>
            <a href="{{route('Certification', ['stagiaire'=>$stagiaire->id])}}" class="btn btn-success">Certificat</a>
            <form id="form-{{$stagiaire->id}}" action="{{route('SuppressionDeStagiaire', ['stagiaire'=>$stagiaire->id])}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="delete">
            </form>
     </td>
    </tr>
    @endforeach
  </tbody>

</table>
</div>
</div>

@endsection
