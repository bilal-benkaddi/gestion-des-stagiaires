<?php
    if(isset($_POST['nom'])&& isset($_POST['prenom'])&& isset($_POST['email'])&& isset($_POST['annee'])&& isset($_POST['niveaux'])&& isset($_POST['filiere_id'])&& isset($_POST['dat_naiss'])){
        require_once('../views/ajouter.php');
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $anne = htmlspecialchars($_POST['annee']);
        $niveaux = htmlspecialchars($_POST['niveaux']);
        $filiere_id = htmlspecialchars($_POST['filiere_id']);
        $date_naiss = htmlspecialchars($_POST['dat_naiss']);
        require_once('../dbcontext/dbcontext.php');
        require_once('../Modeles/stagiaires.class.php');
        stagiaire::setstagiaire($nom,$prenom,$email,$anne,$niveaux,$filiere_id,$date_naiss);;
        header('location:../index.php');
    }
?>