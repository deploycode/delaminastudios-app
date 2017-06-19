
<?php   
    if (isset($_GET['var'])) 
    {
        $consulta=mysql_query("SELECT * FROM post WHERE id =". $_GET['var']) or die(mysql_error());
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
                            <form action="php/updatePost.php"  method="POST" enctype="multipart/form-data" >
                                <h2>Actualizar Post</h2>
                                <label >Titulo:</label> <br/>
                                <input type="text" class="login" name="titulo" style="width: 1000px;" value="<?php echo $r['titulo']; ?>"> <br/>

                                <label >Descripción</label> <br/>
                                <textarea type="text" class="login" name="descripcion" style="width: 1000px; height: 100px;"><?php echo $r['descripcion']; ?></textarea><br/>

                                <label >Contenido</label> <br/>
                                <textarea type="text" style="width: 1000px; height: 300px;" value=""  class="login" name="contenido"> <?php echo $r['contenido']; ?> </textarea><br/>
                                
                                <label > Imagen de Perfil:</label><br/>
                                 <img src="img/posts/<?php echo $r['imagen']; ?> "style="width: 100px;">
                                <input type="file" class="boton" name="imagen" ><br/>                               
                                <input type="hidden" name="id" value="<?php echo $r['id']; ?>"></input>
                                <input type="submit" class="boton" value="Enviar" >
                                <input type="reset" class="boton" value="cancelar" >

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
              
                            <form action="php/insertPost.php"  method="POST" enctype="multipart/form-data" >
                                <h2>Agregar Post</h2>
                                <label >Titulo:</label> <br/>
                                <input type="text" class="login" style="width: 1000px;" name="titulo"> <br/>

                                <label >Descripción</label> <br/>
                                <textarea type="text" class="login" name="descripcion" style="width: 1000px; height: 100px;"></textarea><br/>

                                <label >Contenido</label> <br/>
                                <textarea type="text" style="width: 1000px; height: 300px;" class="login" name="contenido"> </textarea><br/>
                                
                                <label > Imagen de Perfil:</label><br/>
                                <input type="file" class="boton" name="imagen" ><br/>                               

                                <input type="submit" class="boton" value="Enviar" >
                                <input type="reset" class="boton" value="cancelar" >

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
