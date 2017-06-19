<?php
	if (isset($_GET['var'])) 
	{
		$email=$_SESSION['email'];
		
		$respuesta=mysql_query("SELECT * FROM usuario WHERE email LIKE '" .$email."'") or die(mysql_error());
		while ($r=mysql_fetch_assoc($respuesta)) {
		?>

		<table class="table">
			<form action="php/updateUsuario.php"  method="POST">
				<tr>
					<td><center><label><H2>Cambiar información de usuario</H2></label></center></td>
				</tr>

				<tr>
					<td><hr><br></td>
				</tr>

				<tr>
					<td><label>Correo electrónico:</label></td>
				</tr>

				<tr>
					<td><input class="login" type="email" name="email" value="<?php echo $r['email']?>" required ></td>
				</tr>

				<tr>
				  <td>Contraseña:</td>
				</tr>

				<tr>
				  <td><input class="login" type="text" name="contrasena" value="<?php echo $r['contrasena']?>" required ></td>
				</tr>	

				<tr>
				 	<td><center><input class="boton" type="submit" value="Guardar Cambios"><input class="boton" type="reset" value="Cancelar"></center></td>
				</tr>
				
			</form>
		</table>
	<?php
		}
	} 
	else 
	{
?>
		
		<table class="table">
			<form action="php/login.php"  method="POST">
				<tr>
					<td><center><label><H2>Ingresa Aquí</H2></label></center></td>
				</tr>

				<tr>
					<td><hr><br></td>
				</tr>

				<tr>
					<td><label>Correo electrónico:</label></td>
				</tr>

				<tr>
					<td><input class="login" type="email" name="email" placeholder="ejemplo@hotmail.com" required ></td>
				</tr>

				<tr>
				  <td>Contraseña:</td>
				</tr>

				<tr>
				  <td><input class="login" type="password" name="contrasena" placeholder="Aquí tu contraseña" required ></td>
				</tr>	

				<tr>
				 	<td><center><input class="boton" type="submit" value="Iniciar Sesión"><input class="boton" type="reset" value="Cancelar"></center></td>
				</tr>
				
			</form>
		</table>
<?php
	}
?>