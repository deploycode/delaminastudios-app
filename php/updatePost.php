<?php
	require_once("conexion.php");
	$nombre = date("Ymdhis"); 
	session_start();
	$consulta="UPDATE `post` SET `titulo` = '$_POST[titulo]', `descripcion` = '$_POST[descripcion]', `contenido` = '$_POST[contenido]', `fecha` ='$nombre', `email_usuario`='$_SESSION[email]' WHERE `post`.`id` =".$_POST['id'];
	
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
					
					$destino="../img/posts/". $nombre;
					move_uploaded_file($_FILES['imagen']['tmp_name'],  $destino); 
					$consulta="UPDATE `post` SET `imagen` = '$nombre' WHERE `post`.`id` =".$_POST['id'];
			        $e1=mysql_query($consulta) or die(mysql_error()); 
			        unlink("../img/posts/".$_POST['nombredeimagen']);
   				}
			?><script>
				alert('Registro Exitoso');
				window.location.href='../index.php?op=verMinaDeIdeas';
			</script><?php

		}

?>