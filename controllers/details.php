<?php
  require_once('./dbcontext/dbcontext.php');
  $id =htmlspecialchars($_POST['id']);
  require_once('./Modeles/stagiaires.class.php');
  require_once('./Modeles/filiere.class.php');
  require_once('./Modeles/module.class.php');
  $stg = stagiaire::getuser($id);
  $fil = Filiere::getFiliere($id);
  $modules = Module:: getModules($id);
  require_once('./views/details.php')
?>