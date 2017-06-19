
<?php   
    if (isset($_GET['var'])) 
    {
        $consulta=mysql_query("SELECT * FROM portafolio WHERE id =". $_GET['var']) or die(mysql_error());
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
                            <form action="php/updateServicio.php"  method="POST" enctype="multipart/form-data" >
                                <h2>Actualizar servicio</h2>
                                <label >Nombre:</label> <br/>
                                <input type="text" class="login"  name="nombre" value="<?php echo $r['nombre']; ?>" > <br/>

                                 <label >Descripción</label> <br/>
                                <textarea type="text"  class="login" style="height:100px" name="descripcion" style="height:100px" ><?php echo $r['descripcion']; ?></textarea><br/>
                                
                                <label > Icono:</label><br/>
                                <input type="file"  class="boton" name="imagen" ><br>
                                <img src="img/servicio/<?php echo $r['imagen']; ?>"style="width: 100px;">

                               

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
              
            </head>
            <body>
              
                            <form action="php/insertServicio.php"  method="POST" enctype="multipart/form-data" >
                                <h2>Agregar servicio al portafolio</h2>
                                <label >Nombre:</label> <br/>
                                <input type="text" class="login" name="nombre"> <br/>

                                <label >Descripción</label> <br/>
     <textarea type="text"  class="login" style="height:100px" name="descripcion" style="height:100px" ></textarea><br/>
                                
                                <label > Icono:</label><br/>
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
