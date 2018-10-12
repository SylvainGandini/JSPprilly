<?php
/**
 * Created by PhpStorm.
 * User: Gandini.Sylvain
 * Date: 05.02.2018
 * Time: 10:05
 * vue_Home.php : vue pour la page d'accueil
 */
// ouvre la mémoire tampon
ob_start();
$titre = "Accueil";
?>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <div class="heading wordwrapfix">
                <h3>Nous vous souhaitons la bienvenue </h3>
            </div>
            <!-- row -->
            <div class="row">
                <a><img src="Img/Slider/1.jpg"></a>
                <!-- Product main img -->
                <!--<div class="col-md-12 col-md-push-2">
                    <div class="fotorama" data-nav="thumbs" data-keyboard="true">
                        <a  href="Img/Slider/1.jpg"><img src="" class="col-md-12"></a>
                        <a href="Img/Slider/2.jpg"><img src=""></a>
                        <a href="Img/Slider/3.jpg"><img src=""></a>
                    </div>
                </div>
                <!-- /Product main img -->
                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                </div>
                <!-- /Product thumb imgs -->

            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <p></p>
    </div>
</div>


<?php
$contenu = ob_get_clean(); // Stocke la page dans la variable
require "Include/gabarit.php";
?>