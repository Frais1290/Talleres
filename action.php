<?PHP
//Iniciar Sesión
session_start();

//Validar si se está ingresando con sesión incorrectamente se envia al login
if (!$_SESSION){
	header("location:login.php");	
}
//Validar si la cookie está activa
 if(isset($_COOKIE['login'])){ 
	// Cookie creada y activa
}else{ 
	//cookie destruida, cierra la sesion y manda al login
	session_destroy();
	header("location:tiempo.html");	
	exit;// Salimos corriendo (evita que se siga ejecutan do los códigos siguiente)
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<link rel="shortcut icon" href="img/pop.png">	
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<title>Popcorn Movie </title>
				<style type="text/css">
			nav {
	margin: 27px auto 0;

	position: relative;
	width: 590px;
	height: 50px;
	background-color: #34495e;
	border-radius: 8px;
	font-size: 0;
}
nav a {
	line-height: 50px;
	height: 100%;
	font-size: 15px;
	display: inline-block;
	position: relative;
	z-index: 1;
	text-decoration: none;
	text-transform: uppercase;
	text-align: center;
	color: white;
	cursor: pointer;
}
nav .animation {
	position: absolute;
	height: 100%;
	top: 0;
	z-index: 0;
	transition: all .5s ease 0s;
	border-radius: 8px;
}
a:nth-child(1) {
	width: 100px;
}
a:nth-child(2) {
	width: 110px;
}
a:nth-child(3) {
	width: 100px;
}
a:nth-child(4) {
	width: 160px;
}
a:nth-child(5) {
	width: 120px;
}
nav .start-home, a:nth-child(1):hover~.animation {
	width: 100px;
	left: 0;
	background-color: #1abc9c;
}
nav .start-about, a:nth-child(2):hover~.animation {
	width: 110px;
	left: 100px;
	background-color: #e74c3c;
}
nav .start-blog, a:nth-child(3):hover~.animation {
	width: 100px;
	left: 210px;
	background-color: #3498db;
}
nav .start-portefolio, a:nth-child(4):hover~.animation {
	width: 160px;
	left: 310px;
	background-color: #9b59b6;
}
nav .start-contact, a:nth-child(5):hover~.animation {
	width: 120px;
	left: 470px;
	background-color: #e67e22;
}

body {
	font-size: 12px;
	font-family: sans-serif;
	background: #2c3e50;
	font-family:century; /* tipografia de letra*/
	font-size:25px; /* tamaño de letra*/
	text-align:justify; /* alineación de texto*/
}
h1 {
	text-align: center;
	margin: 40px 0 40px;
	text-align: center;
	font-size: 30px;
	color: #ecf0f1;
	text-shadow: 2px 2px 4px #000000;
	font-family: 'Cherry Swash', cursive;
}

p {
    position: absolute;
    bottom: 20px;
    width: 100%;
    text-align: center;
    color: #ecf0f1;
    font-family: 'Cherry Swash',cursive;
    font-size: 16px;
}

span {
    color: #2BD6B4;
}



main {
	background: rgba(5,5,5,0.7); /*Transparencia*/
	background:white;
	border-radius:30px;
	width: 800px;
	padding: 30px;
	margin: 30px auto;
	overflow: hidden;
	font-family: sans-serif;
	border: 0px solid #39B8CB;
    

    }
	
    /*form input{
	display: block;
	padding: 10px;
	width: 100%;
	margin: 10px 0px 20px 0px;
	border: 2px solid #39B8CB;
	/**/border-radius: 5px;
	outline: none;
   }
    

</style>
</head>

	 <body>
	 		
	<nav>
			<a href="usuarios.php"><img src="img/pop.png" width="48" height="48" align="center"/></a>
			<a href="movie.php"><img src="img/film.png" width="45" height="45" align="center"/></a>
			<a href="estrenos.php"><img src="img/star.png" width="45" height="45" align="center"/></a>
			<a href="favoritos.php"><img src="img/co.png" width="45" height="45" align="center"/></a>
			<a href="desconectar_usuario.php"><img src="img/xx.png" width="30" height="30" align="center"/></a>
		<div class="animation start-home"></div>
	</nav>
		
<main>

	<h4 style="color:black;"><FONT FACE="Cooper Black">	
		<img src="img/uu.png" width="30" height="30" align="center"/><?php echo $_SESSION['nombre'];?>   			
	</h4>
	
 <h3 align="center"><FONT FACE="Arial Black">
 <img src="img/movie.png" width="39" height="39" align="center"/>Peliculas de Acción
 </h3>	
 
	<center>
 
 <a href="reproductor.php"><img src="img/rascacielos.jpg" width="140" height="200" align="center"/></a>
 
 <img src="img/Titanes.jpg" width="140" height="200" align="center"/>
 
 <img src="img/warcraft.jpg" width="142" height="200" align="center"/>
 
 <img src="img/Bumblebee.jpg" width="140" height="200" align="center"/>
 
 <img src="img/rampage.jpg" width="140" height="200" align="center"/>
 
 <br> <br>
 
 <img src="img/black.jpg" width="140" height="200" align="center"/>
 
 <img src="img/deep.jpg" width="140" height="200" align="center"/>
 
 <img src="img/solo.jpg" width="140" height="200" align="center"/>
 
 <img src="img/pasajeros.jpg" width="140" height="200" align="center"/>
 
 <img src="img/corredor.jpg" width="140" height="200" align="center"/>
 
   </center>
</main>	
	
	</body>
</html>	