<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <title>Factura</title>
</head>
<body>
    <div class="header_section">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="nav-link" href="index.php">KA-CHAOW</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeria.php">Autos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tv.php">Renta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="celebs.php">Patrocinador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="historial.php">Historial</a>
                    </li>
                </ul>
                
                    <?php 
                        session_start();
                        if(isset($_SESSION['name'])) {
                           echo "<h1>".$_SESSION['name']."</h1>";
                           
                        } else {
                            echo '<script language="javascript">alert("NO HAS INICADO SESION");window.location.href=\'index.php\';</script>';                        }
                    ?> 
                    <?php
                       

                        if (isset($_SESSION['name'])) {
                           // Si el usuario ha iniciado sesión, muestra el botón de cerrar sesión.
                           $show_logout_button = true;
                        } else {
                           // Si el usuario no ha iniciado sesión, oculta el botón de cerrar sesión.
                           $show_logout_button = false;
                        }
                    ?>

                        <div>
                           <?php
                            if ($show_logout_button) {
                                // Muestra el botón de cerrar sesión solo si $show_logout_button es true.
                                echo '<button><a href="logout.php">Cerrar sesión</a></button>';
                            }
                           ?>
                        </div>
                </div>

                </div>
            </nav>
    </div>
    <center>
        <div class="fact">
            <?php
                include('Conexion.php');
                    
                $conex=mysqli_connect("$server", "$usserbd", "$pass", "$bd");
                $email =$_SESSION['Identificacion'];
                $date=$_POST['date'];
                $tipo=$_POST['tipo'];
                $color=$_POST['color'];
                $dias=$_POST['dias'];
                

                $camioneta=260000;
                $taxi=200000;
                $partcular=320000;

                $sql="INSERT INTO `factura` (`date`,`tipo`,`color`,`dias`,`email`)VALUES('$date','$tipo','$color','$dias','$email')";
                $resultado=mysqli_query($conex, $sql);

                //if($resultado){
                    //echo("LOS DATOS FUERON INGRESADOS CORRECTAMENTE");
                //}else{
                    //echo("PAILAS! LOS DATOS NO FUERON INGRESADOS CORRECTAMENTE");
                //}

                
                    if ($tipo=="Taxi") {
                    $valor=$taxi*$dias;
                    echo ("Usted a seleccionado un taxi de color '$color' por '$dias' dias. Con un total de '$valor' el dia '$date'");
                    } else if($tipo=="Camionetas"){
                    $valor=$camioneta*$dias;
                    echo ("Usted a seleccionado una camioneta de color '$color' por '$dias' dias. Con un total de '$valor' el dia '$date'");
                    } elseif ($tipo=="Particular"){
                    $valor=$partcular*$dias;
                    echo ("Usted a seleccionado un particular de color '$color' por '$dias' dias. Con un total de '$valor' el dia '$date' ");
                    }
        
            ?>
        </div>
    </center>
                    
</body>
</html>









   