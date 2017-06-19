<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<?php
	require_once("conexion.php");
	$archivo = $_FILES["imagen"]["tmp_name"];
	$nombre = date("Ymdhis"); 
	$destino="../img/equipo/".$nombre;

	if(move_uploaded_file($archivo, $destino)){
	
	 	$s1=" INSERT INTO equipo(id,nombre,imagen,cargo) 
		values(	NULL,  '$_POST[nombre]',
	   	'$nombre',
	   '$_POST[cargo]'
	   )";
	    
	
	$e1=mysql_query($s1) or die(mysql_error()); 
	    
	if (!$e1)
	{
		?>
		<script>
			alert('Error al intentar cargar');
			window.location.href='./index.php';
		</script>
		<?php
	} else
	{

		?><script>
			alert('Registro Exitoso');
			window.location.href='../index.php?op=verEquipo';
		</script><?php

	}

	}else{
		echo $_FILES['imagen']['error'];
		?><script>
			// alert('Ocurrio un error al intentar subir la imagen al servidor');
			window.location.href='../index.php?op=verEquipo';
		</script><?php
	}

?>
</body>
</html>

