<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiairesController extends Controller
{
    public function ListeDesStagiaires() {
        $filieres = Filiere::all();
        $liste_stagiaires = Stagiaire::orderby("nom", "asc")->paginate(5);
        return view("Pages/ListeDesStagiaires", compact("liste_stagiaires","filieres"));
    }
    public function ListeDesCertifications() {
        return view("Pages/ListeDesCertifications");
    }
    public function Certification() {
        return view("Pages/Certification");
    }
    public function AjouterStagiaire() {
        $filieres = Filiere::all();
        return view("Pages/AjouterStagiaire", compact("filieres"));
    }
    public function ModifierStagiaire(Stagiaire $stagiaire) {
        $filieres = Filiere::all();
        return view("Pages/ModifierStagiaire", compact("stagiaire","filieres"));
    }
    public function SupprimerStagiaire(Stagiaire $stagiaire) {
        $stagiaire-> delete();
        return back()->with("successDelete", "Stagiaire supprimé avec succès!");
    }
    public function Stocker(Request $request) {
        $request->validate([
             "nom" => "required",
             "prenoms" => "required",
             "ecole" => "required",
             "filiere_id" => "required"
        ]);

        Stagiaire::create($request->all());
        return back()->with("success", "Stagiaire ajouté avec succès!");
     }
    public function Modifier(Request $request, Stagiaire $stagiaire) {
        $request->validate([
            "nom" => "required",
            "prenoms" => "required",
            "ecole" => "required",
            "filiere_id" => "required"
       ]);

       $stagiaire->update($request->all());

       return back()->with("success", "Information du Stagiaire mis à jour avec succès!");
    }
}
