@extends('layouts.app')
@section('listeFormations')

<div class="container-fluid">

<button class="btn btn-dark my-5" ><a href="{{ route('addfo')}}" class="text-light" style = "text-decoration : none;">Add New formation </a></button>
 <table class="table  table-striped">

 <tr>
     <th>ID</th>  
     <th>NOM</th>
     <th>DESCRIPTION</th>
     <th>durée</th>
     <th>prix</th>
     <th>DELETE</th>
     <th>UPDATE</th>
   </tr>

      
     @foreach($frmts as $frmt)
        
         <tr>
<td>{{$frmt->id}}</td>
<td>{{$frmt->nom_formation}}</td>
<td>{{$frmt->description}}</td>
<td>{{$frmt->durée}}</td>
<td>{{$frmt->prix}} DH</td>
      <td> 
    <a href="/deleteFormation?id={{$frmt['id']}}" class="btn btn-outline-success" >supprimer</a>
      </td>
      <td>
  <a href="{{route('editFormation',$frmt->id)}}" class="btn btn-outline-danger"  >modifier</a> 

     </td>
      </tr>
@endforeach 
</table> 
@endsection 