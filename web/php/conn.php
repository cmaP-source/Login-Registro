<?php //indexphp mark gey
    $mysqli=new mysqli("localhost", "root","Labaiep25", "pAGINA WEB");
    if(mysqli_connect_errno()) {
        echo "Conexion fallida: ", mysqli_connect_error();
        exit();
    }
    else {
        echo 'Conexion exitosa';
    }
?>