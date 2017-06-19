<?php

	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
 	session_start();
  	require_once("php/conexion.php");
  
  	$op = $_GET["op"];
  	$id = $_GET["id"];

    switch($op) 
    {
    	case "":
       $contenido ="php/logo.php";          
      break;
/*-------------------------------------------------------------------------*/
      case "verGaleria":
       $contenido ="php/verGaleria.php";    
      break;

      case "verFotografia":
       $contenido ="php/verFotografia.php";    
      break;

      case "verProdAudiovisual":
       $contenido ="php/verProdAudiovisual.php";    
      break;

      case "verProdMusical":
       $contenido ="php/verProdMusical.php";    
      break;

      case "verDiseno":
       $contenido ="php/verDiseno.php";    
      break;

      case "verContacto":
       $contenido ="php/verContacto.php";    
      break;

      case "verEquipo":
       $contenido ="php/verEquipo.php";    
      break;

      case "verMinaDeIdeas":
       $contenido ="php/verMinaDeIdeas.php";    
      break;

      case "verPost":
       $contenido ="php/verPost.php";    
      break;

       case "verServicio":
       $contenido ="php/verServicio.php";
      break;

      case "verPortafolio":
      $contenido ="php/verPortafolio.php";
      break;

      case "verMinaDeIdeas":
      $contenido ="php/verMinaDeIdeas.php";
      break;

      case "verPost":
      $contenido ="php/verPost.php";
      break;

      case "verComentario":
      $contenido ="php/verComentarioformComentario.php";
      break;
/*--------------------------------------------------------------------------*/
      case "formGaleria":
       $contenido ="php/formGaleria.php";    
      break;
    
      case "formEquipo":
       $contenido ="php/formEquipo.php";    
      break;

      case "form_registro":
       $contenido ="php/form_registro.php";
      break;

      case "formServicio":
       $contenido ="php/formServicio.php";
      break;

      case "formContacto":
      $contenido ="php/formContacto.php";
      break;

       case "formPost":
      $contenido ="php/formPost.php";
      break;

       case "formPost":
      $contenido ="php/formPost.php";
      break;
             case "formComentario":
      $contenido ="php/formComentario.php";
      break;
/*--------------------------------------------------------------*/
       case "adminBlog":
      $contenido ="php/adminBlog.php";
      break;

       case "adminEquipo":
       $contenido ="php/adminEquipo.php";
       break;
      case "adminPortafolio":
      $contenido ="php/adminPortafolio.php";
      break;
       case "formLogin":
      $contenido ="php/formLogin.php";
      break;

      case "cerrar_sesion":
       $contenido ="php/cerrar.php";
      break;

      default:
      $contenido ="index.php";
  
    }
?>
<html>
  <head>
      <title> Delamina Studios </title>
      <link rel='shortcut icon' type='image/x-icon' href='img/logo.ico'/>
      <link rel='stylesheet' href='css/flexslider.css'/>
      <link rel='stylesheet' type='text/css' href='css/estilos.css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      
      
  </head>
  
  <body>
      <div class="principal">
         <header>       
           <div style="display: block;">
               <!-- <a href="index.php"><img style="width: 50px;padding: 0.5em;float:left;margin-top: 10px;"src="img/logo.png"></a> -->
                <a href="index.php" style="background-color: blue; color: white; font-weight: bold; margin-left: 100px; font-family: Segoe UI; float: left;padding: 0.5em; margin-top: 1em; ">BETA</a>
               <a href="index.php" style=" font-weight: bold; margin-left: 4px; font-family: Segoe UI; float: left;padding-top: 1.5em; ">Dela Mina</a>
               <a href="index.php" style=" margin-left: 3px; font-family: Segoe UI; float: left;padding-top: 1.5em; "> Studios</a>
           </div>
         </header>
        
         <div class="contenedor">
            <?php include($contenido);?>
         </div>
     
         <nav id="menu_gral" width:"1000px">
              <ul>
                 <?php
                    if (isset($_SESSION['email'])) 
                        { 
                          if ($_SESSION['rol']=='admin') 
                          {
                           echo 
                          " 
                              <li><a href='?op=verEquipo'><img src='img/iconos/user.png' > <br>Nuestro Equipo</a>
                                 <ul>
                                    <li><a href='?op=adminEquipo'>Administrar Equipo</a></li>
                                    <li><a href='?op=formEquipo'>Agregar Integrante al equipo</a></li>
                                    
                                 </ul>
                              </li>

                          <li><a href='?op=verMinaDeIdeas'><img src='img/iconos/spider-web.png' > <br>Mina de ideas</a>
                                <ul>
                                    <li><a href='?op=adminBlog'>Administrar Blog</a></li>
                                    <li><a href='?op=formPost'>Agregar Post</a></li>
                                </ul>
                          </li>
                              
                              <li><a href='?op=verServicio'><img src='img/iconos/shop.png' > <br>Servicios</a>
                                 <ul>
                                    <li><a href='?op=adminPortafolio'>Administrar Servicios</a></li>
                                    <li><a href='?op=formServicio'>Agregar Servicio</a></li>
                                  </ul>
                              </li>

                              <li> <a href=''><img src='img/iconos/user.png' > <br>".$_SESSION['usuario']. "</a>
                                <ul>
                                  <li><a href='php/cerrar_sesion.php'>Cerrar Sesion</a></li>
                                  <li><a href='index.php?op=formLogin&var='editar''>Editar Perfil</a></li>
                                </ul>
                              </li>
                           ";
                          }
                          elseif($_SESSION['rol']=='user') 
                          {
                           echo 
                           "
                            <li><a href='index.php'>Inicio</a></li>
                            <li><a href='?op=list_info'>¿Quienes Somos?</a></li>
                            <li><a href=''>".$_SESSION['email']. "</a>
                              <ul>
                                <li><a href='php/cerrar_sesion.php'>Cerrar Sesion</a></li>
                                <li><a href='index.php?op=form_datos'>Editar Perfil</a></li>
                              </ul>
                            </li>
                           ";
                          }
                      }
                      else 
                      {
                        echo
                        "                
                          <li><a href='?op=verEquipo'><img src='img/iconos/user.png'> <br>Nuestro Equipo</a></li>
                          <li><a href='?op=verPortafolio'><img src='img/iconos/shop.png' > <br>Portafolio</a></li>
                        
                          <li><a href='?op=verMinaDeIdeas'><img src='img/iconos/spider-web.png' > <br>Mina de ideas</a></li>
                          <li><a href='?op=formContacto'><img src='img/iconos/new-file.png' > <br>Contáctanos</a></li>
                          
                        ";
                      }
                ?>
        </nav>
      <footer>        <hr style="width: 600px; float: right;"><br>

           Delamina Studios © Todos los derechos reservados 2016 <a href='?op=formLogin'>  INGRESO WebAdmin</a>  Desarrollado por Gabriel Rodríguez
       </footer> 
        </div>
 </body>
</html>
<!-- 
<li><a href='?op=formGaleria'><img src='img/iconos/side-menu.png' > <br> Imágenes</a></li>
                            <li><a href='?op=verProyectos'><img src='img/iconos/folders.png' > <br>Proyectos</a>

<li><a href='?op=formContacto'><img src='img/iconos/picture.png' > <br>Galería</a></li> 
 -->
