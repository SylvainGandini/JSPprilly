<?php
/**
 * Créer par : Crisante Jason et Gandini Sylvain
 * Date : 05.05.2018
 * Time : 09:07
 */

?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    </head>
    <body>
    <div class="container-fluid site-wrapper ">
        <div class="container-fluid site-wrapper">
            <header>
                <?php
                include "header.html";
                ?>
            </header>
        </div>


        <div class="container-fluid site-wrapper">
            <div class="container">
                <?= $contenu ?>
            </div>
        </div>
    </div>
    <div class="container-fluid site-wrapper">
        <?php
        require "footer.html";
        ?>

    </div>

    </body>
    </html>

<?php

?>