@extends('layouts.app')

@section('adminhome')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours</title>
</head>
<body>
    <div style="display:flex;">
    <div style=" width:50vw; padding:30px;border-right:solid;">
    <h1>Partager un Cours </h1>
    <form style="padding-top:15px" action="{{route('uploadFile')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label class="form-label" >Titre :</label><br>
    <input class="form-control" type="text" name="titre" id="titre" placeholder="Titre du cours"><br>
    <label class="form-label" >Formation :</label><br>
    <select name="id_formation" required class="form-select" aria-label="Default select example" required>
        <option value="">--Please choose an option--</option>
        @foreach($formations as $formation)
        <option value="{{$formation->id_formation}}">{{$formation->formation}}</option>
        @endforeach 
    </select><br>
    
    <label class="form-label">Description :</label><br>
    <input class="form-control" type="text" name="description" id="description" placeholder="Description du cours"><br>
    <label class="form-label">Fichier :</label><br>
    <input class="form-control" type="file" name="file" id="file">
    <button type="submit" class="btn btn-dark my-5" name="submit">Partager</button>
    </form>
    </div>
   
    <div style=" width:50vw; padding:30px;border-right:solid">
    <h1>Mes Cours </h1>    
<div class="row "> 
   
@foreach($data as $data)
<div class="col-lg-6 mb-4" style="padding-top:15px">
<div class="card" style="height:40vh;width:20vw;">
  <div class="card-header">
 
    Cours : {{$data->titre}}
 
  </div>
  <div class="card-body" >
   
    <a href="{{route('telecharger', $data->file)}}">
  <img class="card-img-top" src="{{asset('css/pdflogo.png')}}" style="width:140px" alt="Card image cap">
    <p class="card-text">{{$data->description}}</p></a>
    <p>publié le {{$data->created_at}}</p>
  </div>
  </div>
</div>
@endforeach 
</div>
</div>


   
  
    </div>
    
    


    

   


</body>
</html>
@endsection