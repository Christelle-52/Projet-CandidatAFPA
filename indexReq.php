<?php
    session_start();
    include('pdo.php');

    $stmt = $pdo->prepare('SELECT * from candidat WHERE email = :email');
    $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $stmt->execute();
    $candidat=$stmt->fetch();

    if(!$candidat){
        $req = $pdo->prepare("INSERT INTO candidat(nom, prenom, dateNaissance, nomJeuneFille,
        numSecu, sexe, lieuNaissance, nationalite, permisVoiture, nomUrgence, telUrgence, 
        diplome, derniereClasse, niveauEtudes, adresse, codePostal, ville, telFix, telMobile,
        email, situationFamille, nbEnfants, dateInsPoleEmploi, idPoleEmploi, agence, indemnisation,
        nomConseiller, rsa, ayantDroit, motivation, qualite, defaut)
        VALUES(:nom, :prenom, :dateNaissance, :nomJeuneFille,
        :numSecu, :sexe, :lieuNaissance, :nationalite, :permisVoiture, :nomUrgence, :telUrgence, 
        :diplome, :derniereClasse, :niveauEtudes, :adresse, :codePostal, :ville, :telFix, :telMobile,
        :email, :situationFamille, :nbEnfants, :dateInsPoleEmploi, :idPoleEmploi, :agence, :indemnisation,
        :nomConseiller, :rsa, :ayantDroit, :motivation, :qualite, :defaut)", 
        array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        $req->execute(
            array(
            ':nom'=>$_POST['nom'],
            ':prenom'=>$_POST['prenom'],
			':dateNaissance'=>$_POST['dateNaissance'],	
			':nomJeuneFille'=>$_POST['nomJeuneFille'],
			':numSecu'=>(int)$_POST['numSecu'],
			':sexe'=>$_POST['sexe'],
			':lieuNaissance'=>$_POST['lieuNaissance'],	
			':nationalite'=>$_POST['nationalite'],
			':permisVoiture'=>$_POST['permisVoiture'],
			':nomUrgence'=>$_POST['nomUrgence'],
			':telUrgence'=>(int)$_POST['telUrgence'],
			':diplome'=>$_POST['diplome'],
			':derniereClasse'=>$_POST['derniereClasse'],
			':niveauEtudes'=>$_POST['niveauEtudes'],
			':adresse'=>$_POST['adresse'],
			':codePostal'=>(int)$_POST['codePostal'],
			':ville'=>$_POST['ville'],
			':telFix'=>(int)$_POST['telFix'],
			':telMobile'=>(int)$_POST['telMobile'],
			':email'=>$_POST['email'],
			':situationFamille'=>$_POST['situationFamille'],
			':nbEnfants'=>(int)$_POST['nbEnfants'],
			':dateInsPoleEmploi'=>$_POST['dateInsPoleEmploi'],
			':idPoleEmploi'=>$_POST['idPoleEmploi'],
			':agence'=>$_POST['agence'],
			':indemnisation'=>$_POST['indemnisation'],
			':nomConseiller'=>$_POST['nomConseiller'],
			':rsa'=>$_POST['rsa'],
			':ayantDroit'=>$_POST['ayantDroit'],
			':motivation'=>$_POST['motivation'],
			':qualite'=>$_POST['qualite'],
			':defaut'=>$_POST['defaut']
            )
        );
        $_SESSION['idCandidat']=$pdo->lastInsertId();
        $req->closeCursor();

        header('Location:formation.php');
    }else{
        header('Location:index.php?error=email');
    }

?>