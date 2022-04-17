@extends('layouts.app')
@section('adminhome')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes etudiants</title>
</head>
<body>
@foreach($listFormationEtudiants as $listFormationEtudiant)
<br>
<div class="container">
  <h1>{{ $listFormationEtudiant->formation }}</h1>
  <table class="table  table-striped">
  <tr>
     <th>Nom</th>
     <th>Prenom</th>
     <th>CIN</th>
     <th>Age</th>
     <th>Tel</th>
     <th>Email</th>
     <th>Niveau</th>
  </tr>
@foreach($listFormationEtudiant->etudiants as $etu)
        <tr>
           <td>{{$etu->nom}}</td>
           <td>{{$etu->prenom}}</td>
           <td>{{$etu->cin}}</td>
           <td>{{$etu->age}}</td>
           <td>{{$etu->tel}}</td>
           <td>{{$etu->email}}</td>
           <td>{{$etu->niveau}}</td>

        </tr>
    @endforeach
  </table>
  
</div>
@endforeach

@endsection