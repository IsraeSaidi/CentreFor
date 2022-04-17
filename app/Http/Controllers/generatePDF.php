<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\session;


class generatePDF extends Controller
{
    //
    public function ListeFormateur()
    {
        $formateurs = Utilisateur::where('profil', "formateur")->get();

        view()->share('formateurs', $formateurs);
        $pdf = PDF::loadview('pdfListeFormateur');

        return $pdf->download('ListeFormateur.pdf');
    }
    public function ListeEtudiant()
    {
        $etudiants = Utilisateur::where('profil', "etudiant")->get();

        view()->share('etudiants', $etudiants);
        $pdf = PDF::loadview('pdfListeEtudiant');

        return $pdf->download('ListeEtudiants.pdf');
    }

    public function pdfSession()
    {
        $sessions = session::all();
        view()->share('sessions', $sessions);
        $pdf = PDF::loadview('pdfSession');

        return $pdf->download('ListeSessions.pdf');
    }
}
