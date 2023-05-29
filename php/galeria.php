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
        $consult = "SELECT * FROM galeria";

        $result = $conecbd -> query($consult);

        if($result){
            if($result->num_rows > 0){
                $datos = $result->fetch_all(MYSQLI_ASSOC);
            }else{
                $datos = [];
            }
        }else{
            $datos = '';
        }
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/animate.css/animate.min.css">
    <link rel="stylesheet" href="../fonts/awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fonts/awesome/css/solid.min.css">
    <link rel="stylesheet" href="../fonts/awesome/css/brands.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/galeria.css">
    <link rel="stylesheet" href="../css/responsive_galeria.css">
    <link rel="stylesheet" href="../jquery/Stapel-master/css/stapel.css">
    <link rel="stylesheet" href="../jquery/Stapel-master/css/custom.css">
    <link rel="stylesheet" href="../lightbox/src/css/lightbox.css">
    <script type="text/javascript" src="../jquery/Stapel-master/js/modernizr.custom.63321.js"></script>
    <link rel="icon" href="../media/favicon.png">
    <title>Experience Festival</title>
</head>
<body>
    <header id="menu">
        <section id="main_menu">
            <nav class="menu d-none">
                <ul>
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="./contact.php" class="fontbg">Contacto</a></li>
                </ul>
            </nav>
            <div id="img">
                <img src="../media/logo.png" alt="" class="animate__animated animate__bounceIn">
            </div>
            <nav class="menu d-none">
                <ul>
                    <li><a href="./bands.php" class="fontbg">Bandas</a></li>
                    <li><a href="./galeria.php">Galeria</a></li>
                </ul>
            </nav>
            <div id="icon_menu">
                <i class="fa-solid fa-bars" id="icon_mov"></i>
            </div>
        </section>
        <section id="second_menu">
            <nav class="menu_mov">
                <ul>
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="./contact.php">Contacto</a></li>
                    <li><a href="./bands.php">Bandas</a></li>
                    <li><a href="./galeria.php">Galeria</a></li>
                    <li id="menu_social">                
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#"><i class="fa-brands fa-spotify"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                </ul>
            </nav>
        </section>
    </header>
    <main  class="shape_foot">
        <section id="galeria" class="shape_galery">
            <h2>Galeria de fotos</h2>
            <div id="container">
                <div class="topbar">
                    <span id="close" class="back">&larr;</span>
                </div>
                <ul id="tp-grid" class="tp-grid">
                    <?php foreach($datos as $card){ ?>
                    <li data-pile="<?php echo $card['year']; ?>">
                        <a href="../media/galeria/<?php echo $card['title']; ?>" class="wrap" data-lightbox="<?php echo $card['year']; ?>">
                            <img src="../media/galeria/<?php echo $card['title']; ?>" alt="" class="img">
                        </a>
                    </li>
                    <?php } ?>    
                </ul>
            </div>
        </section>
    </main>
    <footer id="foot">
        <div id="main_foot">
            <section>
                <p><a href="#">AVISO LEGAL</a></p>
                <p><a href="#">POLÍTICA DE PRIVACIDAD & COOKIES</a></p>
                <p><a href="#">CONDICIONES DE VENTA DE ENTRADAS</a></p>
            </section>
            <section>
                <p>ENTIDADES COLABORADORAS</p>
                <div id="ent_col">
                    <div class="div_img">
                        <img src="../media/pexel.png" alt="">
                    </div>
                    <div class="div_img">
                        <img src="../media/spotify.png" alt="">
                    </div>
                    <div class="div_img">
                        <img src="../media/ticket.png" alt="">
                    </div>
                    <div class="div_img">
                        <img src="../media/tostadora.png" alt="">
                    </div>
                </div>
            </section>
            <section>
                <p>EXPERIENCE NEWSLETTER</p>
                <form>
                    <input type="email" placeholder="Suscríbete">
                    <input type="submit" value="ENVIAR">
                </form>
            </section>
        </div>
        <div id="second_foot">
            <p>Diseño y desarrollo web por <a href="#" id="jota">Jota Díaz</a></p>
        </div>
    </footer>
    <script type="text/javascript" src="../jquery/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="../jquery/Stapel-master/js/jquery.stapel.js"></script>
    <script type="text/javascript" src="../lightbox/src/js/lightbox.js"></script>
    <script type="module" src="../jss/galeria.js"></script>
    <script src="//code.tidio.co/ybb7yl7lyaawdulsxnwg0tmcw9w1nhuh.js" async></script>
</body>
<?php 
    $conecbd->close();
?>
</html>