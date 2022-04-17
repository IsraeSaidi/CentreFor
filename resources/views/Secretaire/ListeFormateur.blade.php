@extends('layouts.app')
@section('listeFormateurs')

<div class="container-fluid" style="width: 75vw;margin:10vh auto;">
    <a href="{{Route('pdfListeFormateur')}}" class="btn btn-warning" style="margin-right: 2vw"><i class="fas fa-file-pdf"></i> Telecharger <b> PDF </b></a>
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
     <th>Profil</th>
     <th>DESCRIPTION</th>
   </tr>

      
     @foreach($formateurs as $formateur)
        
         <tr>
<td>{{$formateur->id}}</td>
<td>{{$formateur->nom}}</td>
<td>{{$formateur->prenom}}</td>
<td>{{$formateur->cin}}</td>
<td>{{$formateur->age}}</td>

<td>{{$formateur->tel}}</td>
<td>{{$formateur->email}}</td>
<td>{{$formateur->profil}}</td>
<td>{{$formateur->description}}</td>


      </tr>
@endforeach 
</table> 
@endsection 