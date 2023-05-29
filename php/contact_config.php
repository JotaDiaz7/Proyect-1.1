<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    session_start();

    define("RECAPTCHA_V3_SECRET_KEY", '6LdD0DgmAAAAACU0loiGuB_J2eEg-DOtEmHxQcm8');

    if(!isset($_POST['name']) || empty($_POST['name'])){
        echo json_encode('Error1');
        exit;
    }
    if(!isset($_POST['email']) || empty($_POST['email'])){
        echo json_encode('Error2');
        exit;
    }else{
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == FALSE;
    }
    if(!isset($_POST['issue']) || empty($_POST['issue'])){
        echo json_encode('Error3');
        exit;
    }
    if(!isset($_POST['message']) || empty($_POST['message'])){
        echo json_encode('Error4');
        exit;
    }
    if(!isset($_POST['checkbox']) || empty($_POST['checkbox'])){
        echo json_encode('Error5');
        exit;
    }


    $name =htmlspecialchars(trim($_POST['name']));
    $email_form =htmlspecialchars(trim($_POST['email']));
    $issue =htmlspecialchars(trim($_POST['issue']));
    $message =htmlspecialchars(trim($_POST['message']));

    $token = $_POST['token'];
    $action = $_POST['action'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $arrResponse = json_decode($response, true);

    if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5){

        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $email = new PHPMailer;
        $email->isSMTP();
        $email->Host = 'webmail.formaciongesfor.tk';
        $email->Port = 587;
        $email->SMTPAuth = true;
        $email->Username = "alumn5@formaciongesfor.tk";
        $email->Password = "Alumn5#2023";
        $email->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $email->setFrom('alumn5@formaciongesfor.tk', $name);
        $email->addReplyTo($email_form);
        $email->addAddress('alumn5@formaciongesfor.tk', 'Jota Díaz');
        // $email->addAddress('alumn10@formaciongesfor.tk', 'Jota Díaz');
        // $email->addAddress('alumn2@formaciongesfor.tk', 'Edu');
        $email->Subject = $issue;
        $email->Body = $message;

        if(!$email->send()){
            echo json_encode('Error en el envio: '.$email->ErrorInfo);
        }else{
            echo json_encode('Mensaje enviado');
        }

    }else{
        echo json_encode('ERROR SPAM');
        exit;
    }


?>