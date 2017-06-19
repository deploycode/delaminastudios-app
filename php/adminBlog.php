<?php
	if (isset($_SESSION['rol']) && $_SESSION['rol']=="admin")
		 {
				echo "
				<table width='100%'  style='background:#fff;'>
				<tr>
					<th>Imagen</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Operaciones</th>
				<tr>
				";
				require_once("conexion.php");
				$s="select * from post ORDER BY id";
				$r=mysql_query($s) or die(mysql_error());
				$n=0;
				while($rw=mysql_fetch_assoc($r))
				{


					$img="../img/posts/$rw[imagen]";
					$id=$rw['id'];
					$color="#ccc";
					$fuente="#fff";
					$n++;
					if($n%2==0)
					{
						$color="#fff";
						$fuente="#ccc";
					}
					echo "<tr  style='background:$color; color:$fuente;'>
								<td><img src='img/posts/$rw[imagen]' style='width: 100px;'></td>
								<td>".$rw[titulo]."</td>
								<td>$rw[descripcion]</td>
								
								<td>
								<a href='index.php?op=formPost&var=$id'>Editar </a><br>
								<a href='php/deletePost.php?var=$id&img=$img'>Eliminar </a>
								</td>


						<tr>
						";

				}
					echo "	</table> ";
				}
				else
				{
					?><script>
					window.location.href='../index.php';
					</script><?php
				}
?>
</html>
