<?php
	$archivo1=$_FILES["primera"]["tmp_name"];
	$destino1= "../img/imgGaleria/primera.jpg";

	$archivo2=$_FILES["segunda"]["tmp_name"];
	$destino2= "../img/imgGaleria/segunda.jpg";

	$archivo3=$_FILES["tercera"]["tmp_name"];
	$destino3= "../img/imgGaleria/tercera.jpg";

	$archivo4=$_FILES["cuarta"]["tmp_name"];
	$destino4= "../img/imgGaleria/cuarta.jpg";

	$archivo5=$_FILES["quinta"]["tmp_name"];
	$destino5= "../img/imgGaleria/quinta.jpg";

	if(!move_uploaded_file($archivo1, $destino1) && !isset($_FILES["primera"]))
	{
		echo "<script>
						alert('Se ha producido un error al tratar de cargar el primer archivo de imagen, verifique que sea de formato .jpg/ .png o .jpeg y que no sea mayor a 2MB');
						window.location.href='../index.php';
					</script>";
	}
	if(!move_uploaded_file($archivo2, $destino2)  && !isset($_FILES["segunda"]))
	{
		echo "<script>
						alert('Se ha producido un error al tratar de cargar el segundo archivo de imagen, verifique que sea de formato .jpg/ .png o .jpeg y que no sea mayor a 2MB');
						window.location.href='../index.php';
					</script>";
	}
	if(!move_uploaded_file($archivo3, $destino3)  && !isset($_FILES["tercera"]))
	{
		echo "<script>
						alert('Se ha producido un error al tratar de cargar el tercer archivo de imagen, verifique que sea de formato .jpg/ .png o .jpeg y que no sea mayor a 2MB');
						window.location.href='../index.php';
					</script>";
	}
	if(!move_uploaded_file($archivo4, $destino4) && !isset($_FILES["cuarta"]))
	{
		echo "<script>
						alert('Se ha producido un error al tratar de cargar el cuarto archivo de imagen, verifique que sea de formato .jpg/ .png o .jpeg y que no sea mayor a 2MB');
						window.location.href='../index.php';
					</script>";
	}
	if(!move_uploaded_file($archivo5, $destino5) && !isset($_FILES["quinta"]))
	{
		echo "<script>
						alert('Se ha producido un error al tratar de cargar el quinto archivo de imagen, verifique que sea de formato .jpg/ .png o .jpeg y que no sea mayor a 2MB');
						window.location.href='../index.php';
					</script>";
	}


?>
	<script>
			alert('La galería se ha subido satisfactoriamente');
			window.location.href='../index.php';
	</script>
