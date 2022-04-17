@extends('layouts.app')
@section('editdformation')


<div class="container" style="padding:30px;">
<h1>UPDATE FORMATION </h1>
<form action="{{route('updateFormation', $formation->id)}}" method="get">

    <label class="form-label">Name*</label>
    <input  style="margin:10px;" type="text" class="form-control" name="nom"   value="{{$formation->nom_formation}}">
    

    <label class="form-label">description*</label>
    
       <input  style="margin:10px;" type="text" class="form-control" name="description"   value=" {{$formation->description}}">
    <label class="form-label">durée*</label>
    
       <input  style="margin:10px;" type="text" class="form-control" name="durée"   value=" {{$formation->durée}}">


    <label class="form-label">prix*</label>
    <input  style="margin:10px;" type="numero" class="form-control" name="prix"   value="{{$formation->prix}}">

  
    <button type="submit" class="btn btn-dark my-5" name="submit">Submit</button>
</form>
</div>
@endsection