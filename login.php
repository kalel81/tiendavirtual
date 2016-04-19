<!DOCTYPE html>
<html>
    <head>
        <title>Tienda Virtual Energy</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <meta charset="UTF-8" />
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    </head>
    <body>
        <header>
            <div class="top_header">
         <div class="hijo">
            <a href="#"class="layout2_a">iniciar sesion</a>
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

        <section class="home2">

            <div class="container">
                <div class ="row center">
                                       
                    <div class="col-5 container2">
                       <div id="login">
                            <div class="row center pie">
                                <p>Inicar Sesion</p>
                            </div>
                        <form  action="#" method="post" style="padding: 15px;" autocomplete="off">
                            
                            <p>
                             <label>Nombre De Usuario<br /><br /></label>
                             <input type="text" class="textbox" name"nombre" id="nombre" value="" size="20" autofocus autocomplete="off" placeholder="ingrese nombre"/>
                             </p>
                             <p>
                             <label>Contraseña<br /><br />
                             <input type="password" class="textbox" name="password" id="password" size="20" /></label>
                             </p>
                             <p class="submit row col-12 center">
                             <input type="button" name="login" class="button" value="Entrar" id="send"/>
                             </p>
                            <p class="regtext">No estas registrado? <a href="register.php" >Registrate Aquí</a>!</p>

                        </form>
                           <script type="text/javascript">

        $("#send").click(function(){
            var user = $("#nombre").val();
            var password = $("#password").val();

            var objeto = {
                password: password,
                user: user                
                }
            //data = $('#loginform').submit().serialize() + "&" + $.param(obj_json);
           
            //console.log(obj_json);
            $.ajax({
                url: 'acceso.php',
                //contentType: "application/json",
                //dataType: "json",
                data: objeto,
                type: 'POST',
                cache: false,
                beforeSend: function(status) {
                    console.log(status);
                },
                error: function(event) {
                    console.log("error");
                },
                success: function(data) {
                    
                
                    var result = $.parseJSON(data);
                    if(result.status==200)
                    {

                        location.href = 'index.php';
                    }else{

                       alert("Error: "+ result.detalle);
                    }
                    //location.href = 'index.html';
                }
            });
        });
</script>
                       </div>
                    </div>
                   
                </div>
                <?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
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