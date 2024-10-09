<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "empresa";

    if ($conn = mysqli_connect($server, $user, $pass, $bd)){
    } else {
        echo "Não conectado!";
    }

    function mostrar_data($data) {
        $d = explode("-", $data);
        $data_formatada = $d[2] . "/" . $d[1] . "/" . $d[0];
        return $data_formatada;
    }

?>