-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 23 nov. 2023 à 07:22
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
-- Base de données : `atelier6_dsi3_g2`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `reference` varchar(255) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `qte` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `promo` tinyint(1) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `libelle`, `prix`, `qte`, `image`, `promo`, `description`) VALUES
('HP102', 'HP I5 16GO', 2200, 30, 'https://picsum.photos/300', 0, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. In illum officia sit accusantium unde aut dolore, expedita quos molestiae! Distinctio libero porro, ab tempore blanditiis culpa officia doloribus facilis commodi?'),
('HP103', 'HP I7 16GO', 2300, 40, 'https://picsum.photos/300', 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. In illum officia sit accusantium unde aut dolore, expedita quos molestiae! Distinctio libero porro, ab tempore blanditiis culpa officia doloribus facilis commodi?');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`reference`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
