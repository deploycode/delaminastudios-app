<?php
	require_once("conexion.php");

	$consulta="UPDATE `portafolio` SET `nombre` = '$_POST[nombre]', `descripcion` = '$_POST[descripcion]' WHERE `portafolio`.`id` =".$_POST['id'];
	
	   $e1=mysql_query($consulta) or die(mysql_error()); 
		    
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

				if (!$_FILES['imagen']['name']==NULL)
				{ 
					$nombre = date("Ymdhis"); 
					$destino="../img/servicio/". $nombre;
					move_uploaded_file($_FILES['imagen']['tmp_name'],  $destino); 
					$consulta="UPDATE `portafolio` SET `imagen` = '$nombre' WHERE `portafolio`.`id` =".$_POST['id'];
			        $e1=mysql_query($consulta) or die(mysql_error()); 
			        unlink("../img/servicio/".$_POST['nombredeimagen']);
   				}


			?><script>
				alert('Registro Exitoso');
				window.location.href='../index.php?op=verPortafolio';
			</script><?php

		}

?>