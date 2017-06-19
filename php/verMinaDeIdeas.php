
<html>
	<head>

	</head>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<meta charset="utf-8">

		<body>
			<div style="width: 900px; margin: auto;">
			<?php

			$consultar = mysql_query ( "SELECT * from post ORDER BY id DESC");

			while ($r = mysql_fetch_array($consultar))
			{
				
			  echo "  
			  <div class='post'>
			  				<div class='titulo' style='font-family:Constantia'><a href='index.php?op=verPost&id=".$r['id']."'>".$r['titulo']."  </div></a>
			  					<div class='imagen'><img src='img/posts/" .$r['imagen']. "'/></div>
			  					<div class='postDescripcion'> ".$r['descripcion']."  </div><br>
			  					
			  				
			 	</div>
			       ";
			}
			
			
			  
			?>
			</div>
		</body>
</html>