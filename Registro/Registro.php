
<!DOCTYPE html>
<html lang="es">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KA-CHAOW! REGISTRO</title>
    <link rel="stylesheet" href="estilos.css" src="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>
<body>
    <video autoplay muted plays-inline loop class="back-video">
        <source src="video2.mp4" type="video/mp4">
    </video>
        
        <form action="conex.php" method="POST" id="form" onsubmit="checkForm(this); return false;">
            <div class="form">
                <h1>Registro</h1>
                
                <div class="grupo">
                    <input type="text" name="name" id="name" required><span class="barra"></span>
                    <label for="">Nombre</label>
                </div>
                <div class="grupo">
                    <input type="text" name="surname" id="surname" required><span class="barra"></span>
                    <label for="">Apellido</label>
                </div>
                <div class="grupo">
                    <input type="text" name="user" id="user" required><span class="barra"></span>
                    <label for="">Usuario</label>
                </div>
                <div class="grupo">
                    <input type="number" name="edad" id="edad" required><span class="barra"></span>
                    <label for="">Edad</label>
                </div>
                <div class="grupo">
                    <input type="number" name="Identificacion" id="Identificacion" required><span class="barra"></span>
                    <label for="">Identificacion</label>
                </div>
                <div class="grupo">
                    <input type="number" name="telefono" id="telefono" required><span class="barra"></span>
                    <label for="">N. Telefono</label>
                </div>
                <div class="grupo">
                    <input type="text" name="direccion" id="direccion" required><span class="barra"></span>
                    <label for="">Direccion</label>
                </div>
                <div class="grupo">
                    <input type="email" name="email" id="email" required><span class="barra"></span>
                    <label for="">Email</label>
                </div>
                <div class="grupo">
                    <input type="password" name="pass1" id="pass1" required><span class="barra"></span>
                    <label for="">Password</label>
                </div>
                <div class="grupo">
                    <input type="password" name="pass2" id="pass2" required><span class="barra"></span>
                    <label for="">Password</label>
                </div>
            

                <button name="boton" id="send" type="submit">Send</button>
                <a class="warnings" id="warnings" href="../login/Login.php">¿Ya estas Registrado?</a>
                <p class="warnings" id="warnings"></p>
            </div>
        </form>
    
    
    <!-- <script src="1app1.js"></script> -->
</body>
</html>
