<?php
include("conexion.php");

if(!empty($_POST["inicio"])){
    if(empty($_POST["email"]) and empty(($_POST["passwords"]))){
        echo "Por favor, complete los campos";
    }else{
        $email=$_POST["email"];
        $passwords=$_POST["password"];
        $sql = $conex-> query("SELECT * FROM registro WHERE email = '$email' AND passwords ='$passwords'");

        if($datos = $sql->fetch_object()){
            header("Location:bienvenidos.html");
        }else{
                echo "ACCESO RESTRIGIDO";
            }
        }
    }
?>