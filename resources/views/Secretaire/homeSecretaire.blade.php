@extends('layouts.app')
@section('adminhome')
<style>
body{
    background-image:url( './css/bag-g372492e4c_1920.jpg' );
    
       background-repeat: no-repeat;
       /* background-position: center; */
        background-size:100vw 100vh; 
   
   }
.a{
    display:grid;
    grid-template-columns: repeat(3,28%);
    column-gap: 8%;
}
.b{
    border-top-left-radius: 60px 60px;
    border-bottom-right-radius: 60px 60px;
    border:5px solid white;
    text-decoration: none;
    font-weight: bold;
    text-align: center;
    position: relative;
    z-index: 2;
}

.r{
    border-top-left-radius: 10px 10px;
    border-bottom-right-radius: 10px 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    width: 75%;
    height: 10%;
    background-color: white;
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    color: black;
    border:2px solid black
}
#a{
    background-image: url( './css/college-student-g75c658cc1_1920.jpg' );
    background-repeat: no-repeat;
    background-position:center;
       background-size: cover;
}
#b{
    background-image: url( './css/people-g718fb6c66_1920.jpg' );
    background-repeat: no-repeat;
    background-position:center;
    background-size: cover;
}
#c{
    background-image: url( './css/agenda-gdf84dde31_1920.jpg' );
    background-repeat: no-repeat;
    background-position:center;
    background-size: cover;
}
a:hover{
    transform: scale(1.1);
}
</style>
<body>
    <div class="a" style="margin: 20vh auto;width:75vw;height:45vh">
        <a class="b" id="a" href="{{ route('listeFormateur') }}" ><div class="r">Liste des formateurs</div></a>
        <a class="b" id="b" href="{{ route('gestionEtudiant') }}"><div class="r">Gestion des etudiants</div></a>
        <a class="b" id="c" href="{{ route('gestionSession') }}"><div class="r">Gestion des sessions</div></a>
    </div>

</body>
@endsection