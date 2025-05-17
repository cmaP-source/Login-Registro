<?php
require('Conn.php');
session_start();

if(isset($_SESSION['id_usuario'])){ 
    header("location: index.html");
}

if(!empty($_POST)) 
{
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
    $contraseña = mysqli_real_escape_string($mysqli, $_POST['contraseña']);


    $sha1_pass = sha1($contraseña);

    $sql = "INSERT INTO USUARIO (id, usuario, contraseña) VALUES ('".$id."','".$usuario."','".$contraseña."')";
    $result = $mysqli -> query($sql);
    echo "registrado";
}
?>