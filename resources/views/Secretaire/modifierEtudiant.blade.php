@extends('layouts.app')
@section('editdformateur')


<div class="container" style="padding:30px;width:50vw;margin:0 auto;">
<h1>UPDATE ETUDIANT </h1>
<form action="{{route('updateEtudiant',$etudiant->id)}}" method="POST">
    @csrf
    @method("PUT")
    <label class="form-label">Name</label>
    <input  style="margin:10px;" type="text" class="form-control" name="nom"   value="{{$etudiant->nom}}">
    

    <label class="form-label">Prenom</label>
    
       <input  style="margin:10px;" type="text" class="form-control" name="prenom"   value=" {{$etudiant->prenom}}">
    <label class="form-label">AGE</label>
    
       <input  style="margin:10px;" type="text" class="form-control" name="age"   value=" {{$etudiant->age}}">


    <label class="form-label">CIN</label>
    <input  style="margin:10px;" type="text" class="form-control" name="cin"   value="{{$etudiant->cin}}">

    <label class="form-label">Tel</label>
    <input  style="margin:10px;" type="text" class="form-control" name="tel"   value="{{$etudiant->tel}}">

    <label class="form-label">Email</label>
    <input  style="margin:10px;" type="text" class="form-control" name="email"   value="{{$etudiant->email}}">
    <br>
    <label class="form-label" style="margin-right: 20px">Formation</label>
    <select name="formation" required class="form-select" aria-label="Default select example">
        <option value="">--Please choose an option--</option>
        @foreach($formations as $formation)
        <option value="{{$formation->nom_formation}}">{{$formation->nom_formation}}</option>
        @endforeach 
    </select>
    <br>
    <br>
    <label class="form-label">Niveau</label>
    <input  style="margin:10px;" type="text" class="form-control" name="niveau"   value="{{$etudiant->niveau}}">
   <label class="form-label">Profil</label>
   <input  style="margin:10px;" type="text" class="form-control" name="profil" value="etudiant" readonly >
   <br>
   <label class="form-label" style="margin-right: 20px">Paiment</label>
   <select name="is_payer" required>
    <option value="">--Please choose an option--</option>
    <option value="true">True</option>
    <option value="false" >False</option>
    </select>
    <br><br>
    <label class="form-label">DESCRIPTION</label>
    <textarea  style="margin:10px;" type="text" class="form-control" name="description" >{{$etudiant->description}}</textarea>
    
  
    <button type="submit" class="btn btn-dark my-5" name="submit">Submit</button>
</form>
</div>
@endsection