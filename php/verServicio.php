<?php
		require_once('conexion.php');
		$id=$_GET['servicio'];
		$respuesta= mysql_query("SELECT * FROM portafolio WHERE id =".$id);
		while ($r=mysql_fetch_assoc($respuesta)) {
			?>
				<div class='portfolio'>
						<br><br><br><label style="font-size: 100px; height: 100%;"><?php  echo  $r['nombre'];?></label>

				</div>
				<div>
						<p style="font-size: 20px">
							<?php
								
										echo $r['descripcion']; 
									
							?>
					
						</p>

				</div>

			<?php
		}
?>
