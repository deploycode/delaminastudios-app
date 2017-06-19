<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<?php
	session_start();
	require_once("conexion.php");
	$archivo = $_FILES["imagen"]["tmp_name"];
	$nombre = date("Ymdhis"); 
	$destino="../img/posts/".$nombre;
	$titulo=$_POST['titulo'];
	$descripcion=$_POST['descripcion'];
	$contenido=$_POST['contenido'];
	$usuario=$_SESSION['email'];

	if(move_uploaded_file($archivo, $destino)){
	
	 	$s1=" INSERT INTO post(id,titulo,imagen,descripcion, contenido, fecha, email_usuario) 
		values(	NULL,  '$titulo',
	   	'$nombre',
	   '$descripcion',
	   '$contenido',
	   '$nombre',
	   '$usuario'
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
			window.location.href='../index.php?op=verMinaDeIdeas';
		</script><?php

	}

	}else{
		echo $_FILES['imagen']['error'];
		?><script>
			// alert('Ocurrio un error al intentar subir la imagen al servidor');
			window.location.href='../index.php?op=verMinaDeIdeas';
		</script><?php
	}

?>
</body>
</html>

