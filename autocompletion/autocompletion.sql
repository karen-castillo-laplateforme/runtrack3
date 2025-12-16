-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 16 déc. 2025 à 15:36
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autocompletion`
--

-- --------------------------------------------------------

--
-- Structure de la table `pokemons`
--

DROP TABLE IF EXISTS `pokemons`;
CREATE TABLE IF NOT EXISTS `pokemons` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pokemons`
--

INSERT INTO `pokemons` (`id`, `nom`, `type`, `description`) VALUES
(1, 'Bulbizarre', 'Plante/Poison', 'Il a une étrange graine plantée sur son dos.'),
(2, 'Herbizarre', 'Plante/Poison', 'Quand le bourgeon sur son dos éclot, il laisse place à une fleur.'),
(3, 'Florizarre', 'Plante/Poison', 'Sa plante donne une grosse fleur quand elle absorbe les rayons du soleil.'),
(4, 'Salamèche', 'Feu', 'La flamme au bout de sa queue indique son humeur.'),
(5, 'Reptincel', 'Feu', 'Il lacère ses ennemis avec ses griffes acérées.'),
(6, 'Dracaufeu', 'Feu/Vol', 'Il crache du feu assez chaud pour faire fondre des rochers.'),
(7, 'Carapuce', 'Eau', 'Il se cache dans sa carapace pour se protéger.'),
(8, 'Carabaffe', 'Eau', 'Il est considéré comme un symbole de longévité.'),
(9, 'Tortank', 'Eau', 'Les canons sur son dos crachent de l eau à haute pression.'),
(10, 'Chenipan', 'Insecte', 'Ses petites pattes sont munies de ventouses.'),
(11, 'Chrysacier', 'Insecte', 'Son corps est dur comme de l acier.'),
(12, 'Papilusion', 'Insecte/Vol', 'Il adore le nectar des fleurs.'),
(13, 'Aspicot', 'Insecte/Poison', 'Son dard venimeux est très dangereux.'),
(14, 'Coconfort', 'Insecte/Poison', 'Il se cache sous les feuilles pour éviter les prédateurs.'),
(15, 'Dardargnan', 'Insecte/Poison', 'Il possède trois dards venimeux.'),
(16, 'Roucool', 'Normal/Vol', 'Il est très docile et n aime pas se battre.'),
(17, 'Roucoups', 'Normal/Vol', 'Il survole son territoire pour repérer ses proies.'),
(18, 'Roucarnage', 'Normal/Vol', 'Il vole à une vitesse de Mach 2.'),
(19, 'Rattata', 'Normal', 'Ses dents poussent constamment.'),
(20, 'Rattatac', 'Normal', 'Ses moustaches lui servent à garder l équilibre.'),
(21, 'Pikachu', 'Électrik', 'Il stocke de l électricité dans ses joues.'),
(22, 'Raichu', 'Électrik', 'Sa longue queue lui sert de prise de terre.'),
(23, 'Sabelette', 'Sol', 'Il creuse des terriers profonds.'),
(24, 'Sablaireau', 'Sol', 'Il se met en boule pour attaquer.'),
(25, 'Melofée', 'Fée', 'On dit qu il vient de la lune.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
