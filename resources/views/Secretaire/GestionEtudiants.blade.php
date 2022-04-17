@extends('layouts.app')
@section('listeFormateurs')

<div class="container-fluid" style="width: 85vw;margin:10vh auto;">
    <a href="{{Route('pdfListeEtudiant')}}" class="btn btn-warning" style="margin-right: 2vw"><i class="fas fa-file-pdf"></i> Telecharger <b> PDF </b></a>
    <a href="" class="btn btn-success"><i class="fas fa-file-excel"></i> Telecharger <b> Excel </b></a>

 <table class="table  table-striped" style="margin-top:5vh ">

 <tr>
     <th>ID</th>  
     <th>NOM</th>
     <th>Prenom</th>
     <th>CIN</th>
     <th>AGE</th>
     <th>Tel</th>
     <th>Email</th>
     <th>FORMATION</th>
     <th>NIVEAU</th>
     <th>PAIMENT</th>
     <th>Profil</th>
     <th>DESCRIPTION</th>
     <th>DELETE</th>
     <th>UPDATE</th>
   </tr>

      
     @foreach($etudiants as $etudiant)
        
         <tr>
<td>{{$etudiant->id}}</td>
<td>{{$etudiant->nom}}</td>
<td>{{$etudiant->prenom}}</td>
<td>{{$etudiant->cin}}</td>
<td>{{$etudiant->age}}</td>

<td>{{$etudiant->tel}}</td>
<td>{{$etudiant->email}}</td>
<td>{{$etudiant->formation}}</td>
<td>{{$etudiant->niveau}}</td>
<td>{{$etudiant->is_payer}}</td>
<td>{{$etudiant->profil}}</td>
<td>{{$etudiant->description}}</td>

    <td> 
        <form action="{{route('deleteEtudiant',$etudiant->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                Supprimer
            </button>
        </form>
    </td>
    <td>
        <a href="{{route('modifierEtudiant',$etudiant["id"])}}" class="btn btn-success" >modifier</a> 
    </td>
      </tr>
@endforeach 
</table> 
@endsection 