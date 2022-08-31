<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Stagiaire;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CertificationsListeController extends Controller
{
    public function listeDesCertifications() {
        $filieres = Filiere::all();
        $liste_certifications = Stagiaire::orderby("nom", "asc")->paginate(4);
        return view("Pages/listeDesCertifications", compact("liste_certifications","filieres"));
    }
    public function certification(Stagiaire $stagiaire) {

        $filieres = Filiere::all();
        $pdf = PDF::loadView("Pages.certification",['filieres'=>$filieres, 'stagiaire'=>$stagiaire]);
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
       return $pdf->stream();
        /*$filieres = Filiere::all();
        return view("Pages/certification", compact("stagiaire","filieres"));*/
    }
    public function telechargerPDF(Stagiaire $stagiaire) {

        $filieres = Filiere::all();
        $pdf = PDF::loadView("Pages.certification",['filieres'=>$filieres, 'stagiaire'=>$stagiaire]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download($stagiaire->nom." ".$stagiaire->prenoms.".pdf");
       // $pdf = DomPDFPDF::loadView("Pages/Certification", compact("stagiaire","filieres"));
    }
}
