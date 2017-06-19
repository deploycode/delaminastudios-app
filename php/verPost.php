<?php
	session_start();
	$consultar = mysql_query( "SELECT * from post where id=".$id );
	while ($r = mysql_fetch_array($consultar)) 
	  {
	  		/*if ($_SESSION['rol']=='admin') {
	  			 echo "  
		    		<form action='index.php?op=actualizar_articulo' method='POST' >
		    			<input class='boton' type='submit' value='Editar Publicación'>
		    			<input type='hidden' name='id' value=".$r['articulo_id'].">
		    		</form>
		    		<form action='index.php?op=delete_articulo' method='POST' >
		    			<input class='boton' type='submit' value='Eliminar Publicación'>
		    			<input type='hidden' name='id' value=".$r['articulo_id'].">
		    		</form>
		    		";
	  		}*/
		    echo "  
		    		

		          <div class='postContenido'>
			  		  <div class='fecha'> De: ".$r['fecha']."   <div > By: ".$r['email_usuario']." </div><hr ><br/><br> </div>
			  		  <div class='titulo_div'>".$r['titulo']."  </div></a>
			  		  <div class='postTexto' >".$r['descripcion']."</div>
			  		 
			 		  <center><div><img class='postContenido' src='img/posts/" .$r['imagen']. "'/></div><center><br/><br/>
			 		  <div class='postTexto'>" .$r['contenido']. " </div>  <br/>
		 		  </div>

		       ";
	       
	  }
	/* if ($_SESSION['rol']=='user' || $_SESSION['rol']=='admin') 
	 {
?>
	  <form action="php/add_comentario.php"  method="POST">
	  		 <h3>Comentario</h3>
	  		 <table id="comentar">
	  		 	<tr>
	  		 		<td>
		  		 		<textarea name="comentario"></textarea>
		  				<input type="hidden" value="<?php echo $_SESSION['email']; ?>" name=" email" >
		  				<input type="hidden" value="<?php echo $id; ?>" name="articulo_id"> 
	  		 		</td>
	  		 	</tr>

	  		 	<tr>
	  		 		<td>
	  		 		<input type="submit" value="Comentar">
	  		 		</td>
	  		 	</tr>
	  		 </table>
	  		
	  		
	  		
	  </form>
	  
<?php
		}*/


	   $comentario = mysql_query( "SELECT * from comentario where id=".$id." ORDER BY id DESC");
       while ($co = mysql_fetch_array($comentario))
   	   {
   	     		echo "
   	     			

   	     				
	   	     			<table id= 'comentario_tbl'>
		   	     			<tr>

			   	     			<td id='usuario_td'>
			   	     				<label id='usuario_lbl'>".$co['email_usuario']."</label>
			   	     			</td>

			   	     			<td>
			   	     				".$co['contenido']."
			   	     			</td><hr>

		   	     			</tr>
		   	     		</table>

   		      		  ";




   	     	}		
?>
   