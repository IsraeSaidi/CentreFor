<html>
<head>
    <title>Laravel 9 Generate PDF Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center">Liste des Sessions</h1>
  
    <table class="table table-bordered" style="margin: 20px auto;font-size:10px">
        <tr>
            <th>ID</th>  
            <th>FORMATION</th>
            <th>FORMATEUR</th>
            <th>DATE_DEBUT</th>
            <th>TEMPS_DEBUT</th>
            <th>TEMPS_FIN</th>
            <th>SALLE</th>
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
       
       
             </tr>
        @endforeach
    </table>
  
</body>
</html>
