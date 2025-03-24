
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KA-CHAOW! LOGIN</title>
    <link rel="stylesheet" href="Style-login.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
<body>
        <video autoplay muted plays-inline loop class="back-video">
            <source src="video2.mp4" type="video/mp4">
        </video>
            
            <form action="validar.php" method="POST" id="form">
                <div class="form">
                    <h1>Inicio de Sesion</h1>
                    <div class="grupo">
                        <input type="email" name="email" id="email" required><span class="barra"></span>
                        <label for="">Email</label>
                    </div>
                    <div class="grupo">
                        <input type="password" name="pass1" id="pass1" required><span class="barra"></span>
                        <label for="">Password</label>
                    </div>

                    <button name="send" id="send" type="submit">Send</button>
                    
                    <button id="limpar" type="reset">Clear</button>
                    <a class="warnings" id="warnings" href="../Registro/Registro.php">¿No te has registrado?</a>
                    <p class="warnings" id="warnings"></p>
                </div>
                
                
                
            </form>
    
    
    <script src="1login_app.js"></script>
    
</body>
</html>