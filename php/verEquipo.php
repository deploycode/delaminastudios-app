<?php
    require_once("libreria/Zebra_Pagination.php");
    $resultado=5;
    $consulta=mysql_query("SELECT count(*) as total FROM equipo " );
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
<body><br>
<?php

		$consultar = mysql_query ( "SELECT * from equipo ORDER BY id ASC LIMIT " .(($paginacion->get_page()-1)*$resultado).','.$resultado);
		while ($r = mysql_fetch_array($consultar))
		{
		  echo "  
	          <div class='noticia_div'>
	          	  <div class='imagen'><img style ='
					
					margin: 0;
					padding: 0;
					border-radius: 800px;
					overflow: hidden;
					width:100%;
					' src='img/equipo/" .$r['imagen']."'/></div><br/>
			 	  <div class='titulo'>".$r['nombre']." </a></div>
				  <div class='descripcion'> ".$r['cargo']." <br> </div><br>
	 		  </div>
		       ";
		}
    $paginacion->render(); 
?>
</body>
</html>

