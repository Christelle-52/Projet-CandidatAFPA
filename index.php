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
    <img src="bande1.png" class="ml-5 mb-5">
    <br>
    <form action="indexReq.php" method="POST" class="mx-5">
        <h2 class="mb-5">Mes informations personnelles</h2>
        <!-- PARTIE IDENTITE -->
        <h3>Identité</h3><br>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control" required>
            </div>
            <div class="form-group col-md-2"></div>
            <div class="form-group col-md-5">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" class="form-control" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="dateNaissance">Date de naissance</label>
                <input type="date" name="dateNaissance" class="form-control" required>
            </div>
            <div class="form-group col-md-2"></div>
            <div class="form-group col-md-5">
                <label for="nomJeuneFille">Nom de jeune fille</label>
                <input type="text" name="nomJeuneFille" class="form-control" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="numSecu">Numéro de Sécurité Sociale</label>
                <input type="number" name="numSecu" class="form-control" required>
            </div>
            <div class="form-group col-md-2"></div>
            <div class="form-group col-md-5">
                <label for="sexe">Sexe</label>
                <select name="sexe" class="form-control">
                    <option value="M">Masculin</option>
                    <option value="F">Feminin</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="lieuNaissance">Lieu de naissance</label>
                <input type="text" class="form-control" name="lieuNaissance" required>
            </div>
            <div class="form-group col-md-2">
            </div>
            <div class="form-group col-md-5">
                <label for="nationalite">Nationnalité</label>
                <input type="text" class="form-control" name="nationalite" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" class="form-control" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="codePostal">Code postal</label>
                <input type="number" class="form-control" name="codePostal" required>
            </div>
            <div class="form-group col-md-2">
            </div>
            <div class="form-group col-md-5">
                <label for="ville">Ville</label>
                <input type="text" class="form-control" name="ville" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="telFix">Numéro de téléphone fixe</label>
                <input type="number" class="form-control" name="telFix" required>
            </div>
            <div class="form-group col-md-2">
            </div>
            <div class="form-group col-md-5">
                <label for="telMobile">Numéro de téléphone mobile</label>
                <input type="number" class="form-control" name="telMobile" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="permisVoiture">Possedez-vous le permis de conduire ?</label>
                <select name="permisVoiture" class="form-control">
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>
            </div>
        </div>

        <!-- PARTIE SITUATION FAMILIALE -->
        <h3 class="mt-5">Situation familiale</h3><br>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="situationFamille">Situation familiale</label>
                <input type="text" class="form-control" name="situationFamille" required>
            </div>
            <div class="form-group col-md-2">
            </div>
            <div class="form-group col-md-5">
                <label for="nbEnfants">Nombre d'enfants</label>
                <input type="number" class="form-control" name="nbEnfants" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="nomUrgence">Personne à contacter en cas d'urgence</label>
                <input type="text" class="form-control" name="nomUrgence" required>
            </div>
            <div class="form-group col-md-2">
            </div>
            <div class="form-group col-md-5">
                <label for="telUrgence">Numéro de la personne à contacter en cas d'urgence</label>
                <input type="number" class="form-control" name="telUrgence" required>
            </div>
        </div>

        <!-- PARTIE NIVEAU D'ÉTUDES -->
        <h3 class="mt-5">Niveau d'études</h3><br>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="diplome">Diplôme(s)</label>
                <input type="text" class="form-control" name="diplome" required>
            </div>
            <div class="form-group col-md-2">
            </div>
            <div class="form-group col-md-5">
                <label for="derniereClasse">Dernière classe fréquentée</label>
                <input type="text" class="form-control" name="derniereClasse" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="niveauEtudes">Niveau d'études</label>
                <input type="text" class="form-control" name="niveauEtudes" required>
            </div>
        </div>

        <!-- PARTIE INFORMATIONS POLE EMPLOI ET AIDES -->
        <h3 class="mt-5">Informations Pole Emploi et aides</h3><br>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="dateInsPoleEmploi">Date d'inscription à Pole Emploi</label>
                <input type="date" class="form-control" name="dateInsPoleEmploi" required>
            </div>
            <div class="form-group col-md-2">
            </div>
            <div class="form-group col-md-5">
                <label for="idPoleEmploi">Identifiant Pole Emploi</label>
                <input type="text" class="form-control" name="idPoleEmploi" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="agence">Lieu de votre agence Pole Emploi</label>
                <input type="text" class="form-control" name="agence" required>
            </div>
            <div class="form-group col-md-2">
            </div>
            <div class="form-group col-md-5">
                <label for="indemnisation">Avez vous droit à des indemnisations ?</label>
                <select name="indemnisation" class="form-control">
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="nomConseiller">Nom de votre conseiller Pole Emploi</label>
                <input type="text" class="form-control" name="nomConseiller" required>
            </div>
            <div class="form-group col-md-2">
            </div>
            <div class="form-group col-md-5">
                <label for="rsa">Touchez vous le RSA ?</label>
                <select name="rsa" class="form-control">
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="ayantDroit">Avez vous droit au RSA ?</label>
                <select name="ayantDroit" class="form-control">
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>
            </div>
        </div>

        <!-- PARTIE A PROPOS DE LA FORMATION -->
        <h3 class="mt-5">A propos de la formation que vous voulez choisir :</h3><br>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="motivation">Quelles sont vos motivations pour rejoindre cette formation ?</label>
                <textarea class="form-control" name="motivation" rows="5" required></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="qualite">Quelles sont vos qualités ?</label>
                <textarea class="form-control" name="qualite" rows="2" required></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="defaut">Quels sont vos défauts ?</label>
                <textarea class="form-control" name="defaut" rows="2" required></textarea>
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
    