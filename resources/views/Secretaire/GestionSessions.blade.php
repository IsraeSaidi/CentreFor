@extends('layouts.app')
@section('listeFormateurs')

<div class="container-fluid" style="width: 85vw;margin:5vh auto;">
    <button class="btn btn-dark my-5" ><a href="{{ route('ajouterSession')}}" class="text-light" style = "text-decoration : none;">Add New Session</a></button><br>
    <a href="{{Route('pdfSession')}}" class="btn btn-warning" style="margin-right: 2vw"><i class="fas fa-file-pdf"></i> Telecharger <b> PDF </b></a>
    <a href="" class="btn btn-success"><i class="fas fa-file-excel"></i> Telecharger <b> Excel </b></a>

 <table class="table  table-striped" style="margin-top:5vh ">

 <tr>
     <th>ID</th>  
     <th>FORMATION</th>
     <th>FORMATEUR</th>
     <th>DATE_DEBUT</th>
     <th>TEMPS_DEBUT</th>
     <th>TEMPS_FIN</th>
     <th>SALLE</th>
     <th>ID_SECRETAIRE</th>
     <th>DELETE</th>
     <th>UPDATE</th>
   </tr>

      
     @foreach($sessions as $session)
        
         <tr>
<td>{{$session->id}}</td>
<td>{{$session->formation}}</td>
<td>{{$session->formateur}}</td>
<td>{{$session->date_debut}}</td>
<td>{{$session->temps_debut}}</td>
<td>{{$session->temps_fin}}</td>
<td>{{$session->salle}}</td>
<td>{{$session->id_secretaire}}</td>

    <td> 
        <form action="{{route('deleteSession',$session->id)}}" method="POST">
             @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                Supprimer
            </button>
        </form>
    </td>
    <td>
        <a href="{{route('editSession',$session->id)}}" class="btn btn-success" >modifier</a> 
    </td>
      </tr> 
@endforeach
 </table>
@endsection 