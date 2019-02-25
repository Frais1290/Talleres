<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTES</title>


	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<style type="text/css">
	
body {
			 background-image:url(spa.gif);
			 background-size:100vw 100vh;
			 background-attachment:fixed;
			 margin: 0;
			 align: center;
			 font-size: 20px;
			}
			
			 .boton_personalizado{
    text-decoration: none;
    padding: 20px;
    font-weight: e;
    font-size: 20px;
    color: #ffffff;
    background-color: #76D7C4;
    border-radius: 6px;
    border: 2px solid #76D7C4;
  }
  .boton_personalizado:hover{
    color: #76D7C4;
    background-color: #ffffff;
  }	
			
			
		main {
	background: rgba(4,4,4,0.3); /*Transparencia*/
	border-radius: 2px;
	width: 500px;
	padding: 40px;
	margin: 40px auto;
	overflow: hidden;
	font-family: sans-serif;
	border: 5px solid #39B8CB;
    
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
   */	
   		
			
</style>
</head>
<body>

	<br> <br>

<table width="50%" border="3" align="center" cellspacing="0" cellpadding="0">

  <tr>
    <td colspan="5" bgcolor="#46D9E5">
	<CENTER><h1><FONT FACE="times new roman">Registros / Tabla Jugadores</FONT></h1></CENTER>
	</td>
  </tr>
  
  <tr bgcolor="#81BEF" align="center">
    <td><strong>ID Jugadores</strong></td>
    <td><strong>Nombre</strong></td>
    <td><strong>Apellido</strong></td>
    <td><strong>Edad</strong></td>
	<td><strong>ID Equipos</strong></td>
  </tr>

<?php
require("conex.php");
		$idcone=conexion();

$sql= "select * from Jugadores";
	$registro=mysqli_query($idcone,$sql);
	
		while($fila= mysqli_fetch_array($registro)) {
			echo "<tr bgcolor='white'>";
				echo"<td align='center'>" . $fila['id_jugadores'];
				echo"<td align='center'>" . $fila['Nombre'];
				echo"<td align='center'>" . $fila['Apellido'];
				echo"<td align='center'>" . $fila['Edad'];
				echo"<td align='center'>" . $fila['id_equipos'];
			echo "</tr>";
		}
	echo "</table>";
		
		mysqli_free_result($registro);
		mysqli_close($idcone);
	?>

<br>

<table width="30%" border="0" align="center" cellspacing="0" cellpadding="0">

  <tr>
    <td colspan="5">
	<CENTER><h2 style="color:white;"><FONT FACE="times new roman">Exportar / Ver en PDF</FONT></h2></CENTER>
	</td>
  </tr>
  
  <tr bgcolor="" align="center">
    <td><a href="taller2_pdf.php"><img src="imagenes taller2/Pdf2.png" width="49" height="49"/></a></td>
    <td><a href="taller2_word.php"><img src="imagenes taller2/Word.png" width="40" height="40"/></a></td>
    <td><a href="taller2_excel.php"><img src="imagenes taller2/Excel.png" width="50" height="60"/></a>
	<td><a href="taller2_pdf2.php"><img src="imagenes taller2/Pdf.png" width="42" height="42"/></a></td>
</td>

</table>

<br> <br>

<center> 
	    	
    <a class="boton_personalizado" href="taller2.html"> VOLVER </a>

</center>	

</body>
</html>