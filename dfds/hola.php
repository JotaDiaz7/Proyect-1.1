<?php
    session_start();

    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
    }else{
        $tipo = 1;
    }

    if(isset($tipo)){
        $tipo = htmlspecialchars($tipo);
    }
    
    $servidorbd = 'localhost';
    $usuariobd = 'root';
    $passbd = '';
    $basedatos = 'evaluacion';

    $conecbd = new mysqli($servidorbd, $usuariobd, $passbd, $basedatos);

    if($conecbd->connect_error){
        echo json_encode('Error');
        exit;
    }else{

        $consult = "SELECT * FROM bands WHERE tipo=$tipo";
        $result = $conecbd->query($consult);

        if($result){
            if($result->num_rows > 0){
                $datos = $result->fetch_all(MYSQLI_ASSOC);
            }else{
                $datos = [];
            }
        }else{
            echo json_encode('Error2');
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/flickity.min.css">
    <link rel="stylesheet" href="./css/animate.css/animate.min.css">
    <link rel="stylesheet" href="./fonts/awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="./fonts/awesome/css/solid.min.css">
    <link rel="stylesheet" href="./fonts/awesome/css/brands.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="icon" href="./media/favicon.png">
    <title>Experience Festival</title>
</head>
<body>
    <section id="splash">
        <div id="splash_div" class="animate__animated animate__fadeInUp">
            <img src="./media/splash_logo.png" alt="" id="splash_logo">
            <h2 id="splash_title">experience festival</h2>
        </div>
    </section>
    <header id="menu" class="splash_menu_hide">
        <section id="main_menu">
            <nav class="menu d-none">
                <ul>
                    <li><a href="#main">Inicio</a></li>
                    <li><a href="./php/contact.php" class="fontbg">Contacto</a></li>
                </ul>
            </nav>
            <div id="img">
                <img src="./media/logo.png" alt="" class="animate__animated animate__bounceIn">
            </div>
            <nav class="menu d-none">
                <ul>
                    <li><a href="./php/bands.php" class="fontbg">Bandas</a></li>
                    <li><a href="./php/galeria.php">Galeria</a></li>
                </ul>
            </nav>
            <div id="icon_menu">
                <i class="fa-solid fa-bars" id="icon_mov"></i>
            </div>
        </section>
        <section id="second_menu">
            <nav class="menu_mov">
                <ul>
                    <li><a href="./index.php">Inicio</a></li>
                    <li><a href="./php/contact.php">Contacto</a></li>
                    <li><a href="./php/bands.php">Bandas</a></li>
                    <li><a href="./php/galeria.php">Galeria</a></li>
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
    <main id="main">
        <section id="first" class="splash_hide">
            <video src="./media/main.mp4" loop autoplay muted ></video>
            <div id="title">
                <h1>Esto no es un festival... <br> es una experiencia</h1>
            </div>
            <div id="social">
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#"><i class="fa-brands fa-spotify"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </section>
        <section id="second" class="splash_hide">
            <h2 id="second_title" class="scroll fadeTop">una experiencia inolvidable</h2>
            <section id="second_info" class="scroll fadeTop">
                <div id="second_info_1">
                    <div id="img_second"></div>
                </div>
                <div id="second_info_2">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque unde ullam modi ipsum quidem amet dolorum. Porro expedita quia quasi accusantium, sequi quisquam asperiores autem, voluptatibus obcaecati veniam quod aliquam!</p>
                    <p class="d-none">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque unde ullam modi ipsum quidem amet dolorum. Porro expedita quia quasi accusantium, sequi quisquam asperiores autem, voluptatibus obcaecati veniam quod aliquam!</p>
                </div>
            </section>
            <section id="second_icons">
                <div class="icons">
                    <i class="fa-solid fa-volume-high"></i>
                    <p>Música 12h. seguidas</p>
                </div>
                <div class="icons">
                    <i class="fa-solid fa-campground"></i>
                    <p>Camping libre</p>
                </div>
                <div class="icons">
                    <i class="fa-solid fa-utensils"></i>
                    <p>Zonas de comida</p>
                </div>
                <div class="icons">
                    <i class="fa-solid fa-shower"></i>
                    <p>Baños y duchas</p>
                </div>
            </section>
        </section>
        <section id="third" class="shape_third splash_hide"></section>
        <section id="fourth" class="splash_hide">
            <h2 class="scroll fadeRight">bandas confirmadas</h2>
            <div class="main-carousel scroll fadeRight" >
                <?php
                foreach($datos as $card){
                ?>
                    <div class="carousel-cell">
                        <a href="./php/band.php?id=<?php echo $card['id']; ?>" class="cell">
                            <img src="./media/bandas/<?php echo $card['img']; ?>" alt="">
                            <h3><?php echo $card['title']; ?></h3>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </section>
        <section id="fifth" class="splash_hide"></section>
        <section id="sixth" class="splash_hide ">
            <div class="sixth_1">
                <h2>compra ya tu abono</h2>
                <div class="sixth_2">
                    <div class="sixth_3">
                        <p>¡Compra tu abono de 4 días en TICKETMASTER y disfruta de descuentos con experiencia!</p>
                    </div>
                    <div class="sixth_3"> 
                        <a href="#" class="scroll fadeScale">
                            <img src="./media/ticket.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="sixth_1">
                <h2>Merchandising</h2>
                <div class="sixth_2">
                    <div class="sixth_3">
                        <p>¡Experimenta con nuestra lista de reproducción!</p>
                        <a href="#" class="scroll fadeScale" ><i class="fa-brands fa-spotify"></i></a>
                    </div>
                    <div class="sixth_3" id="rotate_shop"> 
                        <div id="shop"></div>
                        <a href="#" id="shop_1"><img src="./media/shirt.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="seventh" class="shape_foot splash_hide">
            <h2 class="scroll fadeLeft">empieza la experiencia</h2>
            <div id="seventh_1">
                <div class="seventh_2 scroll fadeLeft" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3076.151947405334!2d-0.8491663241235585!3d38.63199017178205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd63df75220c36ab%3A0x79f718b4c0ca1cd8!2sPolideportivo%20de%20Villena!5e1!3m2!1ses!2ses!4v1684429886865!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
                </div>
                <div class="seventh_2 scroll fadeLeft">
                    <p class="seventh_3">Producciones Fantasía</p>
                    <p>Polideportivo de Villena <br>
                        Ctra. Biar, 1, 03400 Villena, Alicante
                    </p>
                    <p>
                        <i class="fa-brands fa-whatsapp"></i>
                        +34 604 59 68 74
                    </p>
                    <p>
                        <i class="fa-solid fa-envelope"></i>
                        experience@festival.es
                    </p>
                </div>
            </div>
        </section>
    </main>
    <footer id="foot" class="d-none">
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
                        <img src="./media/pexel.png" alt="">
                    </div>
                    <div class="div_img">
                        <img src="./media/spotify.png" alt="">
                    </div>
                    <div class="div_img">
                        <img src="./media/ticket.png" alt="">
                    </div>
                    <div class="div_img">
                        <img src="./media/tostadora.png" alt="">
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
    <script type="module" src="./jss/index.js"></script>
    <script src="./jss/flickity.pkgd.min.js"></script>
</body>
<?php 
    $conecbd->close();
?>
</html>
