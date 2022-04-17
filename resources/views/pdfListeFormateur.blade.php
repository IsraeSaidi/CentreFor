<html>
<head>
    <title>Laravel 9 Generate PDF Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center">Liste des Formateurs</h1>
  
    <table class="table table-bordered" style="margin: 20px auto;">
        <tr>
            <th>ID</th>  
            <th>NOM</th>
            <th>Prenom</th>
            <th>CIN</th>
            <th>AGE</th>
            <th>Tel</th>
            <th>Email</th>
          </tr>
       
             
            @foreach($formateurs as $formateur)
               
                <tr>
       <td>{{$formateur->id}}</td>
       <td>{{$formateur->nom}}</td>
       <td>{{$formateur->prenom}}</td>
       <td>{{$formateur->cin}}</td>
       <td>{{$formateur->age}}</td>
       
       <td>{{$formateur->tel}}</td>
       <td>{{$formateur->email}}</td>
       
       
             </tr>
        @endforeach
    </table>
  
</body>
</html>
