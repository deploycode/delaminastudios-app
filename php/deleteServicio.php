<?php
		require_once("conexion.php");
		$s="DELETE from portafolio where id='".$_GET['var']."'";
		$r=mysql_query($s) or die(mysql_error());
		 unlink($_GET['img']);
		?><script>
			alert('Integrante borrado');
			window.location.href='../index.php?op=adminPortafolio';
		</script><?php
?>