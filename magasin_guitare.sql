-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 25 fév. 2022 à 08:33
-- Version du serveur : 5.7.37
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `magasin_guitare`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `genre`) VALUES
(3, 'electro-acoustique'),
(14, 'electrique'),
(15, 'acoustique'),
(16, 'basse');

-- --------------------------------------------------------

--
-- Structure de la table `fabricant`
--

CREATE TABLE `fabricant` (
  `id_fabricant` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fabricant`
--

INSERT INTO `fabricant` (`id_fabricant`, `nom`, `nationality`, `created_at`) VALUES
(1, 'Fender', 'Espagnol', 2000),
(2, 'Gibson', 'British', 2010);

-- --------------------------------------------------------

--
-- Structure de la table `guitare`
--

CREATE TABLE `guitare` (
  `guitare_id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `fabricant` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `annee` int(11) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `nombre_corde` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `guitare`
--

INSERT INTO `guitare` (`guitare_id`, `unique_id`, `fabricant`, `modele`, `annee`, `prix`, `category`, `nombre_corde`) VALUES
(23, 1645518551, 'GIBSON', 'HJL89', 1500, '850', 'acoustique', 6),
(25, 1645518589, 'Valerio_music', 'KLO85', 1956, '764', 'basse', 6),
(26, 1645519916, 'Mistubichi', 'KLO85', 2010, '859', 'electrique', 5);

-- --------------------------------------------------------

--
-- Structure de la table `guitare_v2`
--

CREATE TABLE `guitare_v2` (
  `id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `fabricant_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `modele` varchar(50) CHARACTER SET utf8 NOT NULL,
  `annee` int(4) NOT NULL,
  `prix` int(11) NOT NULL,
  `nombre_corde` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `guitare_v2`
--

INSERT INTO `guitare_v2` (`id`, `unique_id`, `fabricant_id`, `category_id`, `modele`, `annee`, `prix`, `nombre_corde`) VALUES
(1, 1645534387, 1, 3, 'Xk78', 2010, 864, 5),
(5, 1645712030, 2, 3, 'CLECH3000', 2010, 850, 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fabricant`
--
ALTER TABLE `fabricant`
  ADD PRIMARY KEY (`id_fabricant`);

--
-- Index pour la table `guitare`
--
ALTER TABLE `guitare`
  ADD PRIMARY KEY (`guitare_id`);

--
-- Index pour la table `guitare_v2`
--
ALTER TABLE `guitare_v2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `fabricant_id` (`fabricant_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `fabricant`
--
ALTER TABLE `fabricant`
  MODIFY `id_fabricant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `guitare`
--
ALTER TABLE `guitare`
  MODIFY `guitare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `guitare_v2`
--
ALTER TABLE `guitare_v2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `guitare_v2`
--
ALTER TABLE `guitare_v2`
  ADD CONSTRAINT `guitare_v2_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `guitare_v2_ibfk_2` FOREIGN KEY (`fabricant_id`) REFERENCES `fabricant` (`id_fabricant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
