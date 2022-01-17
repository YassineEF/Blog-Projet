-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 17 jan. 2022 à 08:08
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `pwd`, `email`) VALUES
(1, 'admin', '$2y$10$4HBVhRZRfRi7FEkhREuEOe3RFHew6uqRkpRw.6F8c0C./AM42b7Di', 'lojasso99@outlook.it'),
(8, '12345678', '$2y$10$SwY/vVOcHXHs6ik0ucAjeOywlQl8CSMkRfFp92lOuVAGD7cuAg1V.', '1234@5678.it'),
(7, 'Yasso', '$2y$10$.r3EyxOICERW3F3ja7zczeZgisqz.V0s0mQs24Zjzd4sjQz4Pp9sO', 'karo@kil.com');

-- --------------------------------------------------------

--
-- Structure de la table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id_brand` int(11) NOT NULL AUTO_INCREMENT,
  `name_brand` varchar(255) NOT NULL,
  PRIMARY KEY (`id_brand`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `brand`
--

INSERT INTO `brand` (`id_brand`, `name_brand`) VALUES
(1, 'Jordan'),
(2, 'Nike'),
(3, 'Adidas');

-- --------------------------------------------------------

--
-- Structure de la table `shoes`
--

DROP TABLE IF EXISTS `shoes`;
CREATE TABLE IF NOT EXISTS `shoes` (
  `id_shoes` int(100) NOT NULL AUTO_INCREMENT,
  `name_shoes` varchar(255) NOT NULL,
  `retail` varchar(255) NOT NULL,
  `resell` varchar(255) NOT NULL,
  `date_relase` date NOT NULL,
  `description` text NOT NULL,
  `brand` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_shoes`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `shoes`
--

INSERT INTO `shoes` (`id_shoes`, `name_shoes`, `retail`, `resell`, `date_relase`, `description`, `brand`, `photo`) VALUES
(1, 'Jordan 1 Dark Mocha', '160€', '595€', '2020-11-19', 'La Air Jordan 1 constitue la toute première paire de la lignée des modèles de Michael Jordan. Dévoilée en 1984 sous l’impulsion du designer Peter C. Moore, son prototype originel n’est autre que la Nike Air Ship.', 1, '.\\img\\j1dm.jfif'),
(13, 'Yeezy Boost 350 ', '220€', '300€', '2022-01-05', 'flkjgsdrejhqeskmigfuhqsdfpomighqdmfkslkjjhglkjdgmlkdqfjsgo_qrenvkdfjcvhgkjuqsbc kuehsfkihqermgofihjqsdlkgfjqsdmklghjsdmlkgihjqsdgmlikhjdfgmo', 3, './img/Y350.jpg'),
(2, 'Jordan 1 Retro High Off-White 1', '180€', '8000€', '2017-11-20', 'La Air Jordan 1 constitue la toute première paire de la lignée des modèles de Michael Jordan. Dévoilée en 1984 sous l’impulsion du designer Peter C. Moore, son prototype originel n’est autre que la Nike Air Ship.', 1, '.\\img\\j1ow.jpg'),
(3, 'nike DUnk low panda', '100€', '200€', '2021-12-14', 'Nike Dunk Low Next Nature \"Panda\" Raffle List. Style: DD1873-102. Sneaker shops, information and full raffle guide', 2, '.\\img\\dlpa.jpg'),
(4, 'Yeezy 700 V1', '300€', '400€', '2017-11-01', 'Une nouvelle vague déferle avec le premier réapprovisionnement de la adidas Yeezy Wave Runner 700, prévu pour le 10 mars 2018.', 3, '.\\img\\Y700V1.jpg'),
(5, 'Dunk Low Freddy Kruger', '100€', '26000€', '2007-01-01', 'This extremely rare Nike SB Dunk Low features Freddy’s signature striped sweater covering its two-tone textile upper, while blood-splatters stain the Beige leather overlays.', 2, '.\\img\\dlfksb.jpg'),
(6, 'Jordan 1 x Travis Scott x Fragment ', '180€', '2500€', '2021-07-29', 'Dotée d\'une empeigne en cuir foulonné blanc et bleu, la Air Jordan 1 High OG SP Fragment Design x Travis Scott Fragment s\'inspire d\'une Jordan 1 Royal sortie en 1985.', 1, '.\\img\\J1TSF.jpg'),
(7, 'Yeezy 700 V3 ArzaretH', '200€', '300€', '2020-08-29', 'La Yeezy 700 V3 Arzareth élargit la palette de couleurs de cette gamme en pleine essor.gfjkl', 3, '.\\img\\Y700V3.jpg'),
(8, 'Yeezy 700 V2 Cream', '240€', '350€', '2021-03-13', 'près une brève pause en 2020, la Yeezy 700 V2 a fait son retour en 2021. adidas et Kanye West proposent la silhouette dans un coloris similaire à la Static 700 V2 datant de 2018.', 3, '.\\img\\Y700V2.jpg'),
(9, 'Jordan 1 High Retro RoyalToe', '170€', '350€', '2020-05-09', 'La Air Jordan 1 High, un incontournable pour tout bon amateur de sneakers! La silhouette de 1985 connaît une nouvelle version reprenant le code couleur de la Air Jordan 1 Retro High Game Royal sortie en 2018.', 1, '.\\img\\J1RB.png'),
(10, 'Dunk Low Ben&Jerry dr', '100€', '1500€', '2020-05-26', 'Cette collaboration savoureuse entre la division skateboarding de l’équipementier et le célèbre fabricant de glaces est dotée d’un look haut en couleurs.', 2, './img/dlbjsb.jpg'),
(11, 'Nike Dunk Low UNC 2', '100€', '350€', '2021-06-24', 'Rappelant les Tar Heels de l université de Caroline du Nord, la Nike Dunk Low UNC se compose d\'une empeigne en cuir blanc, rehaussée de renforts et de Swoosh University Blue.', 2, './img/dlunc.png'),
(15, 'JORDan 1 obsidian', '180€', '600€', '2016-06-16', 'La Air Jordan 1 Obsidian, nouvelle déclinaison s\'affiche avec un coloris mélangeant, blanc cassé, bleu ciel et bleu marine. Contrairement à la version précédente et son coté brillant, le cuir utilisé cette fois ci est plus mat, conservant son aspect traditionnel.Hello ne lis pas lolololo', 1, './img/J1ob.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
