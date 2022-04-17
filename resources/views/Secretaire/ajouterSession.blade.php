@extends('layouts.app')
@section('AddAdministrateur')


<div class="container" style="padding:30px;;width:60vw">
<h1>AJOUTER SESSION </h1>
<form action="{{route('createSession')}}" method="POST">
@csrf
    <label class="form-label" style="margin-right: 5vw">id_formation</label>
    <select name="id_formation" required class="form-select" aria-label="Default select example" required>
        <option value="">--Please choose an option--</option>
        @foreach($formations as $formation)
        <option value="{{$formation->id}}">{{$formation->id}}-{{$formation->nom_formation}}</option>
        @endforeach 
    </select>
    <br>
    <label class="form-label" style="margin-right: 5vw">id_formateur</label>
    <select name="id_formateur" required class="form-select" aria-label="Default select example" required>
        <option value="">--Please choose an option--</option>
        @foreach($formateurs as $formateur)
        <option value="{{$formateur->id}}">{{$formateur->id}}-{{$formateur->nom}} {{$formateur->prenom}}</option>
        @endforeach 
    </select>
    <br>
    <label class="form-label">date_debut</label>
    <input  style="margin:10px;" type="date" class="form-control" name="date_debut"   >
    <br>
    <label class="form-label">Temps_debut</label>
    <input  style="margin:10px;" type="time" class="form-control" name="temps_debut"   >
    <br>
    <label class="form-label">Temps_fin</label>
    <input  style="margin:10px;" type="time" class="form-control" name="temps_fin"   >
    <br>
    <label class="form-label" style="margin-right: 5vw">salle</label>
    <select name="id_salle" required class="form-select" aria-label="Default select example" required>
        <option value="">--Please choose an option--</option>
        @foreach($salles as $salle)
        <option value="{{$salle->id}}">{{$salle->id}}-{{$salle->name}}</option>
        @endforeach 
    </select>
    <button type="submit" class="btn btn-success my-5" name="submit">Ajouter</button>
</form>
</div>
@endsection