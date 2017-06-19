<?php
	require_once("conexion.php");

	$consulta="UPDATE `equipo` SET `nombre` = '$_POST[nombre]', `cargo` = '$_POST[cargo]' WHERE `equipo`.`id` =".$_POST['id'];
	
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
					$destino="../img/equipo/". $nombre;
					move_uploaded_file($_FILES['imagen']['tmp_name'],  $destino); 
					$consulta="UPDATE `equipo` SET `imagen` = '$nombre' WHERE `equipo`.`id` =".$_POST['id'];
			        $e1=mysql_query($consulta) or die(mysql_error()); 
			        unlink("../img/equipo/".$_POST['nombredeimagen']);
   				}else


			?><script>
				alert('Registro Exitoso');
				window.location.href='../index.php?op=verEquipo';
			</script><?php

		}

?>