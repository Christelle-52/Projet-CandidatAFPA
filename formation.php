<?php
    session_start();
    include('pdo.php');
    include('header.php');

    $stmt = $pdo->prepare('SELECT * FROM formation');
    $stmt -> execute();
    $formations = $stmt -> fetchAll();
?>
    
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Bienvenue sur le TD que je dois faire</title>
    </head>
    <body>
    <br>
    <img src="bande2.png" class="ml-5 mb-5">
    <br>
    <form action="formationReq.php" method="POST" class="mx-5">
        <h2 class="mb-5">Pour quelle formation postulez-vous ?</h2>
        <!-- PARTIE CHOIX FORMATION -->
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="idFormation">Intitulé de la formation</label>
                <select name="idFormation" class="form-control" required>
                    <option value="">Choisir une formation</option>
                    <?php foreach($formations as $res){ ?>
                    <option value="<?= $res['id'] ?>"><?= $res['nom'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-row mt-5">
            <div class="form-group col-md-12">
                <input type="submit" class="suivant" value="SUIVANT">
            </div>
        </div>
    </form>

    <br><br><br><br>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
    