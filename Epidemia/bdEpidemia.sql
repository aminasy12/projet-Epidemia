-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 mars 2023 à 13:58
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `virus`
--

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `idPays` int(20) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `population` int(6) NOT NULL,
  `listezone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`idPays`, `nom`, `population`, `listezone`) VALUES
(1, 'Senegal', 100000, 'fchg'),
(2, 'Senegal', 100000, 'fchg'),
(3, 'Senegal', 100000, 'fchg'),
(4, 'Senegal', 100000, 'fchg'),
(7, 'Senegal', 1986, 'mpc'),
(8, '', 2147483647, ''),
(9, '', 2147483647, '');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `idPersonne` int(10) NOT NULL,
  `nomP` varchar(20) NOT NULL,
  `prenomP` varchar(30) NOT NULL,
  `numTel` int(20) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `résultat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`idPersonne`, `nomP`, `prenomP`, `numTel`, `adresse`, `sexe`, `résultat`) VALUES
(44, 'DIACK', 'Mariama', 764576740, 'keur massar sud', 'F', 'symptômatique'),
(45, 'DIACK', 'Mariama', 764576740, 'keur massar sud', 'F', 'symptômatique'),
(46, 'sylla', 'diarra', 2147483647, 'mermoz', 'F', 'négative'),
(47, 'sylla', 'mame diarra', 2147483647, 'mermoz', 'F', 'positive');

-- --------------------------------------------------------

--
-- Structure de la table `pointsureveiller`
--

CREATE TABLE `pointsureveiller` (
  `idPoint` int(10) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pointsureveiller`
--

INSERT INTO `pointsureveiller` (`idPoint`, `nom`) VALUES
(1, 'yoff'),
(2, 'yoff');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`) VALUES
(1, 'root', 'passer');

-- --------------------------------------------------------

--
-- Structure de la table `zones`
--

CREATE TABLE `zones` (
  `idZone` int(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `nombreps` varchar(200) NOT NULL,
  `nombrepp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `zones`
--

INSERT INTO `zones` (`idZone`, `nom`, `nombreps`, `nombrepp`) VALUES
(1, 'Dakar', '12', '12'),
(2, 'Dakar', '12', '2'),
(3, '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`idPays`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`idPersonne`);

--
-- Index pour la table `pointsureveiller`
--
ALTER TABLE `pointsureveiller`
  ADD PRIMARY KEY (`idPoint`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`idZone`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `idPays` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `idPersonne` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `pointsureveiller`
--
ALTER TABLE `pointsureveiller`
  MODIFY `idPoint` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `zones`
--
ALTER TABLE `zones`
  MODIFY `idZone` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
