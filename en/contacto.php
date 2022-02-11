<?php
if ( !session_id() ) {
  session_start();
}
?>


<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="../css/estilos.css" />
  </head>
  <body>

    <nav>
      <div class="wrapper">


        <a href="index.html" class="logo"><img class="logo-menu" src="../images/assets/quanto-logo-imagotipo.png" alt=""></a>

          <ul class="nav-links">
              
              <li><a class="nav-link" href="productos.html">Products</a></li>
              <li><a class="nav-link" href="modulos.html">Modules</a></li>
              <li><a class="nav-link" href="automatizacion.html">Automatization</a></li>
              <li><a class="nav-link" href="regulacion.html">Regulation</a></li>
              <li><a class="nav-link" href="plataforma.html">Platform</a></li>
              <li><a class="nav-link" href="nosotros.html">About Us</a></li>
              <li><a class="nav-link active" href="contacto.html">Contact</a></li>
          </ul>

          <form action="/en/mail.php" method="POST" autocomplete="off">
                <div class="selectBox">
                    <div class="select" id="select">
                        <div class="contenido-select" id="contenidoSelect">
                            <h2 class="titulo">English</h2>
                        </div>
                        <i class="fas fa-angle-down arrow"></i>
                    </div>

                    <div class="idiomas" id="idiomas">

                        <a href="#" class="option">
                            <div class="contenido-opcion">
                                <h2 class="titulo">Español</h2>
                            </div> 
                        </a>
                        <a href="#" class="option">
                            <div class="contenido-opcion">
                                <h2 class="titulo">English</h2>
                            </div>
                            
                        </a>
                    </div>
                </div>
            </form>
          <!-- <a href="contacto.html" class="btn btn--fill">Solicitar Demo</a> -->

          <div class="menu-ham">
              <img src="../images/assets/menu-alt-right.svg" data-src="../images/assets/close.svg" alt="menu" class="menu__ham">
          </div>
      </div>
    </nav>

   <main id="main-contacto">
    <div class="container">
      <div class="form">
        <div class="contact-info">
          <h3 class="section-subtitle">Get in contact with us</h3>
          <p class="text">You want to automate your key processes, innovate the financial services you offer, or have doubts about the functionality or cost, contact us and we will help you.</p>

          <div class="info">
          
            <div class="information">
             <i class=" info-icn fas fa-envelope"></i>
              <p>contact@quanto.mx</p>
            </div>
            <div class="information">
              <i class=" info-icn fas fa-phone"></i>
              <p>+52 814-161-2470</p>
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

          <form action="/en/mail.php" method="POST" autocomplete="off">
            <h3 class="title">Request your Demo</h3>
            <div class="input-container">
              <input type="text" name="Nombre" id="name" class="input" />
              <label for="">Name</label>
              <span>Name</span>
            </div>
            <div class="input-container">
              <input required type="text" name="NombreEmpresa" id="empresa" class="input" />
              <label for="">Company</label>
              <span>Company</span>
            </div>
            <div class="input-container">
              <input required type="email" name="Correo" id="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input required type="phone" name="Telefono" id="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="Mensaje" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>


    <?php
        if ( ! session_id() ) {
            session_start();
        }
        if($_SESSION['message']){ ?>
            <div class="mensaje" id="mensaje">
                <div class="mensaje-header" >
                    <h3 class="subtitle">Quanto®</h3>
                    <i class="far fa-times-circle mensaje-close" id="close"></i>
                </div>
                <p>Your message has been successfully sent!</p>
            </div>
        <?php } ?>

   </main>

    <footer id="footer">
      <div class="container">
          <div class="row">
              

              <div class="footer-col">
                  <h4>Contact</h4>
                  <ul>

                      <li class="footer-link"><a href="mailto:contacto@quanto.mx">contacto@quanto.mx</a></li>
                      <li class="footer-link"><a href="tel:+528141612470" class="tel">Call an Advisor</a></li>
                  </ul>
              </div>

              <div class="footer-col">
                  <h4>Quanto®</h4>
                  <ul>
                      <li class="footer-link"><a href="productos.html">Products</a></li>
                      <li class="footer-link"><a href="modulos.html">Modules</a></li>
                      <li class="footer-link"><a href="automatizacion.html">Automatization</a></li>
                      <li class="footer-link"><a href="regulacion.html">Regulation</a></li>
                      <li class="footer-link"><a href="plataforma.html">Platform</a></li>
                      <li class="footer-link"><a href="nosotros.html">About Us</a></li>
                      <li class="footer-link"><a href="contacto.html">Contact</a></li>
                  </ul>
              </div>                


              <div class="footer-col">
                  <h4>Follow Us</h4>
                  <div class="social-links">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      
                  </div>
              </div>
          </div>
          
          <h4 class="leyenda t-center"><i class="far fa-copyright"></i>All rights reserved 2022</h4>

      </div>
    </footer>

    
    <script src="../js/menu.js"></script>
    <script src="../js/contact.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/scripts.js"></script>
    
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
