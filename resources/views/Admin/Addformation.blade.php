@extends('layouts.app')
@section('Addformateur')


<div class="container" style="padding:30px;">
<h1>FORMULAIRE DES FORMATIONS </h1>
<form action="{{route('addformation')}}" method="get">

    <label class="form-label">Name</label>
    <input  style="margin:10px;" type="text" class="form-control" name="nom"   placeholder="Name">
    <br>

    <label class="form-label">description</label>
    <br>
       <input  style="margin:10px;" type="text" class="form-control" name="description"   placeholder=" description">
    <label class="form-label">durée</label>
    <br>
       <input  style="margin:10px;" type="text" class="form-control" name="durée"   placeholder=" durée">

<br>
    <label class="form-label">prix</label>
    <input  style="margin:10px;" type="numero" class="form-control" name="prix"   placeholder="prix">
<br>
     <button type="submit" class="btn btn-dark my-5" name="submit">Submit</button>
</form>
</div>
@endsection