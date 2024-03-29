<?php
require "../../app/Manager.php";
require "../../app/Destination.php";
require "../../app/TourOperator.php";
$bdd = new Manager('127.0.0.1');
$allOperators = $bdd->getAllOperator();
$allDestinations = $bdd->getAllDestination();

?>

<!DOCTYPE html>
<html id='htmlAdmin' lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>ComparOperator/Administrateur</title>
</head>
<?php include('../../partials/headerAdmin.php') ?>

<body class="bodyAdmin">
    <?php include('../../partials/sidebar.php') ?>


    <!-- Second forumaire pour ajouter une destination à un Tour Operateur -->
<div class="contentPage">
    <div class="formAdmin">
        <h3 class="titleForm">Ajouter une nouvelle destination à un Tour Operateur</h3>
        <?php if (isset($_GET['error'])) {
                echo '<span class="text-danger">Impossible d\'ajouter une destination à ce TO, veuillez en choissir un autre !</span>';
            };
            ?>
        <form action="../../layout/addNewDestinationToTOProcessing.php" method="post">
            <div class="form-group">
                <label for="mdb-select md-form">Choissiez une destination</label>
                <select class="mdb-select md-form" id="selection" name='nameDestination'>
                    <option value="" disabled selected>Liste des destinations</option>

                    <?php
                    foreach ($allDestinations as $destination) {

                        //on récupère et affiche le nom de la destination
                        $destination = new Destination($destination);
                        $nameDestination = $destination->getLocation();
                        echo ('<option value="' . $nameDestination . '">' . $nameDestination . '</option>');
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="selectionTO">Choissiez un Tour Operateur</label>
                <select class="mdb-select md-form" id="selectionTO" name="nameTO">
                    <option value="" disabled selected>Liste des Tour Operateurs</option>
                    <?php
                    foreach ($allOperators as $operator) {

                        //on récupère et affiche le nom du Tour Operateur
                        $operator = new TourOperator($operator);
                        $nameOperator = $operator->getName();
                        echo ('<option value="' . $nameOperator . '">' . $nameOperator . '</option>');
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Précisez le prix</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Entrez le prix" required>
            </div>
            <button type="submit" class="btn btn-primary btnForm">Valider</button>
        </form>
    </div>
</div>
</body>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</html>