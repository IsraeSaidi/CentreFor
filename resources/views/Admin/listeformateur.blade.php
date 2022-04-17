@extends('layouts.app')
@section('listeFormateurs')

<div class="container-fluid">

<button class="btn btn-dark my-5" ><a href="{{ route('addf')}}" class="text-light" style = "text-decoration : none;">Add New formateur </a></button>
<button class="btn btn-dark my-5" > <a href="{{ route('registerf') }}"class="text-light"   style = "text-decoration : none;">register formateur</a></button>
 <table class="table  table-striped">

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
     <th>DELETE</th>
     <th>UPDATE</th>
   </tr>

      
     @foreach($frms as $frm)
        
         <tr>
<td>{{$frm->id}}</td>
<td>{{$frm->nom}}</td>
<td>{{$frm->prenom}}</td>
<td>{{$frm->cin}}</td>
<td>{{$frm->age}}</td>

<td>{{$frm->tel}}</td>
<td>{{$frm->email}}</td>
<td>{{$frm->profil}}</td>
<td>{{$frm->description}}</td>


      <td> 
    <a href="/deleteFormateur?id={{$frm['id']}}" class="btn btn-outline-success" >supprimer</a>
      </td>
      <td>
  <a href="{{route('editFormateur',$frm->id)}}" class="btn btn-outline-danger"  >modifier</a> 

     </td>
      </tr>
@endforeach 
</table> 
@endsection 