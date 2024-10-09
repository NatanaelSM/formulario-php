<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "empresa";

    if (mysqli_connect($server, $user, $pass, $bd)) {
        echo "Conectado!";
    } else {
        echo "Não conectado!";
    }

?>