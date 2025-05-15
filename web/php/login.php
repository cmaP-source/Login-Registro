<?php
require('Registro.php');

session_start();

if(inset($_SESSION ('id_usuario'))){
header("location: index.html");

}

if(!empty($_POST)){


}

$usuario = mysqli_real_escape_string($mysqli, $_POST ('usuario'));
$contraseña = mysqli_real_escape_string($mysqli, $_POST('contraseña'));
$error = '';
$shal_pass = shal($contraseña);

$sql = " SELECT ID FROM USUARIOS WHERE USUARIO = '$usuario' AND contraseña = '$shal_pass'";

$result = $mysqli -> query($sqli)
$row = $result -> num_rows:

if($rows > 0){

$row = $result -> fetch_assoc();
$_SESSION('id_usuario') = $row ('id'); 



header("location: index.html");
else{
    $error = "El nombre o la contraseña es incorrecta";
}

}




?>