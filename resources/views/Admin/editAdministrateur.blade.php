@extends('layouts.app')
@section('editAdministrateur')


<div class="container" style="padding:30px;">
<h1>Modifier un administrateur </h1>
<form action="{{route('updateadmini', $employe->id)}}" method="get">

    <label class="form-label">Name*</label>
    <input  style="margin:10px;" type="text" class="form-control" name="nom"   value="{{$employe->nom}}">
    

    <label class="form-label">Prenom*</label>
    
       <input  style="margin:10px;" type="text" class="form-control" name="prenom"   value=" {{$employe->prenom}}">


    <label class="form-label">CIN*</label>
    <input  style="margin:10px;" type="text" class="form-control" name="cin"   value="{{$employe->cin}}">

    <label class="form-label">Tel*</label>
    <input  style="margin:10px;" type="text" class="form-control" name="tel"   value="{{$employe->tel}}">

    <label class="form-label">Email*</label>
    <input  style="margin:10px;" type="text" class="form-control" name="email"   value="{{$employe->email}}">
    
  
  <label class="form-label">Profil</label>
    <select name="profil" >
    <option value="Admin">Admin</option>
    <option value="secretairte">secretaire</option>
    </select>
    <br>
  
    <button type="submit" class="btn btn-dark my-5" name="submit">Submit</button>
</form>
</div>
@endsection