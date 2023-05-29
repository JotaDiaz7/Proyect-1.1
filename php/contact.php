
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
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/responsive_contact.css">
    <link rel="icon" href="../media/favicon.png">
    <script src="https://www.google.com/recaptcha/api.js?render=6LdD0DgmAAAAAEPS6qnAG6nnxLmwoqTHou76gOS5"></script>
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
        <h1>contacta con nosotros</h1>
        <section id="galery_1">
            <section class="galery_2">
                <form action="" id="contact">
                    <div class="wrap d-none" id="error">
                        <i class="fa-regular fa-circle-xmark"></i>
                        <p>Por favor, rellene el formulario correctamente</p>
                    </div>
                    <div class="wrap d-none" id="success">
                        <i class="fa-solid fa-thumbs-up"></i>
                        <p>Muchas gracias por contactar con nosotros</p>
                    </div>
                    <div id="main_wrap" class="wrap">
                        <div class="wrap_2">
                            <label for="name" class="form-label">Nombre y apellidos</label>
                            <input type="text" id="name" name="name" class="form-input" placeholder="Jhon Doe">
                        </div>
                        <div class="wrap_2">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="experience@festival.es">
                        </div>
                    </div>
                    <div class="wrap">
                        <label for="issue" class="form-label">Asunto</label>
                        <input type="text" id="issue" name="issue" class="form-input" placeholder="Asunto del mensaje">
                    </div>
                    <div id="message_wrap" class="wrap">
                        <label for="message" class="form-label">Mensage</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-input" placeholder="Escriba su mensaje"></textarea>
                    </div>
                    <div id="chequeo_wrap">
                        <input type="checkbox" id="checkbox" name="checkbox">
                        <label for="checkbox" class="form-label">Acepto la <a href="#">política de privacidad</a></label>
                    </div>
                    <div id="submit_wrap" class="wrap">
                        <input type="submit" id="submit" name="submit" value="Enviar">
                    </div>
                </form>
            </section>
            <section class="galery_2" id="wrap_video">
                <div id="video_blob">
                    <video src="../media/contact.mp4" loop autoplay muted></video>
                </div>
            </section>
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
    <script type="module" src="../jss/contact.js"></script>
</body>
</html>