@extends('layouts.app')
@section('gestionpersonnels')
<Style>




#close-CSS {
    background-image: url( './css/formateur11.jpeg' );
    background-size: cover;
    height: 300px;  
    width: 300px;
      margin-top: 120px;
}
#close-image {
     vertical-align: top;
      display: inline-block;
    background-image: url( './css/administration.jpg' );
    background-size: cover;
    height: 300px;  
    width: 300px;
    margin-Left:230px;
    margin-Right:250px;
  margin-top: 120px;
}
#close-image label{
    background-color:#B2BABB ;
    margin-top:180px;

    color:block;
}
#close-CSS  label{
    background-color:#B2BABB ;
    margin-top:180px;
    color:block;
}
body{
 background-image: url( './css/class4.jpg' );
 
    background-repeat: no-repeat;
    background-position: center;
       background-size: cover; 

}

</Style>
<body>
<div class="container-fluid"> 
<a href="{{ route('liste') }}" ><button  id="close-image" ><label>Administrateurs</label></button></a>
<a href="{{ route('listeformateur') }}"><button id="close-CSS"   ><label>Formateurs</label></button></a>
</div>
</body>
@endsection

