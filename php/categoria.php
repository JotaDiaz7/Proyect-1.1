<?php

    session_start();

    $servidorbd = 'localhost';
    $usuariobd = 'root';
    $passbd = '';
    $basedatos = 'evaluacion';

    $conecbd = new mysqli($servidorbd, $usuariobd, $passbd, $basedatos);

    if($conecbd->connect_error) {
        $datos = 'Error';
    }else{
        $consult = "SELECT DISTINCT gender FROM bands";

        $result = $conecbd -> query($consult);

        if($result){
            if($result->num_rows == 0){
                $datos = '';
            }else{
                $datos = $result->fetch_all(MYSQLI_ASSOC);
                $result->free_result();
            }
        }else{
            $datos = '';
        }

        $conecbd -> close();
        echo json_encode($datos);
    }
?>