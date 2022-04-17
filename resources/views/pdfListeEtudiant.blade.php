<html>
<head>
    <title>Laravel 9 Generate PDF Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center">Liste des Etudiants</h1>
  
    <table class="table table-bordered" style="margin: 20px auto;">
        <tr> 
            <th>NOM</th>
            <th>Prenom</th>
            <th>AGE</th>
            <th>FORMATION</th>
            <th>NIVEAU</th>
            <th>Tel</th>
            <th>Email</th>
          </tr>
       
             
            @foreach($etudiants as $etudiant)
               
                <tr>
       <td>{{$etudiant->nom}}</td>
       <td>{{$etudiant->prenom}}</td>
       <td>{{$etudiant->age}}</td>
       <td>{{$etudiant->formation}}</td>
       <td>{{$etudiant->niveau}}</td>
       
       <td>{{$etudiant->tel}}</td>
       <td>{{$etudiant->email}}</td>
       
       
             </tr>
        @endforeach
    </table>
  
</body>
</html>
