-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 16 oct. 2022 à 18:05
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `host_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `email`, `phone_number`, `role`, `host_id`, `customer_id`) VALUES
(1, 'armand.decormeille@gmail.com', '0666666666', '1', 1, 1),
(2, 'allan.rondeau@gmail.com', '0777777777', '0', 2, 2),
(3, 'ewan.quioc@gmail.com', '0677667766', '1', 3, 3),
(4, 'fetih.ammar@gmail.com', '0676767676', '1', 4, 4),
(5, 'mickael.idasiak@gmail.com', '0645673421', '0', 5, 5),
(6, 'jeff.martins@gmail.com', '0789094312', '1', 1, 6),
(7, 'enzo.nga@gmail.com', '0111111111', '0', 5, 7),
(8, 'theo.grave@gmail.com', '0234567890', '1', 2, 8),
(9, 'loris.daca@gmail.com', '0222222222', '0', 5, 9),
(10, 'tristan.ducrocq@gmail.com', '0232233223', '1', 10, 10);

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id`, `code`, `name`, `note`) VALUES
(1, 'code1', 'decormeille', 'Customer 1'),
(2, 'code2', 'rondeau', 'customer2'),
(3, 'code3', 'quioc', 'customer3'),
(4, 'code4', 'ammar', 'customer4'),
(5, 'code5', 'idasiak', 'customer5'),
(6, 'code6', 'martins', 'customer6'),
(7, 'code7', 'nga', 'customer7'),
(8, 'code8', 'grave', 'customer8'),
(9, 'code9', 'daca', 'customer9'),
(10, 'code10', 'ducrocq', 'customer10');

-- --------------------------------------------------------

--
-- Structure de la table `environment`
--

CREATE TABLE `environment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ip_adress` varchar(255) NOT NULL,
  `ssh_port` int(6) NOT NULL,
  `ssh_username` varchar(255) NOT NULL,
  `phpmyadmin_link` varchar(255) NOT NULL,
  `ip_restriction` tinyint(1) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `environment`
--

INSERT INTO `environment` (`id`, `name`, `link`, `ip_adress`, `ssh_port`, `ssh_username`, `phpmyadmin_link`, `ip_restriction`, `project_id`) VALUES
(1, 'env1', 'linkenv1.env1', '148.14.22.46', 16428, 'env1ssh', 'env1phpmyadmin', 1, 1),
(0, 'env2', 'linkenv2.env2', '155.152.148.8', 18211, 'env2ssh', 'env2phpmyadmin', 0, 3),
(0, 'env2', 'linkenv2.env2', '252.95.53.231', 19802, 'env3ssh', 'env3phpmyadmin', 1, 2),
(0, 'env4', 'linkenv4.env4', '99.42.132.9', 39968, 'env4ssh', 'env4phpmyadmin', 0, 4),
(0, 'env5', 'linkenv5.env5', '125.81.27.196', 9909, 'env5ssh', 'env5phpmyadmin', 0, 5),
(0, 'env6', 'linkenv6.env6', '237.106.187.230', 6682, 'env6ssh', 'env6phpmyadmin', 1, 6),
(0, 'env7', 'linkenv7.env7', '246.119.249.222', 25779, 'env7ssh', 'env7phpmyadmin', 0, 7),
(0, 'env8', 'linkenv8.env8', '219.86.215.178', 53771, 'env8ssh', 'env8phpmyadmin', 0, 8),
(0, 'env9', 'linkenv9.env9', '219.86.215.178', 32640, 'env9ssh', 'env9phpmyadmin', 1, 9),
(0, 'env10', 'linkenv10.env10', '152.3.241.106', 38152, 'env10ssh', 'env10phpmyadmin', 1, 10);

-- --------------------------------------------------------

--
-- Structure de la table `host`
--

CREATE TABLE `host` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `host`
--

INSERT INTO `host` (`id`, `code`, `name`, `notes`) VALUES
(1, 'codehost1', 'nodevo', 'notes host 1'),
(2, 'codehost2', 'ovh', 'notes host 2'),
(3, 'codehost3', 'goDaddy', 'notes host 3'),
(4, 'codehost4', 'Ionos', 'notes host 4'),
(5, 'codehost5', 'Hostinger', 'notes host 5'),
(6, 'codehost6', 'planetHoster', 'notes host 6'),
(7, 'codehost7', 'o2Switch', 'notes host 7'),
(8, 'codehost8', 'infomaniak', 'notes host 8'),
(9, 'codehost9', 'LWS', 'notes host 9'),
(10, 'codehost10', 'Ex2', 'notes host 10');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `lastpass_folder` varchar(255) NOT NULL,
  `link_mock_ups` varchar(255) NOT NULL,
  `manage_server` tinyint(1) NOT NULL,
  `notes` text NOT NULL,
  `host_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `name`, `code`, `lastpass_folder`, `link_mock_ups`, `manage_server`, `notes`, `host_id`, `customer_id`) VALUES
(1, 'Amazon', 'amazon_project', 'src/amazon', 'mockups/amazon', 0, 'notes project 1', 1, 1),
(2, 'Youtube', 'youtube_project', 'src/youtube', 'mockups/youtube', 1, 'notes project 2', 2, 6),
(3, 'Facebook', 'facebook_project', 'src/facebook', 'mockups/facebook', 1, 'notes project 3', 3, 3),
(4, 'Instagram', 'instragram_project', 'src/instagram', 'mockups/instagram', 0, 'notes project 4', 4, 9),
(5, 'portfolio', 'portoflio_project', 'src/portfolio', 'mockups/portfolio', 0, 'notes project 5', 5, 5),
(6, 'ecoledirecte', 'ecoledirecte_project', 'src/ecoledirecte', 'mockups/ecoledirecte', 1, 'notes project 6', 7, 1),
(7, 'leboncoin', 'leboncoin_project', 'src/leboncoin', 'mockups/leboncoin', 0, 'notes project 7', 7, 7),
(8, 'netflix', 'netflix_project', 'src/netflix', 'mockups/netflix', 1, 'notes project 8', 6, 5),
(9, 'dashlane', 'dahslane_project', 'src/dahslane', 'mockups/dashlane', 0, 'notes project 9', 9, 9),
(10, 'twitter', 'twitter_project', 'src/twitter', 'mockups/twitter', 1, 'notes project 10', 7, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `host_id` (`host_id`);

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`code`);

--
-- Index pour la table `environment`
--
ALTER TABLE `environment`
  ADD KEY `project_id` (`project_id`);

--
-- Index pour la table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`code`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`code`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `host_id` (`host_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `host`
--
ALTER TABLE `host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `contact_ibfk_3` FOREIGN KEY (`host_id`) REFERENCES `host` (`id`);

--
-- Contraintes pour la table `environment`
--
ALTER TABLE `environment`
  ADD CONSTRAINT `environment_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Contraintes pour la table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `project_ibfk_3` FOREIGN KEY (`host_id`) REFERENCES `host` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
