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
    <link rel="stylesheet" href="../css/bands.css">
    <link rel="stylesheet" href="../css/responsive_bands.css">
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
    <main>
        <section id="confirm">
            <div id="divider"></div>
            <h2>bandas confirmadas</h2>
            <section>
                <div id="confirm_1">
                    <i class="fa-solid fa-circle-chevron-right" id="right"></i>
                    <ul id="menu_iso">
                    </ul>
                </div>
                <div id="confirm_2">
                    <div id="gender">
                        <span>Género: <h3 id="title_gender"></h3></span>
                    </div>
                    <div id="yes" class="container">
                    </div>
                </div>
            </section>
        </section>
        <section id="no_confirm" class="shape_no_confirm">
            <h2>bandas por confirmar</h2>
            <section id="no" class="container shape_foot"></section>
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
    <template id='maincard'>
        <div class="card grid-item">
            <a href="">
                <img src="" alt="">
                <h4></h4>
            </a>
        </div>
    </template>
    <script src="../jss/isotope.pkgd.min.js"></script>
    <script type="module" src="../jss/bands.js"></script>
    <script src="//code.tidio.co/ybb7yl7lyaawdulsxnwg0tmcw9w1nhuh.js" async></script>
</body>
</html>