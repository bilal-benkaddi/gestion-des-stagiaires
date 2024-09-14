<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="./controllers/ajouter_stg" method="post" class="form-group" onsubmit="return validateForm();">
        <h1>Ajouter un stagiaire</h1>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nom" name="nom">
            <label for="nom">nom :</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="prenom" name="prenom">
            <label for="prenom">prenom :</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email">
            <label for="email">Email :</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="filiere" name="filiere_id">
            <label for="filiere">Filiere ID :</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="dat_naiss" name="dat_naiss">
            <label for="dat_naiss">Date de naissance :</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" name="niveaux">
                <option class="dropdown-item">TS</option>
                <option class="dropdown-item">T</option>
                <option class="dropdown-item">CA</option>
            </select>
            <label for="Niveaux">Niveaux :</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" name="annee">
                <?php for ($i = 19; $i <= 23; $i++) { ?>
                    <option class="dropdown-item">20<?php echo $i; ?></option>
                <?php
                } ?>
            </select>
            <label for="Annee">Annee :</label>
        </div>
        <div class="row justify-content-between">
            <button class="col-md-5 btn btn-primary" type="submit">Ajouter</button>
            <a class="col-md-5 btn btn-primary" href="index.php" style="color: white; text-decoration: none;">
                Annuler
            </a>

        </div>
    </form>
    <script src="./notempty.js"></script>

</body>

</html>