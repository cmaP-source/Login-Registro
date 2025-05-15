<?php
require('conn.php');

if(!empty($_POST));

$id = mysqli_real_escape_string($conn, $_POST['id']);
$usuarios = mysqli_real_escape_string($conn, $_POST['usuario']);
$contraseña = mysqli_real_escape_string($conn, $_POST['contraseña']);

$shal_pass = sha1($contraseña);
if($usuarios ==""){
    echo"Debe escribir un nombre";
}elseif($contraseña== ""){
    echo "Debe escribir una contraseña";
}else
 $mysqli = "INSERT INTO usuarios (id,usario,contraseña) VALUES ('$id',)








}

?>