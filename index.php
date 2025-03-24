<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>KA-CHAOW</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="logo" href="index.php"><img src="images/logo.png">KA-CHAOW</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="galeria.php">Autos</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="celebs.php">Patrocinador</a>
                  </li>
               </ul>
               <?php
                  session_start();

                  if (isset($_SESSION['name'])) {
                     // Si el usuario ha iniciado sesión, oculta el botón de inicio de sesión.
                     $hide_login_button = true;
                  } else {
                     $hide_login_button = false;
                  }
               ?>

               <button name="boton" id="send"<?php if ($hide_login_button) { echo ' style="display: none;"'; } ?>>
                  <div id="hide_login_button" class="search_icon">
                     <a href="Registro/Registro.php">
                        <img src="images/user-icon.png">
                        <span class="padding_left_15">login</span>
                     </a>
                  </div>
               </button>
               <?php 
                        
                        if(isset($_SESSION['name'])) {
                           echo "<h1>".$_SESSION['name']."</h1>";
                           
                        } else {
                           echo '<script language="javascript">alert("NO HAS INICADO SESION")</script>';                           
                        }
               ?> 
               <?php
                 

                  if (isset($_SESSION['name'])) {
                     // Si el usuario ha iniciado sesión, muestra el botón de cerrar sesión.
                     $show_logout_button = true;
                  } else {
                     // Si el usuario no ha iniciado sesión, oculta el botón de cerrar sesión.
                     $show_logout_button = false;
                  }
               ?>

                  <div>
                     <?php
                        if ($show_logout_button) {
                           // Muestra el botón de cerrar sesión solo si $show_logout_button es true.
                           echo '<button><a href="logout.php">Cerrar sesión</a></button>';
                        }
                     ?>
                  </div>
            </div>

         </nav>
      </div>
      <!-- header section end -->
      <!-- banner section end -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="banner_taital">KA CHAOW<br>LA MEJOR RENTA DE AUTOS DE TODO RADIADOR SPRINGS </div>
                  <p class="banner_text">Conduce como Rayo McQueen en nuestras rentas de autos</p>
                  <div class="see_bt"><a href="#">Fiiiaaaauuuuu</a></div>
               </div>
               <div class="col-md-6">
                  <div class="play_icon"><a href="#"><img src="images/play-icon.png"></a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- arrival section end -->
      <!-- movies section start -->
      <div class="movies_section layout_padding">
         <div class="container">
            <div class="movies_menu">
               <ul>
                  <li class="active"><a href="#">Galeria</a></li>
               </ul>
            </div>
            <div class="movies_section_2 layout_padding">
               <h2 class="letest_text">Ultimos Autos</h2>
               <div class="movies_main">
                  <div class="iamge_movies_main">
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="images/img-3.jpg" class="image" style="width:100%">
                           <?php
                              
                              if(isset($_SESSION['name'])) { // Comprobar si la sesión está iniciada
                                 // Si está iniciada, mostrar el botón "Rentar" con el enlace a la página de renta
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt"><a href="tv.php">Rentar</a></div>';
                                 echo '</div>';
                              } else {
                                 // Si no está iniciada, mostrar el botón "Rentar" desactivado o redirigir al usuario a la página de inicio de sesión
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt disabled">Rentar</div>';
                                 echo '</div>';
                              }
                           ?>
                        </div>
                        <h1 class="code_text">EL rasho Mcqueen</h1>
                        <p class="there_text">cuchauuu</p>
                        <div class="star_icon">
                           <ul>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="images/img-4.jpg" class="image" style="width:100%">
                           <?php
                              
                              if(isset($_SESSION['name'])) { // Comprobar si la sesión está iniciada
                                 // Si está iniciada, mostrar el botón "Rentar" con el enlace a la página de renta
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt"><a href="tv.php">Rentar</a></div>';
                                 echo '</div>';
                              } else {
                                 // Si no está iniciada, mostrar el botón "Rentar" desactivado o redirigir al usuario a la página de inicio de sesión
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt disabled">Rentar</div>';
                                 echo '</div>';
                              }
                           ?>
                        </div>
                        <h1 class="code_text">Franchesco Virgolini</h1>
                        <p class="there_text">La maquina mas veloz de totte italie fiiaaaauuuu</p>
                        <div class="star_icon">
                           <ul>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="images/img-5.jpg" class="image" style="width:100%">
                           <?php
                              
                              if(isset($_SESSION['name'])) { // Comprobar si la sesión está iniciada
                                 // Si está iniciada, mostrar el botón "Rentar" con el enlace a la página de renta
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt"><a href="tv.php">Rentar</a></div>';
                                 echo '</div>';
                              } else {
                                 // Si no está iniciada, mostrar el botón "Rentar" desactivado o redirigir al usuario a la página de inicio de sesión
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt disabled">Rentar</div>';
                                 echo '</div>';
                              }
                           ?>
                        </div>
                        <h1 class="code_text">Crocs Mcqueen</h1>
                        <p class="there_text">LLegaras rapido a tu destino sin necesidad de contaminar</p>
                        <div class="star_icon">
                           <ul>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="images/img-6.jpg" class="image" style="width:100%">
                           <?php
                              
                              if(isset($_SESSION['name'])) { // Comprobar si la sesión está iniciada
                                 // Si está iniciada, mostrar el botón "Rentar" con el enlace a la página de renta
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt"><a href="tv.php">Rentar</a></div>';
                                 echo '</div>';
                              } else {
                                 // Si no está iniciada, mostrar el botón "Rentar" desactivado o redirigir al usuario a la página de inicio de sesión
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt disabled">Rentar</div>';
                                 echo '</div>';
                              }
                           ?>
                        </div>
                        <h1 class="code_text">Mate</h1>
                        <p class="there_text">simplemente mate</p>
                        <div class="star_icon">
                           <ul>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="images/img-7.jpg" class="image" style="width:100%">
                           <?php
                              
                              if(isset($_SESSION['name'])) { // Comprobar si la sesión está iniciada
                                 // Si está iniciada, mostrar el botón "Rentar" con el enlace a la página de renta
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt"><a href="tv.php">Rentar</a></div>';
                                 echo '</div>';
                              } else {
                                 // Si no está iniciada, mostrar el botón "Rentar" desactivado o redirigir al usuario a la página de inicio de sesión
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt disabled">Rentar</div>';
                                 echo '</div>';
                              }
                           ?>
                        </div>
                        <h1 class="code_text">El auto peppa pig</h1>
                        <p class="there_text">Para que llegues escurriendo flow a donde sea</p>
                        <div class="star_icon">
                           <ul>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="movies_section_2 layout_padding">
               <h2 class="letest_text">Mas Autos</h2>
               <div class="movies_main">
                  <div class="iamge_movies_main">
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="images/img-8.jpg" class="image" style="width:100%">
                           <?php
                              
                              if(isset($_SESSION['name'])) { // Comprobar si la sesión está iniciada
                                 // Si está iniciada, mostrar el botón "Rentar" con el enlace a la página de renta
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt"><a href="tv.php">Rentar</a></div>';
                                 echo '</div>';
                              } else {
                                 // Si no está iniciada, mostrar el botón "Rentar" desactivado o redirigir al usuario a la página de inicio de sesión
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt disabled">Rentar</div>';
                                 echo '</div>';
                              }
                           ?>
                        </div>
                        <h1 class="code_text">Pinky Pie</h1>
                        <p class="there_text">aparecio en my little ponny</p>
                        <div class="star_icon">
                           <ul>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="images/img-9.jpg" class="image" style="width:100%">
                           <?php
                              
                              if(isset($_SESSION['name'])) { // Comprobar si la sesión está iniciada
                                 // Si está iniciada, mostrar el botón "Rentar" con el enlace a la página de renta
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt"><a href="tv.php">Rentar</a></div>';
                                 echo '</div>';
                              } else {
                                 // Si no está iniciada, mostrar el botón "Rentar" desactivado o redirigir al usuario a la página de inicio de sesión
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt disabled">Rentar</div>';
                                 echo '</div>';
                              }
                           ?>
                        </div>
                        <h1 class="code_text">Auto fifa</h1>
                        <p class="there_text">Para jugar un fulbo con los panas donde sea</p>
                        <div class="star_icon">
                           <ul>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="images/img-10.jpeg" class="image" style="width:100%">
                           <?php
                              
                              if(isset($_SESSION['name'])) { // Comprobar si la sesión está iniciada
                                 // Si está iniciada, mostrar el botón "Rentar" con el enlace a la página de renta
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt"><a href="tv.php">Rentar</a></div>';
                                 echo '</div>';
                              } else {
                                 // Si no está iniciada, mostrar el botón "Rentar" desactivado o redirigir al usuario a la página de inicio de sesión
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt disabled">Rentar</div>';
                                 echo '</div>';
                              }
                           ?>
                        </div>
                        <h1 class="code_text">Bugatti del bicho</h1>
                        <p class="there_text">Siuu</p>
                        <div class="star_icon">
                           <ul>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="images/img-11.jpg" class="image" style="width:100%">
                           <?php
                              
                              if(isset($_SESSION['name'])) { // Comprobar si la sesión está iniciada
                                 // Si está iniciada, mostrar el botón "Rentar" con el enlace a la página de renta
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt"><a href="tv.php">Rentar</a></div>';
                                 echo '</div>';
                              } else {
                                 // Si no está iniciada, mostrar el botón "Rentar" desactivado o redirigir al usuario a la página de inicio de sesión
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt disabled">Rentar</div>';
                                 echo '</div>';
                              }
                           ?>
                        </div>
                        <h1 class="code_text">lamborghini del papa</h1>
                        <p class="there_text">Para llegar con bendicion</p>
                        <div class="star_icon">
                           <ul>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="images/img-12.jpg" class="image" style="width:100%">
                           <?php
                              
                              if(isset($_SESSION['name'])) { // Comprobar si la sesión está iniciada
                                 // Si está iniciada, mostrar el botón "Rentar" con el enlace a la página de renta
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt"><a href="tv.php">Rentar</a></div>';
                                 echo '</div>';
                              } else {
                                 // Si no está iniciada, mostrar el botón "Rentar" desactivado o redirigir al usuario a la página de inicio de sesión
                                 echo '<div class="middle">';
                                 echo '<div class="playnow_bt disabled">Rentar</div>';
                                 echo '</div>';
                              }
                           ?>
                        </div>
                        <h1 class="code_text">Audi R6 de Cj</h1>
                        <p class="there_text">What's up, bro?</p>
                        <div class="star_icon">
                           <ul>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                              <li><a href="#"><img src="images/star-icon.png"></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
      <!-- newsletter section end -->
      <!-- cooming  section start -->
      <div class="cooming_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="image_17">
                     <div class="image_17"><img src="images/img-17.jpg"></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <h1 class="number_text">01</h1>
                  <h1 class="Cooming_soon_taital">Patrocinador</h1>
                  <p class="long_text_1">Esta empresa esta finaciada por Sherk Smith</p>
               </div>
            </div>
         </div>
      </div>
      <!-- cooming  section end -->
      <!-- footer  section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_menu">
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="galeria.php">Autos</a></li>
                  <li><a href="tv.php">Renta</a></li>
                  <li><a href="celebs.php">Patrocinador</a></li>
               </ul>
            </div>
            <div class="social_icon">
               <ul>
                  <li><a href="#"><img src="images/fb-icon.png"></a></li>
                  <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                  <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                  <li><a href="#"><img src="images/instagram-icon.png"></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer  section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="copyright_text">Copyright 2023 All Right Reserved By <a>Isabela Rincon y Andres Felipe Rincon</a></div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         $('#datepicker').datepicker({
             uiLibrary: 'bootstrap4'
         });
      </script>
      
   </body>
</html>