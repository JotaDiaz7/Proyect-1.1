<?php 
    session_start();

    if(!isset($_GET['id']) || empty($_GET['id'])){
        header("Location: ../index.php");
    }else{
        $id = $_GET['id'];

        $servidorbd = 'localhost';
        $usuariobd = 'root';
        $passbd = '';
        $basedatos = 'evaluacion';

        $conecbd = new mysqli($servidorbd, $usuariobd, $passbd, $basedatos);

        if($conecbd->connect_error){
            echo json_encode('Error1');
        }else{
            $consult = "SELECT * FROM bands WHERE id=$id";
            $result = $conecbd->query($consult);

            if($result){
                if($result->num_rows == 0){
                    echo json_encode('Error2');
                }else{
                    $datos = $result->fetch_assoc();
                }
            }else{
                echo json_encode('Error3');
                exit;
            }
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
    <link rel="stylesheet" href="../css/band.css">
    <link rel="stylesheet" href="../css/responsive_band.css">
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
    <main class="shape_main">
        <section class="shape_foot">
            <img src="../media/bandas/<?php echo $datos['img']; ?>" alt="">
        </section>
        <section >
            <div id="info">
                <h1><?php echo $datos['title']; ?></h1>
                <span>Género: <h4><?php echo $datos['gender']; ?></h4></span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam eaque aut libero eos harum dolor consequuntur impedit. Vel earum voluptatem excepturi iusto ex veniam architecto, hic, vitae veritatis maxime recusandae. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, excepturi. Delectus sequi porro quaerat odio asperiores. Excepturi consequuntur similique doloremque quae nihil fugit. Id, blanditiis. Quis neque soluta dolor exercitationem.</p>
                <audio autoplay controls src="../media/songs/<?php echo $datos['song']; ?>"></audio>
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
    <script type="module" src="../jss/band.js"></script>
    <script src="//code.tidio.co/ybb7yl7lyaawdulsxnwg0tmcw9w1nhuh.js" async></script>
</body>
</html>