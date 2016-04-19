<?php
session_start();
?>

<?php require_once("includes/connection.php"); ?>


<?php
header("application/json");
//if(isset($_SESSION["session_nombre"])){
// echo "Session is set"; // for testing purposes
//header("Location: index.php");
//}

//echo 'Nonmbre '.$_POST['user'];
//echo 'Nonmbre '.$_POST['password'];

// if(isset($_POST["login"])){
if(!empty($_POST['user']) && !empty($_POST['password'])) {
    $username=$_POST['user'];
    $password=$_POST['password'];

    $query =mysql_query("SELECT * FROM tbluser WHERE strnombre='".$username."' AND strpassword='".$password."'");

    $numrows=mysql_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbusername=$row['strnombre'];
    $dbpassword=$row['strpassword'];
    }

    if($username == $dbusername && $password == $dbpassword)

    {


    $_SESSION['session_nombre']=$username;
    
    //echo "hola carechimba";
    /* Redirect browser */
    //header("Location: intropage.php");
    $json = array("status"=>'200',"detalle"=>$_SESSION['session_nombre']);
                echo (json_encode($json));
    }
    } else {
        $json = array("status"=>'201',"detalle"=>"Nombre de usuario ó contraseña invalida!");
                echo (json_encode($json));
    }
/* echo "nomre invalido";
 $message =  "Nombre de usuario ó contraseña invalida!";*/

    }

 else {
    $json = array("status"=>'202',"detalle"=>"Todos los campos son requeridos!");
                echo (json_encode($json));
   /* echo "llenar campos";
    $message = "Todos los campos son requeridos!";*/
}
//}
?>