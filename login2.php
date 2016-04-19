
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


        