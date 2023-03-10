<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celtic La Riche Basket - CLRB</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
	<link rel="icon" href="./image/logo_small.png" type="image/png">
</head>
<body>

<?php 
    require "php_log/configuration.php";
    //HEADER
    require "php_page_web/header.php";
    //NAVBAR
    require "php_page_web/navbar.php"; 
?>

    <div id="sticky-button">
        <a href="php_log/form_login.php">MON COMPTE</a>
    </div>

<!--header section start -->
<div class="header_section">
         <!--banner section start -->
         <div class="banner_section layout_padding">
            <div class="container-fluid">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <h4 class="banner_taital">Bienvenue au</h4>
                           <h1 class="banner_taital_1">Celtic La Riche Basket</h1>
                           <div class="book_bt"><a href="#">Découvrir</a></div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <h4 class="banner_taital">Bienvenue au</h4>
                           <h1 class="banner_taital_1">Celtic La Riche Basket</h1>
                           <div class="book_bt"><a href="#">Découvrir</a></div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <h4 class="banner_taital">Bienvenue au</h4>
                           <h1 class="banner_taital_1">Celtic La Riche Basket</h1>
                           <div class="book_bt"><a href="#">Découvrir</a></div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <h4 class="banner_taital">Bienvenue au</h4>
                           <h1 class="banner_taital_1">Celtic La Riche Basket</h1>
                           <div class="book_bt"><a href="#">Découvrir</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--banner section end -->
      </div>
      <!--header section end -->

      
      <!-- <div class="basket-ball" onscroll="myFunction" onmousedown="on_mouse_down_ball(event)"><div class="line2"></div><div class="line1"></div></div> -->
    
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="about_taital"><img src="img/ball.png"> <span>A propos du club</span></h1>
                  <p class="about_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque inventore repudiandae accusamus soluta culpa non? Asperiores impedit vero unde sequi!</p>
                  <p class="about_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor id soluta ea labore commodi nisi eaque, in magni voluptas ipsam.</p>
                  <div class="read_bt"><a href="#">Read More</a></div>
               </div>
               <div class="col-md-6">
                  <div><img src="img/no-image.png" class="image_1"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- game section start -->
      <div class="game_section layout_padding">
         <div class="container">
            <h1 class="game_taital"><img src="img/ball.png"> <span>Actualité</span></h1>
            <p class="game_text">Planning Prévisionnel Saison 2022-2023</p>
            <div class="game_section_2 layout_padding">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="image_2">
                        <h1 class="number_text">01</h1>
                        <h1 class="game_text_1">Actualité 1</h1>
                        <!-- <p class="many_text">There are many variations of passages of Lorem Ipsum available, but the </p> -->
                     </div>
                     <div class="playnow_bt active"><a href="#">En savoir plus</a></div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="image_2">
                        <h1 class="number_text">02</h1>
                        <h1 class="game_text_1">Actualité 2</h1>
                        <!-- <p class="many_text">There are many variations of passages of Lorem Ipsum available, but the </p> -->
                     </div>
                     <div class="playnow_bt active"><a href="#">En savoir plus</a></div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="image_2">
                        <h1 class="number_text">03</h1>
                        <h1 class="game_text_1">Actualité 3</h1>
                        <!-- <p class="many_text">There are many variations of passages of Lorem Ipsum available, but the </p> -->
                     </div>
                     <div class="playnow_bt active"><a href="#">En savoir plus</a></div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="image_2">
                        <h1 class="number_text">04</h1>
                        <h1 class="game_text_1">Actualité 4</h1>
                        <!-- <p class="many_text">There are many variations of passages of Lorem Ipsum available, but the </p> -->
                     </div>
                     <div class="playnow_bt active"><a href="#">En savoir plus</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- game section end -->
      <!-- play section start -->
      <div class="play_section layout_padding">
         <div class="container">
            <h1 class="play_taital"><img src="img/ball.png"> <span>Comment s'inscrire ?</span></h1>
            <p class="play_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi iure nisi dolor illo similique nemo minima reprehenderit nihil, vel aliquam. Incidunt alias molestias provident excepturi.</p>
            <div class="game_section_2 layout_padding">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_section">
                        <img src="img/no-image.png" class="image_6">
                     </div>
                     <h2 class="register_text">Document nécessaire</h2>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_section">
                        <img src="img/no-image.png" class="image_6">
                     </div>
                     <h2 class="register_text">Prix</h2>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_section">
                        <img src="img/no-image.png" class="image_6">
                     </div>
                     <h2 class="register_text">Catégorie</h2>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_section">
                        <img src="img/no-image.png" class="image_6">
                     </div>
                     <h2 class="register_text">Règles</h2>
                  </div>
               </div>
               <div class="playnow_bt"><a href="#">En savoir plus</a></div>
            </div>
         </div>
      </div>
      <!-- game section end -->
      <!-- casino section start -->
      <!-- <div class="casino_section layout_padding">
         <div class="container">
            <h1 class="casino_taital"><img src="img/ball.png"> <span>Our Casino Price</span></h1>
            <p class="game_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
            <div class="casino_section_2 layout_padding">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="box_main">
                        <h4 class="basic_text">Basic Plan</h4>
                        <h1 class="date_text"><span class="font_size_20">$</span><span class="font_size_40">15</span> /Month</h1>
                        <p class="lorem_text">Lorem Ipsum available, but the majority</p>
                     </div>
                     <div class="buynow_bt"><a href="#">Buy Now</a></div>
                  </div>
                  <div class="col-sm-4">
                     <div class="box_main">
                        <h4 class="basic_text">Standra Plan</h4>
                        <h1 class="date_text"><span class="font_size_20">$</span><span class="font_size_40">25</span> /Month</h1>
                        <p class="lorem_text">Lorem Ipsum available, but the majority</p>
                     </div>
                     <div class="buynow_bt"><a href="#">Buy Now</a></div>
                  </div>
                  <div class="col-sm-4">
                     <div class="box_main">
                        <h4 class="basic_text">Premium Plan</h4>
                        <h1 class="date_text"><span class="font_size_20">$</span><span class="font_size_40">35</span> /Month</h1>
                        <p class="lorem_text">Lorem Ipsum available, but the majority</p>
                     </div>
                     <div class="buynow_bt"><a href="#">Buy Now</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- casino section end -->
      <!-- client section start -->
      <!-- <div class="client_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="casino_taital"><img src="img/ball.png"> <span>What Is Says Our Customer</span></h1>
                     <div class="image_7"><img src="img/img-6.png"></div>
                     <h4 class="jone_text">Jone Mark</h4>
                     <p class="ipsum_text"><span class="padding_right_20"><img src="img/left-quote.png"> </span> Lorem ipsum dolor sit amet, <span class="padding_left_20"><img src="image/right-quote.png"></span></p>
                     <p class="ipsum_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse </p>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="casino_taital"><img src="img/ball.png"> <span>What Is Says Our Customer</span></h1>
                     <div class="image_7"><img src="img/img-6.png"></div>
                     <h4 class="jone_text">Jone Mark</h4>
                     <p class="ipsum_text"><span class="padding_right_20"><img src="img/left-quote.png"> </span> Lorem ipsum dolor sit amet, <span class="padding_left_20"><img src="image/right-quote.png"></span></p>
                     <p class="ipsum_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse </p>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="casino_taital"><img src="img/ball.png"> <span>What Is Says Our Customer</span></h1>
                     <div class="image_7"><img src="img/img-6.png"></div>
                     <h4 class="jone_text">Jone Mark</h4>
                     <p class="ipsum_text"><span class="padding_right_20"><img src="img/left-quote.png"> </span> Lorem ipsum dolor sit amet, <span class="padding_left_20"><img src="image/right-quote.png"></span></p>
                     <p class="ipsum_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse </p>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div> -->
      <!-- client section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="touch_taital"><img src="img/ball.png"> <span>Laisser un avis / Nous contacter</span></h1>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="email_text">
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Nom" name="Email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Numéro de Téléphone" name="Email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Mail" name="Email">
                        </div>
                        <div class="form-group">
                           <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="Massage"></textarea>
                        </div>
                        <div class="send_btn"><a href="#">Envoyer</a></div>
                     </div>
                  </div>
                  <!-- <div class="col-md-6">
                     <div class="map_main">
                        <div class="map-responsive">
                           <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                        </div>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      

<?php require "php_page_web/footer.php"; ?>

    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/1492515fda.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>
</html>