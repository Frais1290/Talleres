<?php
//1. Recibimos los datos enviados desde el formulario
$email= $_POST['email'];
$password= $_POST['password'];

//2. Si la variable $email está llena isset=True entonces
if(isset($email)){
 
//3. Proceso de conexión con la base de datos
	require("cone.php");
	$cone = conexion();
	
	
	//4. Consultar si los datos son están guardados en la base de datos
	$consulta= "SELECT * FROM usuarios WHERE email='$email' AND password='$password'"; 
	//5. Aplico el query
	$resultado= mysqli_query($cone,$consulta) or die (mysqli_error());
	//6. Convertir resultados en arreglo
	$fila=mysqli_fetch_array($resultado);//Coloco el resultado en el arreglo fila
	
	//OPCIÓN 1: Si el usuario NO existe o los datos son INCORRRECTOS
	if (!$fila['nombre']){ //Si NO hay nada en el campo id del arreglo llamado fila
		header("location:login.html");	
	}
	//OPCIÓN 2: Usuario logueado correctamente
	else{
	//Inicio de variables de sesión
	session_start();

	//Definimos las variables de sesión y redirigimos a la página de usuario
		$_SESSION['id'] = $fila['id'];
		$_SESSION['nombre'] = $fila['nombre'];
		
		//-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.--.-.-.-.-.-.-.-.-.-.-.-.
		//-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.--.-.-.-.-.-.-.-.-.-.-.-.
		//CREAR COOKIE PARA CONTROLAR EL TIEMPO DE LA SESIÓN
		if(isset($_COOKIE['login'])){//Si existe -> no pasa nada (se pudo negar la instruccion con !){ 
			//Cookie creada
		}else{//si no existe 
			//Creamos la COOKIE con el tiempo de duración, en este ejemplo 60seg = 1 minuto
			setcookie('login', 1, time() + 50); 
		} 
		//-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.--.-.-.-.-.-.-.-.-.-.-.-.
		//-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.--.-.-.-.-.-.-.-.-.-.-.-.	
		header("Location:usuarios.php");//-->Se va hacia la página deseada
	}
	mysqli_close($idcone);	
}
else{//Si la variable $email está vacia isset=false entonces se envia al login
	header("location:login.html");// envío al login
}

?>