<?php
    if(isset($_POST['id'])){
        require_once('./dbcontext/dbcontext.php');
        $id=htmlentities($_POST['id']);
        require_once('./Modeles/stagiaires.class.php');
        stagiaire::Deleteuser($id);
        header('location:./index.php'); 
    }
?>