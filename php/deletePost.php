<?php
		require_once("conexion.php");
		$s="DELETE from post where id='".$_GET['var']."'";
		$r=mysql_query($s) or die(mysql_error());
		 unlink($_GET['img']);
		?><script>
			alert('Post borrado');
			window.location.href='../index.php?op=adminBlog';
		</script><?php
?>