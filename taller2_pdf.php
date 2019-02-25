<?php
require_once("dompdf/dompdf_config.inc.php");
require("conex.php");
$idcone=conexion();
$html=' 

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Reporte Jugadores</title>
</head>
<body>

<table width="100%" border="1" cellpadding="0" cellpadding="0">

<tr>
 <th colspan="5" align="center" bgcolor="#46D9E5"><h2> Registros Jugadores de Futbol </th>
</tr>

<tr align="center" bgcolor="#03CDF1"> 
 <th>ID Jugadores</th>
 <th>Nombre</th>
 <th>Apellido</th>
 <th>Edad</th>
 <th>ID Equipos</th>
</tr>';


$sql="select * from Jugadores order by Edad";

$registros=mysqli_query($idcone,$sql);
While($fila=mysqli_fetch_array($registros)){
	
	$html.='
	<tr align="center">
	
	   <td> '.$fila['id_jugadores'].'
	   <td> '.$fila['Nombre'].'
	   <td> '.$fila['Apellido'].'
	   <td> '.$fila['Edad'].'
	   <td> '.$fila['id_equipos'].' 
	   
  </tr>';
  
  }
  
  mysqli_free_result($registros);
  mysqli_close($idcone);

$html.='
</table>
</body>
</html>';

$html=UTF8_ENCODE($html);
$dompdf=new DOMPDF();
$dompdf->load_html($html);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reportes_tabla_jugadores.pdf", array('Attachment'=>1));

?>