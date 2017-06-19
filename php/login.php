<?php
	require_once("conexion.php");

	$email = $_POST['email'];
	$name = explode("@", $email);
	$contrasena = $_POST['contrasena'];

	$sql = mysql_query("SELECT * FROM usuario where  email='".$email."'") or die(mysql_error());

	if ($r = mysql_fetch_array($sql) ) 
	{
		if ($r['contrasena']==$contrasena) 
		{
					session_start();
								
					$rol= $r['rol'];
					$email= $r['email'];
					$_SESSION['usuario']= $name['0'];

					if ($rol==2)
					{
						$_SESSION['rol']='user';
					}
					elseif ($rol==1) 
					{
						$_SESSION['rol']='admin';
					}

	 				$_SESSION['email']=$email; 
	 				?>

				<script>
					alert('Bienvenido');
					window.location.href='../index.php';
					
				</script>
			<?php
		}
		else
		{
			?>

				<script>
					alert('Usuario o contraseña incorrectos, favor intente de nuevo');
					window.location.href='../index.php?op=formLogin';
					
				</script>
			<?php
		}
	}
	else
	{

		?>

				<script>
					alert('Verifique su usuario y/o contraseña');
					window.location.href='../index.php?op=formLogin';
					
				</script>
			<?php
	}
?>

