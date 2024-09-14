<?php
require_once('../Modeles/stagiaires.class.php');
require_once('../Modeles/filiere.class.php');
require_once('../dbcontext/dbcontext.php');
$stg = Stagiaire::getuser(htmlentities($_GET['id']));
$fil = Filiere::getFiliere(htmlentities($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <form id="form-group" action="./controllers/editer" method="post" class="form-group"
        onsubmit="return validateForm();">
        <h1>Editer stagiaire N°= <?php echo $_GET['id']; ?></h1>
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="hidden" name="filiere_id" value="<?php echo $_GET['filiere_id']; ?>">
        </div>
        <div class="row">
            <div class="col-md-6 form-floating mb-3">
                <input value="<?php echo $stg->getNom(); ?>" type="text" class="form-control" id="nom" name="nom">
                <label for="nom">nom :</label>
            </div>
            <div class="col-md-6 form-floating mb-3">
                <input value="<?php echo $stg->getPrenom(); ?>" type="text" class="form-control" id="prenom"
                    name="prenom">
                <label for="prenom">prenom :</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-floating mb-3">
                <input value="<?php echo $stg->getEmail(); ?>" type="email" class="form-control" id="email"
                    name="email">
                <label for="email">Email :</label>
            </div>
            <div class="col-md-6 form-floating mb-3">
                <input type="text" class="form-control" value="<?php echo $fil->getLibelle() ?>" id="filiere"
                    name="filiere">
                <label for="filiere">Filiere :</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-floating mb-3">
                <input value="<?php echo $stg->getDatenaiss(); ?>" type="date" class="form-control" id="dat_naiss"
                    name="dat_naiss">
                <label for="dat_naiss">Date de naissance :</label>
            </div>
            <div class="col-md-6 form-floating mb-3">
                <select class="form-select" name="niveaux">
                    <option class="dropdown-item">TS</option>
                    <option class="dropdown-item">T</option>
                    <option class="dropdown-item">CA</option>
                </select>
                <label for="Niveaux">Niveaux :</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-floating mb-3">
                <select class="form-select" name="annee">
                    <?php for ($i = 19; $i <= 23; $i++) { ?>
                        <option class="dropdown-item">20<?php echo $i; ?></option>
                    <?php
                    } ?>
                </select>
                <label for="Annee">Annee :</label>
            </div>
            <div class="col justify-content-center">
                <button type="submit" class="col-md-12 btn btn-primary">Editer</button>
            </div>
        </div>
    </form>
    <div>
        <a class="row justify-content-center" href="index.php"><button
                class="col-md-10 btn btn-primary">Anuller</button></a>
    </div>
    <script src="./notempty.js"></script>
    <script src="./jquery.min.js"></script>
    <script>
        // $(document).ready(function () {
        //     $('#form-group').submit(function (event) {
        //         event.preventDefault();

        //         var formData = $(this).serialize();
        //         var id = $('input[name="id"]').val();
        //         $.ajax({
        //             url: "./controllers/editer.php",
        //             type: 'POST',
        //             data: formData + '&id_user=' + id,
        //             dataType: 'json',
        //             success: function (response) {
        //                 if (response) {
        //                     var userData = response;
        //                     var keyValuePairs = formData.split("&");
        //                     var newRow = $("<tr>");

        //                     for (var i = 0; i < 6; i++) {

        //                         if(i==1){continue};
        //                         var pair = keyValuePairs[i].split("=");
        //                         var key = decodeURIComponent(pair[0]);
        //                         var value = decodeURIComponent(pair[1]);
        //                         var td = document.createElement("td");
        //                         td.textContent = value;
        //                         newRow.append(td);
        //                         if(i==0){var id = value}
        //                     }
        //                     var td2 = `
        //                         <td class="d-flex justify-content-between">
        //                             <div class="col-6">
        //                                 <button style="display: none;"><a href="editer.php"></a></button>
        //                                 <input type="hidden" id="ID" value="` + id + `" name="id">
        //                                 <input type="hidden" id="filiere_id" value="` + id + `" name="filiere_id">
        //                                 <button type="submit" class="editer" id="editer" value="editer">editer</button>
        //                             </div>
        //                             <div class="col-6">
        //                                 <form method="post">
        //                                     <div class="d-flex justify-content-between">
        //                                         <input type="hidden" id="ID" value="` + id + `" name="id">
        //                                         <button type="submit" formaction="delet.php" value="supprimer" name="supprimer" onclick="return confirm('Vous êtes sur le point de supprimer stagiaire N°=` + id + ` .')">Supprimer</button>
        //                                         <button type="submit" formaction="details.php" value="details" name="details">Détails</button>
        //                                     </div>
        //                                 </form>
        //                             </div>
        //                         </td>
        //                     `;

        //                     newRow.append(td2);
        //                     console.log(response);
        //                     var trr = $('#btn_sub').closest('.data-row');
        //                     trr.replaceWith(newRow);
        //                 } else {
        //                     console.log('Error updating user data.');
        //                 }
        //             },
        //             error: function () {
        //                 console.log('Error updating user data.');
        //             }
        //         });
        //     });
        // });
    </script>

</body>

</html>