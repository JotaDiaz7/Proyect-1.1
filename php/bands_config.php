<?php
    session_start();

    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
    }else{
        json_encode('Error');
        exit;
    }

    $servidorbd = 'localhost';
    $usuariobd = 'root';
    $passbd = '';
    $basedatos = 'evaluacion';

    $conecbd = new mysqli($servidorbd, $usuariobd, $passbd, $basedatos);

    if($conecbd -> connect_error){
        $answer = '';
        exit;
    }

    if(isset($tipo)){
        $tipo = htmlspecialchars($tipo);
    }

    $consult = "SELECT * FROM bands WHERE tipo=$tipo";

    $result = $conecbd -> query($consult);

    if($result -> num_rows > 0) {
        $answer = $result -> fetch_all(MYSQLI_ASSOC);
    }else{
        $answer = '';
    }

    $result -> free_result();

    $conecbd -> close();

    echo json_encode($answer);
?>