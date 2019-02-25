<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title> Popcorn Movie Registros </title>

<?php
error_reporting(E_ALL);
ini_set('display_errors','1');

require("conex.php");

$idcone= conexion();
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$genero=$_POST['genero'];
$password=$_POST['password'];
$sql="INSERT INTO usuarios (nombre,email,genero,password) VALUES ('$nombre','$email','$genero','$password')";

if(mysqli_query($idcone,$sql)){
	
	echo"<br> <br> <br> <br> <br> 
	<main><h1 style='color:white;' align='center'><FONT FACE='Arial Black'> Registro completado $nombre</main>";
	
  }else{
	  
  	echo"<br> <br> <br> <br> <br> 
	<main><h1 style='color:white;' align='center'><FONT FACE='Arial Black'> Ocurrio un error <br> verifique sus datos</main>";
  	
  }
  mysqli_close($idcone); 	
?>

<style type="text/css">

   	body {
			 background-image:url(xo.gif);
			 background-size:100vw 100vh;
			 background-attachment:fixed;
			 margin: 0;
			 align: center;
			 font-size: 20px;
			}

   .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: e;
    font-size: 20px;
    color: #ffffff;
    background-color: #B9302B;
    border-radius: 6px;
    border: 2px solid #B9302B;
  }
  .boton_personalizado:hover{
    color: #B9302B;
    background-color: #ffffff;
  }
  
  main {
	background: rgba(5,5,5,0.7); /*Transparencia*/
	border-radius:30px;
	width: 450px;
	padding: 40px;
	margin: 40px auto;
	overflow: hidden;
	font-family: sans-serif;
	border: 0px solid #39B8CB;
    
	/*
	#155A04
	*/	
    }
	
    /*form input{
	display: block;
	padding: 10px;
	width: 100%;
	margin: 10px 0px 20px 0px;
	border: 3px solid #39B8CB;
	/**/border-radius: 5px;
	outline: none;
   }
</style>

<center>	

<a class="boton_personalizado" href="login.html">Login</a>

</center>


</body>
</html>