@extends('layouts.app')
@section('editdformateur')


<div class="container" style="padding:30px;">
<h1>UPDATE FORMATEUR </h1>
<form action="{{route('updateformateur', $formateur->id)}}" method="get">

    <label class="form-label">Name*</label>
    <input  style="margin:10px;" type="text" class="form-control" name="nom"   value="{{$formateur->nom}}">
    

    <label class="form-label">Prenom*</label>
    
       <input  style="margin:10px;" type="text" class="form-control" name="prenom"   value=" {{$formateur->prenom}}">
    <label class="form-label">AGE*</label>
    
       <input  style="margin:10px;" type="text" class="form-control" name="age"   value=" {{$formateur->age}}">


    <label class="form-label">CIN*</label>
    <input  style="margin:10px;" type="text" class="form-control" name="cin"   value="{{$formateur->cin}}">

    <label class="form-label">Tel*</label>
    <input  style="margin:10px;" type="text" class="form-control" name="tel"   value="{{$formateur->tel}}">

    <label class="form-label">Email*</label>
    <input  style="margin:10px;" type="text" class="form-control" name="email"   value="{{$formateur->email}}">
    
  
   <label class="form-label">Profil</label>
   <input  style="margin:10px;" type="text" class="form-control" name="profil" value="formateur"  >
    <br><br>
    <label class="form-label">DESCRIPTION*</label>
    <input  style="margin:10px;" type="text" class="form-control" name="description"   value="{{$formateur->description}}">
    
  
    <button type="submit" class="btn btn-dark my-5" name="submit">Submit</button>
</form>
</div>
@endsection