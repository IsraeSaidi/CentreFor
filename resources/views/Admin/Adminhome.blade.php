@extends('layouts.app')
@section('adminhome')
<Style>




#close-CSS {
    background-image: url( './css/formation2.jpg' );
    background-size: cover;
    height: 300px;  
    width: 300px;
      margin-top: 120px;
}
#close-image {
     vertical-align: top;
      display: inline-block;
    background-image: url( './css/formateur.png' );
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
 background-image:url( './css/class4.jpg' );
 
    background-repeat: no-repeat;
    background-position: center;
       background-size: cover; 

}

</Style>
<body>
<div class="container-fluid"  style="margin: 0 auto"> 
<a href="{{ route('gestionpersonnels') }}" ><button  id="close-image" ><label>GESTION DES PERSONNELS</label></button></a>
<a href="{{ route('listeformation') }}"><button id="close-CSS"   ><label>GESTION DES FORMATIONS</label></button></a>
</div>
</body>
@endsection

