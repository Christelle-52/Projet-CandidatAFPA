<?php
session_start();
include('pdo.php');

if(!isset($_SESSION['ordreQuestion'])){
    $_SESSION['ordreQuestion']=1;
}

if($_SESSION['ordreQuestion'] == 1){
    $stmt = $pdo->prepare("SELECT COUNT(*) as nbrQuestions FROM question WHERE idFormation = :idFormation");
    $stmt->bindValue(":idFormation", $_SESSION['idFormation'], PDO::PARAM_INT);
    $stmt->execute();
    $nbrQuestions = $stmt->fetch();
    $stmt->closeCursor();

    $_SESSION['nbrQuestions']=$nbrQuestions['nbrQuestions'];
}

$stmt = $pdo->prepare("SELECT * FROM question WHERE idFormation = :idFormation AND ordre = :ordre");
$stmt->bindValue(":idFormation", $_SESSION['idFormation'], PDO::PARAM_INT);
$stmt->bindValue(":ordre", $_SESSION['ordreQuestion'], PDO::PARAM_INT);
$stmt->execute();
$maQuestion = $stmt->fetch();
$stmt->closeCursor();

$reponses = explode(',', $maQuestion['reponsesTotales']);

$i = 1;


if($_SESSION['ordreQuestion']>$_SESSION['nbrQuestions']){
    header("Location: resultat.php");
}

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
    <?php
        include('header.php');
    ?>
    <br>
    <img src="bande2.png" class="ml-5 mb-5">
    <br>

    <form action="questionReq.php" method="POST" class="mx-5">
        <h2 class="mb-5">Veuillez répondre aux questions suivantes, plusieurs choix sont possibles</h2>
        <!-- PARTIE IDENTITE -->
        <h3>Question <?= $_SESSION['ordreQuestion'] ?>/<?= $_SESSION['nbrQuestions'] ?></h3><br>
        <div class="form-row">
            <div class="form-group col-md-12">
                <h4 class="mb-5"><i><?= $maQuestion['question']; ?></i></h4>
                <?php foreach($reponses as $reponse){ ?>
                <input type="checkbox" class="form-check_input p-1 mr-2" name="monInput<?= $i ?>" value="<?= $i ?>">
                <label class="form-check-label" for="monInput<?= $i ?>"><?= $reponse ?></label><br><br>
                <?php $i++; } ?>
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
    