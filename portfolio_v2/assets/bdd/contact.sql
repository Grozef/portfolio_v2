-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 23 juin 2023 à 15:24
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `descript` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `mail`, `descript`) VALUES
(1, 'Steve', 'steve@youpimail.com', 'Salut François'),
(2, 'William', 'willy@youpimail.com', 'Je suis une légende à Hearthstone'),
(3, 'Shaaban', 'shaababaan@youpimail.com', 'Salut, veux tu des leçons de coaching personnel ?'),
(5, 'Moha', 'moha@gpt.com', 'Salut, connais-tu ChatGPT ?'),
(8, 'Steve', 'steve@protonmail.com', 'attention à l\'antisémitisme'),
(9, 'Steve', 'steve@protonmail.com', 'ainsi qu\'aux préjugés'),
(10, 'Steve', 'steve@protonmail.com', 'et aux voitures'),
(11, 'Steve', 'steve@protonmail.com', 'et aux vélos.'),
(14, 'Steve', '', 'Je n\'ai pas de mail.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
