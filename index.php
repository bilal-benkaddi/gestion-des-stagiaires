<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $action = isset($_GET['action']) ? $_GET['action'] : 'liste';
    switch ($action) {
        case 'ajouter':
            require_once( __DIR__ .'./views/ajouter.php');
            break;
        case 'details':
            require_once( __DIR__ .'./controllers/details.php');
            break;
        case 'delet':
            require_once( __DIR__ .'./controllers/delet.php');
            break;
        case 'liste':
            require_once( __DIR__ .'./controllers/liste.php');
            break;
        case 'editer':
            require_once( __DIR__ .'./controllers/editer.php');
            break;
        default:
            require_once( __DIR__ .'./controllers/liste.php');
    }
    ?>
    <script src="jquery.min.js"></script>
    <script src="loadcontent.js"></script>
</body>

</html>