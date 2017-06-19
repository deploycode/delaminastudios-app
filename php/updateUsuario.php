<?php
	require_once("conexion.php");

	$consulta="UPDATE `usuario` SET `email` = '$_POST[email]', `contrasena` = '$_POST[contrasena]' WHERE `usuario`.`email` ='".$_POST['email']."'";
	
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
				
			?><script>
				alert('Registro Exitoso');
				window.location.href='../index.php?op=formLogin&var';
			</script><?php

		}

?>