<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StagiairesController extends Controller
{
    public function listeDesStagiaires() {
        $filieres = Filiere::all();
        $liste_stagiaires = Stagiaire::orderby("nom", "asc")->paginate(5);
        return view("Pages/listeDesStagiaires", compact("liste_stagiaires","filieres"));
    }
    public function listeDesCertifications() {
        return view("Pages/listeDesCertifications");
    }
    public function certification() {
        return view("Pages/certification");
    }
    public function ajouterStagiaire() {
        $filieres = Filiere::all();
        return view("Pages/ajouterStagiaire", compact("filieres"));
    }
    public function modifierStagiaire(Stagiaire $stagiaire) {
        $filieres = Filiere::all();
        return view("Pages/modifierStagiaire", compact("stagiaire","filieres"));
    }
    public function supprimerStagiaire(Stagiaire $stagiaire) {
        $stagiaire-> delete();
        return back()->with("successDelete", "Stagiaire supprimé avec succès!");
    }
    public function stocker(Request $request) {
        $request->validate([
             "nom" => "required",
             "prenoms" => "required",
             "ecole" => "required",
             "filiere_id" => "required",
             "dateDebut" => "required",
             "dateFin" => "required"
        ]);

        Stagiaire::create($request->all());
        return back()->with("success", "Stagiaire ajouté avec succès!");
     }
    public function modifier(Request $request, Stagiaire $stagiaire) {
        $request->validate([
            "nom" => "required",
            "prenoms" => "required",
            "ecole" => "required",
            "filiere_id" => "required",
            "dateDebut" => "required",
            "dateFin" => "required"
       ]);

       $stagiaire->update($request->all());

       return back()->with("success", "Information du Stagiaire mis à jour avec succès!");
    }
}
