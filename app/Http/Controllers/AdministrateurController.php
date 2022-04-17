<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use App\Models\Formation;
use App\Models\session;
use App\Models\salle;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class AdministrateurController extends Controller
{
    public function index()
    {
        
        return view('Admin.Adminhome');
    }
    public function gestionpersonnels()
    {
        return view('Admin.gestionpersonnels');
    }
    public function add()
    {

        return view('Admin.AddAdministrateur');
    }
    // public function __construct()

    // {
    //     $this->middleware('auth');
    //      $this->middleware('role:admin');
    // }
    public function addAdministrateur(Request $rqt)
    {

       
        $nom = $rqt->nom;
        $prenom = $rqt->prenom;
        $cin = $rqt->cin;
        $tel = $rqt->tel;
        $email = $rqt->email;
        $profil = $rqt->profil;

        $employe = new Administrateur();
       
        $employe->nom = $nom;
        $employe->prenom = $prenom;
        $employe->cin = $cin;
        $employe->tel = $tel;
        $employe->email = $email;
        $employe->profil = $profil;
        $employe->save();

        // return Redirect::route('liste');
    }
    public function listeAdministrateur()
    {

        $employes = Administrateur::all();

        return view('Admin.listeAdministrateur', ['emps' => $employes]);
    }
    public function deleteAdministrateur(Request $rqt)
    {

        $id = $rqt['id'];
        $employe = Administrateur::find($id);
        $employe->delete();

        return Redirect::route('liste');
    }

    public function editeAdministrateur(Request $rqt)
    {

        $id = $rqt['id'];
        $employe = Administrateur::find($id);

        return view('Admin.editAdministrateur', compact('employe'));
    }

    public function updateAdministrateur(Request $rqt)
    {

        $id = $rqt['id'];
        $employe = Administrateur::find($id);

        $nom = $rqt->nom;
        $prenom = $rqt->prenom;
        $cin = $rqt->cin;
        $tel = $rqt->tel;
        $email = $rqt->email;
        $profil = $rqt->profil;

        $employe->nom = $nom;
        $employe->prenom = $prenom;
        $employe->cin = $cin;
        $employe->tel = $tel;
        $employe->email = $email;
        $employe->profil = $profil;
        $employe->update();
        return Redirect::route('liste');
    }




    public function addf()
    {

        return view('Admin.Addformateur');
    }
    // public function __construct()

    // {
    //     $this->middleware('auth');
    //      $this->middleware('role:admin');
    // }
    public function addformateur(Request $rqt)
    {
        $nom = $rqt->nom;
        $prenom = $rqt->prenom;
        $cin = $rqt->cin;
        $age = $rqt->age;
        $tel = $rqt->tel;
        $email = $rqt->email;
        $description = $rqt->description;
        $profil = $rqt->profil;

        $formateur = new Utilisateur();
        $formateur->nom = $nom;
        $formateur->prenom = $prenom;
        $formateur->cin = $cin;
        $formateur->tel = $tel;
        $formateur->age = $age;
        $formateur->email = $email;
        $formateur->description = $description;
        $formateur->profil = $profil;
        $formateur->save();

        return Redirect::route('listeformateur');
    }

    public function listeformateur()
    {

        $formateur = Utilisateur::where('profil', "formateur")->get();

        return view('Admin.listeformateur', ['frms' => $formateur]);
    }
    public function deleteformateur(Request $rqt)
    {

        $id = $rqt['id'];
        $formateur = Utilisateur::find($id);
        $formateur->delete();

        return Redirect::route('listeformateur');
    }

    public function editFormateur(Request $rqt)
    {

        $id = $rqt['id'];
        $formateur = Utilisateur::find($id);

        return view('Admin.editformateur', compact('formateur'));
    }

    public function updateformateur(Request $rqt)
    {

        $id = $rqt['id'];
        $formateur = Utilisateur::find($id);
        $nom = $rqt->nom;
        $prenom = $rqt->prenom;
        $age = $rqt->age;
        $cin = $rqt->cin;
        $email = $rqt->email;
        $tel = $rqt->tel;
        $profil = $rqt->profil;
        $description = $rqt->description;


        $formateur->nom = $nom;
        $formateur->prenom = $prenom;

        $formateur->age = $age;
        $formateur->cin = $cin;
        $formateur->email = $email;
        $formateur->tel = $tel;

        $formateur->profil = $profil;
        $formateur->description = $description;
        $formateur->update();
        return Redirect::route('listeformateur');
    }

    public function addfo()
    {

        return view('Admin.Addformation');
    }
    public function addformation(Request $rqt)
    {
        $nom = $rqt->nom;
        $description = $rqt->description;
        $durée = $rqt->durée;
        $prix = $rqt->prix;


        $formation = new Formation();
        $formation->nom_formation = $nom;
        $formation->description = $description;
        $formation->durée = $durée;
        $formation->prix = $prix;

        $formation->save();

        return Redirect::route('listeformation');
    }

    public function listeformation()
    {

        $formation = Formation::all();

        return view('Admin.listeformation', ['frmts' => $formation]);
    }

    public function deleteformation(Request $rqt)
    {

        $id = $rqt['id'];
        $formation = Formation::find($id);
        $formation->delete();

        return Redirect::route('listeformation');
    }

    public function editformation(Request $rqt)
    {

        $id = $rqt['id'];
        $formation = Formation::find($id);

        return view('Admin.editformation', compact('formation'));
    }

    public function updateFormation(Request $rqt)
    {

        $id = $rqt['id'];
        $formation = Formation::find($id);
        $nom = $rqt->nom;
        $description = $rqt->description;
        $durée = $rqt->durée;
        $prix = $rqt->prix;


        $formation->nom_formation = $nom;
        $formation->description = $description;
        $formation->durée = $durée;
        $formation->prix = $prix;

        $formation->update();
        return Redirect::route('listeformation');
    }


    //secretairee

    public function first()
    {
        return view("Secretaire.homeSecretaire");
    }
    public function listeFormateurSec()
    {

        $formateur = Utilisateur::where('profil', "formateur")->get();

        return view('Secretaire.ListeFormateur', ['formateurs' => $formateur]);
    }

    public function gestionEtudiant()
    {
        $etudiants = Utilisateur::where('profil', "etudiant")->get();

        return view('Secretaire.GestionEtudiants', ['etudiants' => $etudiants]);
    }

    public function deleteEtudiant($id)
    {
        $etudiant = Utilisateur::find($id);
        $etudiant->delete();
        return redirect()->route('gestionEtudiant');
    }
    public function deleteSession($id)
    {
        $session = session::find($id);
        $session->delete();
        return redirect()->route('gestionSession');
    }
    public function modifierEtudiant($id)
    {
        $formations = Formation::all();
        $etudiant = Utilisateur::find($id);
        return view('Secretaire.modifierEtudiant')->with([
            'etudiant' => $etudiant, 'formations' => $formations
        ]);
    }



    public function updateEtudiant(Request $rqt, $id)
    {
        $etudiant = Utilisateur::where('id', $id)->latest()->first();
        $etudiant->update([
            'nom' => $rqt->nom,
            'prenom' => $rqt->prenom,
            'age' => $rqt->age,
            'cin' => $rqt->cin,
            'email' => $rqt->email,
            'formation' => $rqt->formation,
            'tel' => $rqt->tel,
            'is_payer' => $rqt->is_payer,
            'niveau' => $rqt->niveau,
            'profil' => $rqt->profil,
            'description' => $rqt->description,
        ]);
        return redirect()->route('gestionEtudiant');
    }

    public function gestionSession()
    {
        $sessions = session::all();

        return view(
            'Secretaire.GestionSessions',
            ['sessions' => $sessions]
        );
    }

    public function ajouterSession()
    {
        $formateur = Utilisateur::where('profil', "formateur")->get();
        $formations = Formation::all();
        $salles = salle::all();
        return view('Secretaire.ajouterSession', ['formateurs' => $formateur, 'formations' => $formations, 'salles' => $salles]);
    }

    public function createSession(Request $request)
    {
        $formation = Formation::where('id', $request->id_formation)->latest()->first();
        $formateur = Utilisateur::where('id', $request->id_formateur)->latest()->first();
        $salle = salle::where('id', $request->id_salle)->latest()->first();
        session::create([
            'id_formation' => $request->id_formation,
            'id_formateur' => $request->id_formateur,
            'date_debut' => $request->date_debut,
            'temps_debut' => $request->temps_debut,
            'temps_fin' => $request->temps_fin,
            'salle' => $salle->name,
            'id_salle' => $request->id_salle,
            'formation' => $formation->nom_formation,
            'formateur' => $formateur->prenom . " " . $formateur->nom,
        ]);

        // return view('contact');
        return redirect()->route('gestionSession');
    }

    public function editSession($id)
    {
        $formateur = Utilisateur::where('profil', "formateur")->get();
        $formations = Formation::all();
        $salles = salle::all();
        $session = session::find($id);
        return view('Secretaire.editSession')->with([
            'session' => $session, 'formations' => $formations, 'formateurs' => $formateur, 'salles' => $salles
        ]);
    }
    public function updateSession(Request $request, $id)
    {
        $session = session::where('id', $id)->latest()->first();
        $formation = Formation::where('id', $request->id_formation)->latest()->first();
        $formateur = Utilisateur::where('id', $request->id_formateur)->latest()->first();
        $salle = salle::where('id', $request->id_salle)->latest()->first();
        $session->update([
            'id_formation' => $request->id_formation,
            'id_formateur' => $request->id_formateur,
            'date_debut' => $request->date_debut,
            'temps_debut' => $request->temps_debut,
            'temps_fin' => $request->temps_fin,
            'salle' => $salle->name,
            'id_salle' => $request->id_salle,
            'formation' => $formation->nom_formation,
            'formateur' => $formateur->prenom . " " . $formateur->nom,
        ]);
        return redirect()->route('gestionSession');
    }
}
