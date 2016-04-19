<!DOCTYPE html>
<html>
    <head>
        <title>Tienda Virtual Energy</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <meta charset="UTF-8" />
    </head>
    <body>
        <header>
            <div class="top_header">
         <div class="hijo">
            <a href="#"class="layout2_a">
                <?php session_start();
                    if(!isset($_SESSION["session_nombre"])) {
                    header("location:login.php");
                    echo "inicar sesion";
                    } else {
                    ?>
                    <?php echo $_SESSION['session_nombre'];
                    echo '<a href="logout.php" class="layout2_a" style="padding:10px;">Cerrar Sesion</a>';
                    }?>
                </a>
            <a href="#"class="layout2_a col-3">acerca de</a>
            <a href="#"class="layout2_a col-3">preguntas frecuentes</a>
         </div>
    </div> 
            <div class="container">

              <nav class="row between middle">
                    <div class="col-4">
                        <a href="index.html">
                            <img src="assets/logo3.png"/>
                        </a>
                    </div>

                    <div class="col-3 end">
                        <ul class="row between">
                            <li class="col">
                                <a href="gatos.html" class="layout_a">Hombre</a>
                            </li>
                            <li class="col">
                                <a href="/perros.html" class="layout_a">Mujer</a>
                            </li>
                            <li class="col">
                                <a href="/acerca.html" class="layout_a">Deportes</a>
                            </li>
                        </ul>
                    </div>
                
                </nav>  
            </div>
            
            
        </header>

        <section class="home">

            <div class="container">
                <div class ="row center">
                    <h1 class="col-10">Administracion de la Tienda</h1>
                   
                    <div class="col-3 boton">
                        <a href="gatos.html" class="boton_a">Usuarios</a>
                    </div>
                    <div class="col-3 boton">
                        <a href="perros.html" class="boton_a">Productos</a>
                    </div>
                    <div class="col-3 boton">
                        <a href="perros.html" class="boton_a">Categorias</a>
                    </div>
                </div>
            </div>

            
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        2016 - <a href="http://twitter.com/marulango" class="layout_a" target="_blank">Tienda Virtual</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
