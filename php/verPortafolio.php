<?php
    require_once("libreria/Zebra_Pagination.php");
    $resultado=5;
    $consulta=mysql_query("SELECT count(*) as portafolio FROM equipo " );
    while ($reg = mysql_fetch_array($consulta))
    {
        $total=$reg['total'];
    }

    $paginacion= new Zebra_Pagination();
    $paginacion->records($total);
    $paginacion->records_per_page($resultado);
	require_once("conexion.php");
?>
<html>
<head>
	<title></title>
	
</head>
<body><br><br><br><br>
<?php

		$consultar = mysql_query ( "SELECT * from portafolio ORDER BY id DESC LIMIT " .(($paginacion->get_page()-1)*$resultado).','.$resultado);
		while ($r = mysql_fetch_array($consultar))
		{
		  echo "  
	          <div class='noticia_div'>
	          	  <a href='index.php?op=verServicio&servicio=$r[id]'><img style ='' src='img/servicio/" .$r['imagen']."'/></a>
			 	
				</div>
		       ";
		}
    $paginacion->render(); 
?>
</body>
</html>
