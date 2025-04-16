<?php

$dbh = "mysql:host=localhost;dbname=formationAfpa";
$user = 'root';
$pass = '';

try {
	// On se connecte à MySQL
	$pdo = new PDO($dbh, $user, $pass);
  $pdo->exec('SET CHARACTER SET utf8');
}
catch (PDOException $e) {
  print "Erreur !". $e->getMessage();
        die();
}
?>
