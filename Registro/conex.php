<?php

    $server = "localhost";
    $usserbd = "root";
    $pass = "";
    $bd = "renta";

    $conex = mysqli_connect("$server", "$usserbd", "$pass", "$bd");

if(!$conex){
die("ERROR, NO se puede conectar con la base de datos");
}

$Nombre=$_POST['name'];
$Apellido=$_POST['surname'];
$Edad=$_POST['edad'];
$Ident=$_POST['Identificacion'];
$N_Telf=$_POST['telefono'];
$Direct=$_POST['direccion'];
$Email=$_POST['email'];
$Pass=$_POST['pass1'];
$Pass2=$_POST['pass2'];
$User=$_POST['user'];


 
    $sql="INSERT INTO datos (`name`, `surname`, `edad`, `Identificacion`, `telefono`, `direccion`, `email`, `pass1`, `user` )VALUES('$Nombre','$Apellido','$Edad','$Ident','$N_Telf','$Direct','$Email','$Pass','$User')";
    
    $resultado=mysqli_query($conex, $sql);

    if($resultado){
        echo '<script language="javascript">alert("LOS DATOS FUERON INGRESADOS CORRECTAMENTE");window.location.href="login/Login.php"</script>';

    } else {
        echo '<script language="javascript">alert("LOS DATOS NO FUERON INGRESADOS CORRECTAMENTE");window.location.href="Registro.php"</script>';
    }
    

?>