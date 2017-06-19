<?php
	if (isset($_SESSION['rol']) && $_SESSION['rol']=="admin")
		 {
				echo "
				<table width='100%'  style='background:#fff;'>
				<tr>
					<th>Imagen</th>
					<th>Nombre</th>
					<th>Cargo</th>
					<th>Operaciones</th>
				<tr>
				";
				require_once("conexion.php");
				$s="select * from equipo ORDER BY nombre";
				$r=mysql_query($s) or die(mysql_error());
				$n=0;
				while($rw=mysql_fetch_assoc($r))
				{


					$img="../img/equipo/$rw[imagen]";
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
								<td><img src='img/equipo/$rw[imagen]' style='width: 100px;'></td>
								<td>".$rw[nombre]."</td>
								<td>$rw[cargo]</td>
								
								<td>
								<a href='index.php?op=formEquipo&var=$id'>Editar </a><br>
								<a href='php/deleteEquipo.php?var=$id&img=$img'>Eliminar </a>
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
