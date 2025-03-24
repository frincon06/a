<?php
session_start(); // Iniciar sesión

$server = "localhost";
$usserbd = "root";
$pass = "";
$bd = "renta";

$conex = mysqli_connect("$server", "$usserbd", "$pass", "$bd");



if(!$conex){
    die("ERROR, NO se puede conectar con la base de datos");
}

// Verificar si el formulario de inicio de sesión se envió
if(isset($_POST['email']) && isset($_POST['pass1'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass1'];
  
  // Consulta para verificar si las credenciales son correctas
  $consulta = "SELECT `name`, `Identificacion` FROM `datos` WHERE email='$email' AND pass1='$pass'";
  $resultado = mysqli_query($conex, $consulta);
  
  // Si la consulta devuelve una fila, las credenciales son correctas
  if($resultado && mysqli_num_rows($resultado) == 1) {
      $fila = mysqli_fetch_assoc($resultado);
      $id = $fila['Identificacion'];
      $name = $fila['name'];
      
      // Almacenar el ID y nombre del usuario en la sesión
      $_SESSION['name'] = $name;
      $_SESSION['Identificacion'] = $id;
      
      // Redirigir al usuario a la página de bienvenida
      echo '<script language="javascript">alert("BIENVENIDO '.$name.'");window.location.href="../tv.php"</script>';
      
      exit();
  } else {
      echo '<script>alert("Credenciales incorrectas");window.location.href="Login.php"</script>';
  }
}
?>















    