<table class="table">
	<form action="php/enviarEmail.php"  method="POST">
		<tr>
			<td><center><label><H2>Envianos un mensaje</H2></label></center></td>
		</tr>

		<tr>
			<td><hr><br></td>
		</tr>

		<tr>
			<td><label>Correo electrónico:</label></td>
		</tr>

		<tr>
			<td><input class="login" type="email" name="email" placeholder="ejemplo@hotmail.com" required></td>
		</tr>

		<tr>
		  <td>Contraseña:</td>
		</tr>

		<tr>
		  <td><textarea class="login" style="height: 100px" type="password" name="contrasena" placeholder="Aquí tu mensaje" required></textarea> </td>
		</tr>	

		<tr>
		 	<td><center><input class="boton" type="submit" value="Enviar"><input class="boton" type="reset" value="Cancelar"></center></td>
		</tr>
		
	</form>
</table>
