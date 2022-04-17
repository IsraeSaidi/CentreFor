<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cours;
use App\Models\session;
use App\Models\Formation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UtilisateurController extends Controller
{
    public function index()
    {
        return view('Formateur.homeformateur');
    }
    // public function __construct()

    // {
    //     $this->middleware('auth');
    //     // $this->middleware('role:Etudiant');
    // }
    protected function createf(Request $rqt)
    {
        
            $user = new User();
            $user->name =$rqt->name;
            $user->email =$rqt->email;
            $user->profil =$rqt->profil;
            $user->password =Hash::make($rqt->password);

        $user-> save();
        $user->roles()->attach(3);
        return Redirect::route('listeformateur');
    }

    public function ajouterC(){
        $form = Utilisateur::where('email',Auth::user()->email)->first();
        $id_formateur = $form->id;
        $formateur = Utilisateur::where('id',$id_formateur)->get();
        $formations = Session::where('id_formateur',$id_formateur)->get();
        $data = Cours::where('id_formateur',$id_formateur)->get();
        
        return view('Formateur.ajouterCours',['formateurs' => $formateur, 'formations' => $formations,'data'=>$data]);
    }
    

    public function storeC(Request $request){

        $formation = Formation::where('id', $request->id_formation)->latest()->first();
       
        $data = new Cours();
        $data->titre = $request->titre;
        $data->description = $request->description;
        $file = $request->file;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $data->id_formation = $formation->id;
        $formateur = Utilisateur::where('email',Auth::user()->email)->first();
        
        $data->id_formateur = $formateur->id;
        $request->file->move('assets',$filename);
        $data->file = $filename;
        $data->save();
        
        return redirect()->back();
        
    }


    public function telechargerC(Request $request,$file){

        return response()->download(public_path('assets/'.$file));
     }

    public function getEtudiant(){
        $form = Utilisateur::where('email',Auth::user()->email)->first();
        $id_formateur = $form->id;

        $listFormationEtudiants = array();

        $formationFormateur = session::where('id_formateur',$id_formateur)->get();

        foreach($formationFormateur as $formationFormateur ){

        $etudiants = Utilisateur::where('formation',$formationFormateur->formation)->get();       
        array_push($listFormationEtudiants,(object)["etudiants" => $etudiants,"formation" =>$formationFormateur->formation]);      
        }

        return view('Formateur.etudiants',compact('listFormationEtudiants')); 
        
            
           
            
            
           
          
            
           
          
            
            
           
                
                
             
        
            
           

    }


    

    
}
