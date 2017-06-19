<?php
	if (isset($_SESSION['rol']) && $_SESSION['rol']=="admin")
		 {
				echo "
				<table width='100%'  style='background:#fff;'>
				<tr>
					<th>Imagen</th>
					<th>Nombre</th>
					<th>descripcion</th>
					<th>Operaciones</th>
				<tr>
				";
				require_once("conexion.php");
				$s="select * from portafolio ORDER BY nombre";
				$r=mysql_query($s) or die(mysql_error());
				$n=0;
				while($rw=mysql_fetch_assoc($r))
				{


					$img="../img/servicio/$rw[imagen]";
					$id=$rw['id'];
					$color="#ccc";
					$fuente="#000";
					$n++;
					if($n%2==0)
					{
						$color="#fff";
						$fuente="#212121";
					}
					echo "<tr  style='background:$color; color:$fuente;'>
								<td><img src='img/servicio/$rw[imagen]' style='width: 100px;'></td>
								<td>".$rw['nombre']."</td>
								<td> ".$rw['descripcion']."</td>
								
								<td>
								<a href='index.php?op=formServicio&var=$id'>Editar </a><br>
								<a href='php/deleteServicio.php?var=$id&img=$img'>Eliminar </a>
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
