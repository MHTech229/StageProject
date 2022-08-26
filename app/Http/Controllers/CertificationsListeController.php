<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Stagiaire;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CertificationsListeController extends Controller
{
    public function ListeDesCertifications() {
        $filieres = Filiere::all();
        $liste_certifications = Stagiaire::orderby("nom", "asc")->paginate(4);
        return view("Pages/ListeDesCertifications", compact("liste_certifications","filieres"));
    }
    public function Certification(Stagiaire $stagiaire) {
        $filieres = Filiere::all();
        return view("Pages/Certification", compact("stagiaire","filieres"));
    }
    public function TelechargerPDF(Stagiaire $stagiaire) {

        $filieres = Filiere::all();
        $pdf = PDF::loadView("Pages.Example",['filieres'=>$filieres, 'stagiaire'=>$stagiaire]);
        return $pdf->download($stagiaire->nom." ".$stagiaire->prenoms.".pdf");
       // $pdf = DomPDFPDF::loadView("Pages/Certification", compact("stagiaire","filieres"));

    }
}
