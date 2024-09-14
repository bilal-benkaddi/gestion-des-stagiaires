<?php
require_once('./dbcontext/dbcontext.php');
    require_once('./Modeles/stagiaires.class.php');
    $tab = stagiaire::getusers();
    require_once('./views/liste_stagiaires.php');
?>
