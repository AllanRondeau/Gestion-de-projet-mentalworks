-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 09 oct. 2022 à 15:42
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

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
(1, 'email1@gmail.com', '0666666666', '1', 1, 1),
(2, 'email2@gmail.com', '0777777777', '0', 2, 2),
(3, 'email3@gmail.com', '0677667766', '1', 3, 3),
(4, 'email4@gmail.com', '0676767676', '1', 4, 4),
(5, 'email5@gmail.com', '0645673421', '0', 5, 5),
(6, 'email6@gmail.com', '0789094312', '1', 1, 3),
(7, 'email7@gmail.com', '0111111111', '0', 5, 5),
(8, 'email8@gmail.com', '0234567890', '1', 2, 1),
(9, 'email9@gmail.com', '0222222222', '0', 5, 7),
(10, 'email10@gmail.com', '0232233223', '1', 10, 10);

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
(1, 'code1', 'Dupont', 'Customer 1'),
(2, 'code2', 'cust2', 'customer2'),
(3, 'code3', 'cust3', 'customer3'),
(4, 'code4', 'cust4', 'customer4'),
(5, 'code5', 'cust5', 'customer5'),
(6, 'code6', 'cust6', 'customer6'),
(7, 'code7', 'cust7', 'customer7'),
(8, 'code8', 'cust8', 'customer8'),
(9, 'code9', 'cust9', 'customer9'),
(10, 'code10', 'cust10', 'customer10');

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
(1, 'codehost1', 'Dubois', 'notes host 1'),
(2, 'codehost2', 'Rondeau', 'notes host 2'),
(3, 'codehost3', 'Decormeille', 'notes host 3'),
(4, 'codehost4', 'Quioc', 'notes host 4'),
(5, 'codehost5', 'Martins', 'notes host 5'),
(6, 'codehost6', 'Idasiak', 'notes host 6'),
(7, 'codehost7', 'Ammar', 'notes host 7'),
(8, 'codehost8', 'Daniel', 'notes host 8'),
(9, 'codehost9', 'Test', 'notes host 9'),
(10, 'codehost10', 'Host10', 'notes host 10');

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
(1, 'project1', 'codeProject1', 'lpf1', 'lmu1', 0, 'notes project 1', 1, 1),
(2, 'project2', 'codeProject2', 'lpf2', 'lmu2', 1, 'notes project 2', 2, 6),
(3, 'project3', 'codeProject3', 'lpf3', 'lmu3', 1, 'notes project 3', 3, 3),
(4, 'project4', 'codeProject4', 'lpf4', 'lmu4', 0, 'notes project 4', 4, 9),
(5, 'project5', 'codeProject5', 'lpf5', 'lmu5', 0, 'notes project 5', 5, 5),
(6, 'project6', 'codeProject6', 'lpf6', 'lmu6', 1, 'notes project 6', 7, 1),
(7, 'project7', 'codeProject7', 'lpf7', 'lmu7', 0, 'notes project 7', 7, 7),
(8, 'project8', 'codeProject8', 'lpf8', 'lmu8', 1, 'notes project 8', 6, 5),
(9, 'project9', 'codeProject9', 'lpf9', 'lmu9', 0, 'notes project 9', 9, 9),
(10, 'project10', 'codeProject10', 'lpf10', 'lmu10', 1, 'notes project 10', 7, 4);

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
