<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiairesController;
use App\Http\Controllers\CertificationsListeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('Home');

//Création da la route pour la page d'affichage  de la liste des Stagiaires
Route::get('/ListeStagiaires', [StagiairesController::class, "ListeDesStagiaires"])->name('ListeStagiaires');
//Création  de la route pour l'affichage des listes des certifications
Route::get('/ListeCertifications', [CertificationsListeController::class, "ListeDesCertifications"])->name('ListeCertifications');
//Création de la route pour la page d'affichage de la certification pour chacun des Stagiaire
Route::get('/Certification/{stagiaire}', [CertificationsListeController::class, "Certification"])->name('Certification');
//Création de la route pour télécharger la page d'affichage de la certification pour chacun des Stagiaire sous format PDF
Route::get('/TelechargerCertification/{stagiaire}', [CertificationsListeController::class, "TelechargerPDF"])->name('TelechargerPDF');
//Création de la route pour l'ajout de Stagiaire
Route::get('/AjoutStagiaire', [StagiairesController::class, "AjouterStagiaire"])->name('AjoutDeStagiaire');
//Création de la route pour la modification des informations d'un Stagiaire
Route::get('/ModificationStagiaire/{stagiaire}',[StagiairesController::class, "ModifierStagiaire"])->name("ModificationDeStagiaire");
//Création de la route pour la suppression d'un Stagiaire
Route::delete('/SuppressionStagiaire/{stagiaire}', [StagiairesController::class, "SupprimerStagiaire"])->name('SuppressionDeStagiaire');
//Création de la route permettant d'enregistrer chaque Stagiaire dans la base de donnée
Route::post('/Stocker',[StagiairesController::class, "Stocker"])->name("Enregistrer");
//Création de la route permeettant de modifier les informations de chaque stagiaire dans la base de donnée
Route::put('/ModificationStagiaire/{stagiaire}',[StagiairesController::class, "Modifier"])->name("EditionDeStagiaire");
