-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 09 nov. 2023 à 08:00
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `qcm`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE IF NOT EXISTS `candidat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `dateNaissance` date NOT NULL,
  `nomJeuneFille` varchar(255) DEFAULT NULL,
  `numSecu` int(11) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `lieuNaissance` varchar(255) NOT NULL,
  `nationnalite` varchar(255) NOT NULL,
  `permisVoiture` varchar(255) NOT NULL,
  `nomUrgence` varchar(255) NOT NULL,
  `telUrgence` int(11) NOT NULL,
  `diplome` varchar(255) NOT NULL,
  `derniereClasse` varchar(255) NOT NULL,
  `niveauEtudes` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `codePostal` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `telFix` int(11) DEFAULT NULL,
  `telMobile` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `situationFamille` varchar(255) NOT NULL,
  `NbEnfants` int(11) NOT NULL,
  `dateInsPoleEmploi` date NOT NULL,
  `idPoleEmploi` varchar(255) NOT NULL,
  `agence` varchar(255) NOT NULL,
  `indemnisation` varchar(255) NOT NULL,
  `nomConseiller` varchar(255) NOT NULL,
  `rsa` varchar(255) NOT NULL,
  `ayantDroit` varchar(255) NOT NULL,
  `idFormation` int(11) DEFAULT NULL,
  `motivation` longtext NOT NULL,
  `qualite` longtext NOT NULL,
  `defaut` longtext NOT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `motifStatut` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idFormation` (`idFormation`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `centres`
--

DROP TABLE IF EXISTS `centres`;
CREATE TABLE IF NOT EXISTS `centres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `idVille` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idVille` (`idVille`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `centres`
--

INSERT INTO `centres` (`id`, `nom`, `adresse`, `idVille`) VALUES
(1, 'AFPA', '1 rue Jacques Callot', 1);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `idCentres` int(11) NOT NULL,
  `DureeTest` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idCentres` (`idCentres`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `nom`, `dateDebut`, `dateFin`, `idCentres`, `DureeTest`) VALUES
(1, 'Web Designer', '2020-09-02', '2021-09-02', 1, 20),
(2, 'Web Developer', '2020-09-02', '2021-09-02', 1, 20);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `reponse` varchar(255) NOT NULL,
  `reponsesTotales` varchar(255) NOT NULL,
  `idFormation` int(11) NOT NULL,
  `ordre` int(11) NOT NULL,
  `dateCreation` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idFormations` (`idFormation`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `question`, `reponse`, `reponsesTotales`, `idFormation`, `ordre`, `dateCreation`) VALUES
(1, 'Qu\'est ce que le HTML ?', 'Un langage informatique', 'Un langage informatique,faux,Un langage informatique', 1, 1, '2020-03-25'),
(2, 'Qu\'est ce que le Web Design ?', 'Une formation de qualite', 'faux,Une formation de qualite,Une formation de qualite', 1, 2, '2020-03-25'),
(3, 'pourquoi le Web Design ?', 'Parce que le design c\'est cool', 'faux,faux,Parce que le design c\'est cool', 2, 1, '2020-03-25'),
(4, 'Pourquoi le HTML ?', 'Pour mettre le contenu de la page', 'Pour mettre le contenu de la page,Pour mettre le contenu de la page,faux', 2, 2, '2020-03-25');

-- --------------------------------------------------------

--
-- Structure de la table `reponsecandidat`
--

DROP TABLE IF EXISTS `reponsecandidat`;
CREATE TABLE IF NOT EXISTS `reponsecandidat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCandidat` int(11) NOT NULL,
  `idQuestion` int(11) NOT NULL,
  `reponses` varchar(255) NOT NULL,
  `dateReponse` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idQuestion` (`idQuestion`),
  KEY `idCandidat` (`idCandidat`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reponsecandidat`
--

INSERT INTO `reponsecandidat` (`id`, `idCandidat`, `idQuestion`, `reponses`, `dateReponse`) VALUES
(1, 0, 3, 'Parce que le design c\'est cool', '2023-11-09'),
(2, 0, 4, 'Pour mettre le contenu de la page,Pour mettre le contenu de la page', '2023-11-09'),
(3, 0, 1, 'Un langage informatique,Un langage informatique', '2023-11-09'),
(4, 0, 2, 'Une formation de qualite,Une formation de qualite', '2023-11-09');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `codePostal` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `nom`, `codePostal`) VALUES
(1, 'Forbach', 57600);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
