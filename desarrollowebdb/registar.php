<?php
//crear registro en la base de datos, METODO INSERTAR
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombres = $_POST['nombres'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $passwords = $_POST['passwords'];

    $sql = "INSERT INTO registro (nombres, email, direccion, telefono, passwords) VALUES (?, ?, ?, ?,?)";

    $stmt = $conex->prepare($sql);
    $stmt->bind_param("sssss", $nombres, $email, $direccion, $telefono, $passwords);
    $stmt->execute();
    $stmt->close();

    header("Location: bienvenidos.html");
    exit();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link  rel="stylesheet" href="styles.css">
</head>
<body>
        <form method="post" >
        <p><h2>REGISTRO</h2></p>
        <div class="input-wrapper">
                <input type="text" name ="nombres" placeholder="Nombres...">
                
        </div> 

        <div class="input-wrapper">
                <input type="email" name ="email" placeholder="E-mail...">
                
        </div> 

        <div class="input-wrapper">
                <input type="text" name ="direccion" placeholder="Dirección...">
                
        </div>

        <div class="input-wrapper">
                <input type="tel" name ="telefono" placeholder="Teléfono...">
                
        </div>

        <div class="input-wrapper">
                <input type="password" name ="passwords" placeholder="Contraseña...">
                
        </div> 
                <input class="btn" type="submit"  name="register" value="REGISTRARSE">      
        </form >
</body>
</html>