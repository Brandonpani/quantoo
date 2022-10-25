<?php
if ( !session_id() ) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="apple-touch-icon" sizes="57x57" href="images/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Quanto | Solucion Financiera Integral</title>
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />

    <!-- fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />

    <!-- estilos css -->
    <link rel="stylesheet" href="css/estilos.css?v=1.4.1" />
  </head>
  <body>

    <nav>
      <div class="wrapper">


        <a href="index.html" class="logo"><img class="logo-menu" src="images/assets/quanto-logo-imagotipo.png" alt=""></a>

          <ul class="nav-links">
              
              <li><a class="nav-link" href="productos.html">Productos</a></li>
              <li><a class="nav-link" href="modulos.html">Módulos</a></li>
              <li><a class="nav-link" href="automatizacion.html">Automatización</a></li>
              <li><a class="nav-link" href="regulacion.html">Regulación</a></li>
              <li><a class="nav-link" href="plataforma.html">Plataforma</a></li>
              <li><a class="nav-link" href="nosotros.html">Nosotros</a></li>
              <li><a class="active nav-link" href="contacto.html">Contacto</a></li>
          </ul>


          <!-- <a href="contacto.html" class="btn btn--fill">Solicitar Demo</a> -->

          <div class="menu-ham">
              <img src="images/assets/menu-alt-right.svg" data-src="images/assets/close.svg" alt="menu" class="menu__ham">
          </div>
      </div>
    </nav>

   <main id="main-contacto">
    <div class="container">
      <div class="form">
        <div class="contact-info">
          <h3 class="section-subtitle">Ponte en contacto con Nosotros</h3>
          <p class="text">
            Quieres automatizar tus procesos clave, innovar los servicios financieros que ofreces, o tienes dudas de la funcionalidad o costo ponte en contacto con nosotros y te ayudaremos.
          </p>

          <div class="info">
          
            <div class="information">
             <i class=" info-icn fas fa-envelope"></i>
              <p>contacto@quanto.mx</p>
            </div>
            <div class="information">
              <i class=" info-icn fas fa-phone"></i>
              <p>+52 818 526 4543</p>
            </div>
          </div>

          <!-- <div class="social-media">
            <p>Redes Sociales :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div> -->
        </div>

        

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="/mail.php" method="POST" autocomplete="off">
            <h3 class="title">Solicita tu Demo</h3>
            <div class="input-container">
              <input type="text" name="Nombre" id="name" class="input" />
              <label for="">Nombre</label>
              <span>Nombre</span>
            </div>
            <div class="input-container">
              <input required type="text" name="NombreEmpresa" id="empresa" class="input" />
              <label for="">Empresa</label>
              <span>Empresa</span>
            </div>
            <div class="input-container">
              <input required type="email" name="Correo" id="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input required type="phone" name="Telefono" id="phone" class="input" />
              <label for="">Télefono</label>
              <span>télefono</span>
            </div>
            <div class="input-container textarea">
              <textarea name="Mensaje" class="input"></textarea>
              <label for="">Mensaje</label>
              <span>Mensaje</span>
            </div>
            <input type="submit" value="Enviar" class="btn" />
          </form>
        </div>
      </div>
    </div>


    <?php

        $ip = $_SERVER['REMOTE_ADDR'];
        $captcha = $_POST['g-captcha-response'];
        $secretkey = "";

        $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$$captcha&remoteip=$ip");
        $atributos = json_decode($respuesta, TRUE);

        if(!$atributos['success']) {
          $errors[] = "validar captcha"
        }
        
        if (isset($errors)) {
          if(count($errors) > 0 ) {
            foreach ($errors as $error) {
              echo $error . '<br>';
            }
          }
        }
        
        if($_SESSION['message']){ ?>
            <div class="mensaje" id="mensaje">
                <div class="mensaje-header" >
                    <h3 class="subtitle">Quanto®</h3>
                    <i class="far fa-times-circle mensaje-close" id="close"></i>
                </div>
                <p>¡Tu mensaje ha sido enviado satisfactoriamente!</p>
            </div>
        <?php } ?>

   </main>

    <footer id="footer">
      <div class="container">
          <div class="row">
              

              <div class="footer-col">
                  <h4>Contacto</h4>
                  <ul>

                      <li class="footer-link"><a href="mailto:contacto@quanto.mx">contacto@quanto.mx</a></li>
                      <li class="footer-link"><a href="tel:+528185264543" class="tel">Llama a un asesor</a></li>
                      <li class="footer-link"><a href="avisodeprivacidad.html" >Aviso de privacidad</a></li>
                  </ul>
              </div>

              <div class="footer-col">
                  <h4>Quanto®</h4>
                  <ul>
                      <li class="footer-link"><a href="productos.html">Productos</a></li>
                      <li class="footer-link"><a href="modulos.html">Módulos</a></li>
                      <li class="footer-link"><a href="automatizacion.html">Automatización</a></li>
                      <li class="footer-link"><a href="regulacion.html">Regulación</a></li>
                      <li class="footer-link"><a href="plataforma.html">Plataforma</a></li>
                      <li class="footer-link"><a href="nosotros.html">Nosotros</a></li>
                      <li class="footer-link"><a href="contacto.html">Contacto</a></li>
                  </ul>
              </div>                


              <div class="footer-col">
                  <h4>Síguenos</h4>
                  <div class="social-links">
                      <!-- <a href="#"><i class="fab fa-facebook-f"></i></a> -->
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/company/quanto-mx" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                      
                  </div>
              </div>
          </div>
          
          <h4 class="leyenda t-center"><i class="far fa-copyright"></i>Todos los derechos reservados 2022</h4>

      </div>
    </footer>


    <script src="js/menu.js?v=1.4"></script>
    <script src="js/contact.js"></script>
    <script src="js/script.js"></script>
    <script src="js/scripts.js"></script>

    <script type="text/javascript">
        if(document.getElementById('mensaje')){
            document.getElementById('close').addEventListener('click', function(){
                document.getElementById('mensaje').style.display = 'none';
            });
            setTimeout(function(){
                document.getElementById('mensaje').style.display = 'none';
            }, 3000);
        }
    </script>
  </body>
</html>
