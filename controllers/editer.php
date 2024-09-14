<?php
    require_once('../dbcontext/dbcontext.php');
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['id'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['id'])){
            $id=$_POST['id'];
            $filiere_id = $_POST['filiere_id'];
            require_once('../Modeles/stagiaires.class.php');
            require_once('../Modeles/filiere.class.php');
            require_once('../Modeles/module.class.php');
            stagiaire::Updateuser(htmlentities($_POST['nom']),htmlentities($_POST['prenom']),htmlentities($_POST['email']),htmlentities($_POST['annee']),htmlentities($_POST['niveaux']),htmlentities($_POST['dat_naiss']),htmlentities($id));
            Filiere::updateFiliere(htmlentities($filiere_id),htmlentities($_POST['filiere']));
            header('location:../index.php');
        }else{
            header('location:index.php?msg=Erreur : Tous les champs sont obligatoires pour modifier le stagiaire.');
        }
    } 
    require_once('../views/editer.php')
?>