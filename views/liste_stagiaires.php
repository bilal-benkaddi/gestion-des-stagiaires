<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>liste stagiaires</title>

</head>

<body>
    <a href="index?action=ajouter"><button id="btn" type="submit" class="btn btn-primary">ajouter un
            stagiaire</button></a>
    <center>
        <h1>Liste stagiaires</h1>
    </center>
    <?php if (isset($_GET['msg'])) {
    ?> <h4 style="color: red;" id="Erreur"> <?php echo $_GET['msg']; ?> </h4><?php
                                                                            } ?>

    <table class="table table-hover text-center">

        <thead class="table-secondary">
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">Email</th>
                <th scope="col">filiere</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (count($tab) > 0) {
                foreach ($tab as $row) { ?>
                    <tr class="data-row">
                        <td><?php echo $row['numero'] ?></td>
                        <td><?php echo $row['nom'] ?></td>
                        <td><?php echo $row['prenom'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['libelle'] ?></td>
                        <td class="d-flex justify-content-between">
                            <div class="col-6">
                                <input type="hidden" id="ID" value="<?php echo $row['numero'] ?>" name="id">
                                <input type="hidden" id="filiere_id" value="<?php echo $row['id'] ?>" name="filiere_id">
                                <button type="submit" class="editer" id="editer" value="editer">editer</button>
                            </div>
                            <div class="col-6">
                                <form method="post">
                                    <div class="d-flex justify-content-between">
                                        <input type="hidden" id="ID" value="<?php echo $row['numero'] ?>" name="id">
                                        <button type="submit" formaction="index?action=delet" value="suprimer" name="suprimer"
                                            onclick="return confirm('vous etes sur suprimer ce stagiaire')">suprimer</button>

                                        <button type="submit" formaction="index?action=details" value="details"
                                            name="details">details</button>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php }
            } else { ?>
                <tr>
                    <td colspan="6">
                        <h1>acun stagiaire dans la base de donnes</h1>
                    </td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>

    <div id="editer_form">
    </div>
    <script src="jquery.min.js"></script>
    <script src="./loadcontent.js"></script>
</body>

</html>