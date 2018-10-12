<?php
/**
 * Created by PhpStorm.
 * User: benoit.meylan
 * Date: 05.02.2018
 * Time: 09:14
 * Index.php : page de triage des actions reçues dans l'URL
 */
session_start();
require "Controleur/controleur.php";

try
{
    if (isset($_GET['action']))
    {
        $action = $_GET['action'];
        //Sélection de l'action passée par l'URL
        switch ($action)
        {
            case 'vue_accueil': accueil();break;
            default:
                throw new Exception("Action non valide !");
        }
    }
    else
        accueil();
}
catch (Exception $e)
{
    erreur($e->getMessage());
}