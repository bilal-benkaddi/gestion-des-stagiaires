<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <title>Details Stagiaire N°: <?php echo $stg->getNumero() ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
            a {
                color: aliceblue;
            }
        </style>
</head>    
<body>
<div class="container">
  <div class="row">
  <h1>Informations sur stagiaire N° <?php echo $stg->getNumero() ; ?> : </h1>
    <div class="col-md-8">
      <h2>Stagiaire Details :</h2>
      <p><strong>Numero:</strong> <?php echo $stg->getNumero() ; ?></p>
      <p><strong>Nom:</strong> <?php echo $stg->getNom() ; ?></p>
      <p><strong>Prénom:</strong> <?php echo $stg->getPrenom() ; ?></p>
      <p><strong>Email:</strong> <?php echo $stg->getEmail() ; ?></p>
      <p><strong>Date de naissance : </strong> <?php echo $stg->getDatenaiss() ; ?></p>
      <p><strong>Année:</strong> <?php echo $stg->getAnnee() ; ?></p>
      <p><strong>Filiere:</strong> <?php echo $fil->getLibelle() ; ?></p>
      <p><strong>Niveau:</strong> <?php echo $stg->getNiveaux(); ?></p>
    </div>
    <div class="col-md-4">
      <h2>Filiere Details :</h2>
      <p><strong>Libellé:</strong> <?php echo $fil->getLibelle(); ?></p>
      <p><strong>Année de Formation:</strong> <?php echo $fil->getAnneeFormation(); ?></p>
      <p><strong>Total MH:</strong> <?php echo $fil->getTotalMH(); ?> h</p>
    </div>
    <div class="row">
    <h2>Modules Details :</h2>
      <?php $i=0; foreach ($modules as $item){ ?>
        <div class="col-3">
        <h5>Modules <?php echo ++$i;?> :</h5>
        <p>Designation:<?php echo $item->getDesignation(); ?></p>
        <p>MH: <?php echo $item->getMH(); ?> h</p>
      </div>
      <?php } ?>
</div>
  </div>
</div>
<div class="row justify-content-center">
<a class="col-6" href="index.php" style="color: white; text-decoration: none;">
    <button id="btn" class="btn btn-primary mt-3">
        Retour
    </button>
</a>
</div>
</body>
</html>
