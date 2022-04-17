@extends('layouts.app')
@section('listeAdministrateur')

<div class="container">

<button class="btn btn-dark my-5" ><a href="{{ route('add')}}" class="text-light" style = "text-decoration : none;">Add New employé </a></button>
 <table class="table  table-striped">

 <tr>
     <th>ID</th>  
     <th>NOM</th>
     <th>Prenom</th>
     <th>CIN</th>
     <th>Tel</th>
     <th>Email</th>
     <th>Profil</th>
     <th>DELETE</th>
     <th>UPDATE</th>
   </tr>

      
     @foreach($emps as $emp)
        
         <tr>
<td>{{$emp->id}}</td>
<td>{{$emp->nom}}</td>
<td>{{$emp->prenom}}</td>
<td>{{$emp->cin}}</td>
<td>{{$emp->tel}}</td>
<td>{{$emp->email}}</td>
<td>{{$emp->profil}}</td>


      <td> 
    <a href="/deleteAdministrateur?id={{$emp['id']}}" class="btn btn-outline-success" >supprimer</a>
      </td>
      <td>
  <a href="{{route('editAdministrateur',$emp->id)}}" class="btn btn-outline-danger"  >modifier</a> 

     </td>
      </tr>
@endforeach 
</table> 
@endsection 