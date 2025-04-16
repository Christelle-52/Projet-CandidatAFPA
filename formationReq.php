<?php
    session_start();
    include('pdo.php');

    if(!empty($_POST)){
        $stmt=$pdo->prepare('UPDATE candidat SET idFormation = :idFormation WHERE id = :idCandidat');
        $stmt->bindValue(':idFormation', $_POST['idFormation'], PDO::PARAM_INT);
        $stmt->bindValue(':idCandidat', $_SESSION['idCandidat'], PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();

        $_SESSION['idFormation'] = $_POST['idFormation'];

        header('location:question.php');
    }
    else{
        header('Location:formation.php?formation=error');
    }
?>