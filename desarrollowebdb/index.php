<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INICIO DE SESION</title>
    <link  rel="stylesheet" href="styles.css">
</head>

<body>
    <form action=""  method="post" >
        <?php
        include("conexion.php");
        include("login.php");
        ?>
        <p><h2>Hola, BIENVENID@...</h2></p>
        <p>Continua con la INICIA SESIóN </p>
        <div class="input-wrapper">
                <input type="email" name ="email" placeholder="E-mail...">
                
        </div> 
        <div class="input-wrapper">
                <input type="password" name ="password" placeholder="Contraseña...">
                
        </div> 
        <input class="btn" type="submit"  name="inicio" value="INICIO"> 
        <div>
            Aquí tu puedes <a href="registar.php">Registrarse</a>
        </div>      
        </form>
</body>
</html>
