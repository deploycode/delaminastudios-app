
<?php   
    if (isset($_GET['var'])) 
    {
        $consulta=mysql_query("SELECT * FROM equipo WHERE id =". $_GET['var']) or die(mysql_error());
        while($r=mysql_fetch_assoc($consulta))
        {
            ?><!DOCTYPE html>
            <html>
            <head>
                <title></title>
                <meta charset="utf-8">
            </head>
            <body>
               
                        <div>
                            <form action="php/updateEquipo.php"  method="POST" enctype="multipart/form-data" >
                                <h2>Actualizar integrante al equipo</h2>
                                <label >Nombre:</label> <br/>
                                <input type="text" class="login" name="nombre" value="<?php echo $r['nombre']; ?>" required > <br/>

                                 <label >Cargo en la Empresa</label> <br/>
                                <input type="text"  class="login" name="cargo" value="<?php echo $r['cargo']; ?>" required ><br/>
                                
                                <label > Imagen de Perfil:</label><br/>
                                <input type="file"  class="boton" name="imagen" ><br>
                                <img src="img/equipo/<?php echo $r['imagen']; ?> "style="width: 100px;">

                               

                                <input type="hidden"  class="boton"value=<?php echo $r['id']; ?> name ="id"></input>
                                <input type="hidden" class="boton" value=<?php  echo $r['imagen']; ?> name ="nombredeimagen"></input>
                                <input type="submit" class="boton"  value="Enviar" >
                                <input type="reset"  class="boton" value="cancelar" >

                            </form> 

                        </div>

                    
            </body>
            </html><?php
        }
    }
    else
    {

        if ($_SESSION['rol']=='admin') 
        {
?>
            <!DOCTYPE html>
            <html>
            <head>
                <title></title>
                <meta charset="utf-8">
            </head>
            <body>
              
                            <form action="php/insertEquipo.php"  method="POST" enctype="multipart/form-data" >
                                <h2>Agregar integrante al equipo</h2>
                                <label >Nombre:</label> <br/>
                                <input type="text" class="login" name="nombre"> <br/>

                                <label >Cargo en la Empresa</label> <br/>
                                <input type="text" class="login" name="cargo"><br/>
                                
                                <label > Imagen de Perfil:</label><br/>
                                <input type="file" class="boton" name="imagen" ><br/>                               

                                <input type="submit" class="boton" value="Enviar" >
                                <input type="submit" class="boton" value="cancelar" >

                            </form> 

            </body>
            </html>
<?php
                }
                else 
                {
                    header("location:../index.php");
                }   

     }
?>
