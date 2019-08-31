-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 19 août 2019 à 14:48
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `afpa0519_store_exp`
--

-- --------------------------------------------------------

--
-- Structure de la table `st_addresses`
--

DROP TABLE IF EXISTS `st_addresses`;
CREATE TABLE IF NOT EXISTS `st_addresses` (
  `add_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_customers_cus_id` int(11) NOT NULL,
  `add_address1` varchar(100) NOT NULL,
  `add_address2` varchar(100) DEFAULT NULL,
  `add_zipcode` varchar(5) NOT NULL,
  `add_city` varchar(45) NOT NULL,
  PRIMARY KEY (`add_id`),
  KEY `fk_st_addresses_st_customers1_idx` (`st_customers_cus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `st_caddies`
--

DROP TABLE IF EXISTS `st_caddies`;
CREATE TABLE IF NOT EXISTS `st_caddies` (
  `st_customers_cus_id` int(11) NOT NULL,
  `st_products_pro_id` int(11) NOT NULL,
  `cad_qt` int(11) NOT NULL,
  `cad_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`st_customers_cus_id`,`st_products_pro_id`),
  KEY `fk_st_customers_has_st_products_st_products1_idx` (`st_products_pro_id`),
  KEY `fk_st_customers_has_st_products_st_customers_idx` (`st_customers_cus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `st_categories`
--

DROP TABLE IF EXISTS `st_categories`;
CREATE TABLE IF NOT EXISTS `st_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_descr` varchar(45) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `st_categories`
--

INSERT INTO `st_categories` (`cat_id`, `cat_descr`) VALUES
(1, 'au lait'),
(2, 'blanc'),
(3, 'blond'),
(4, 'noir'),
(5, 'noir d\'origine'),
(6, 'noir grand cru'),
(7, 'rubis'),
(8, 'artisanal'),
(9, 'bean to bar'),
(10, 'bio'),
(11, 'cru / non-conché'),
(12, 'équitable'),
(13, 'exclusif'),
(14, 'sans sucre'),
(15, 'vegan'),
(16, 'allemagne'),
(17, 'belgique'),
(18, 'canada'),
(19, 'espagne'),
(20, 'finlande'),
(21, 'france'),
(22, 'islande'),
(23, 'suisse'),
(24, 'usa'),
(25, 'belize'),
(26, 'brésil'),
(27, 'cameroun'),
(28, 'colombie'),
(29, 'congo'),
(30, 'costa rica'),
(31, 'cuba'),
(32, 'équateur'),
(33, 'honduras'),
(34, 'inde'),
(35, 'jamaïque'),
(36, 'madagascar'),
(37, 'mexique'),
(38, 'nicaragua'),
(39, 'papouasie-nouvelle-guinée'),
(40, 'pérou'),
(41, 'république dominicaine'),
(42, 'tanzanie'),
(43, 'venezuela'),
(44, 'vietnam');

-- --------------------------------------------------------

--
-- Structure de la table `st_customers`
--

DROP TABLE IF EXISTS `st_customers`;
CREATE TABLE IF NOT EXISTS `st_customers` (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_civility` tinyint(4) NOT NULL DEFAULT '1',
  `cus_lastname` varchar(45) NOT NULL,
  `cus_firstname` varchar(45) NOT NULL,
  `cus_mail` varchar(80) NOT NULL,
  `cus_password` varchar(32) NOT NULL,
  `user_admin` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `st_customers`
--

INSERT INTO `st_customers` (`cus_id`, `cus_civility`, `cus_lastname`, `cus_firstname`, `cus_mail`, `cus_password`, `user_admin`) VALUES
(1, 1, 'BOUSSETTA', 'Farid', 'farid_2312@hotmail.fr', '8d5e957f297893487bd98fa830fa6413', 1),
(2, 1, 'MONDEGUER', 'Gwendal', 'loaye1978@gmail.com', '8d5e957f297893487bd98fa830fa6413', 1),
(3, 1, 'SALAH', 'Merwhan', 'merwhan.salah@outlook.fr', '8d5e957f297893487bd98fa830fa6413', 1),
(4, 1, 'TAKHERBOUCHT', 'Abdenour', 'tab88@live.fr', '8d5e957f297893487bd98fa830fa6413', 1);

-- --------------------------------------------------------

--
-- Structure de la table `st_orders`
--

DROP TABLE IF EXISTS `st_orders`;
CREATE TABLE IF NOT EXISTS `st_orders` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_customers_cus_id` int(11) NOT NULL,
  `st_types_of_logistics_typ_log_id` int(11) NOT NULL,
  `st_address_billing` int(11) NOT NULL,
  `st_address_delivery` int(11) NOT NULL,
  `ord_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ord_total` decimal(10,2) NOT NULL,
  `ord_qt` int(11) NOT NULL,
  PRIMARY KEY (`ord_id`),
  KEY `fk_st_orders_st_customers1_idx` (`st_customers_cus_id`),
  KEY `fk_st_orders_st_types_of_logistics1_idx` (`st_types_of_logistics_typ_log_id`),
  KEY `fk_st_orders_st_addresses1_idx` (`st_address_billing`),
  KEY `fk_st_orders_st_addresses2_idx` (`st_address_delivery`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `st_orders_lines`
--

DROP TABLE IF EXISTS `st_orders_lines`;
CREATE TABLE IF NOT EXISTS `st_orders_lines` (
  `st_orders_ord_id` int(11) NOT NULL,
  `st_products_pro_id` int(11) NOT NULL,
  `ord_lines_qt` int(11) NOT NULL,
  `ord_lines_price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`st_orders_ord_id`,`st_products_pro_id`),
  KEY `fk_st_orders_has_st_products_st_products1_idx` (`st_products_pro_id`),
  KEY `fk_st_orders_has_st_products_st_orders1_idx` (`st_orders_ord_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `st_payments`
--

DROP TABLE IF EXISTS `st_payments`;
CREATE TABLE IF NOT EXISTS `st_payments` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_types_of_payments_typ_pay_id` int(11) NOT NULL,
  `st_customers_cus_id` int(11) NOT NULL,
  `pay_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pay_amount` decimal(10,2) NOT NULL,
  `st_orders_ord_id` int(11) NOT NULL,
  PRIMARY KEY (`pay_id`),
  KEY `fk_st_payments_st_types_of_payments1_idx` (`st_types_of_payments_typ_pay_id`),
  KEY `fk_st_payments_st_customers1_idx` (`st_customers_cus_id`),
  KEY `fk_st_payments_st_orders1_idx` (`st_orders_ord_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `st_products`
--

DROP TABLE IF EXISTS `st_products`;
CREATE TABLE IF NOT EXISTS `st_products` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_title` varchar(200) NOT NULL,
  `pro_subtitle` varchar(255) NOT NULL,
  `pro_descr` mediumtext NOT NULL,
  `pro_img_url` varchar(255) NOT NULL,
  `pro_img_url_2` varchar(255) NOT NULL,
  `pro_price` decimal(10,2) NOT NULL,
  `pro_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `st_products_has_st_categories`
--

DROP TABLE IF EXISTS `st_products_has_st_categories`;
CREATE TABLE IF NOT EXISTS `st_products_has_st_categories` (
  `st_products_pro_id` int(11) NOT NULL,
  `st_categories_cat_id` int(11) NOT NULL,
  PRIMARY KEY (`st_products_pro_id`,`st_categories_cat_id`),
  KEY `fk_st_products_has_st_categories_st_categories1_idx` (`st_categories_cat_id`),
  KEY `fk_st_products_has_st_categories_st_products1_idx` (`st_products_pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `st_types_of_logistics`
--

DROP TABLE IF EXISTS `st_types_of_logistics`;
CREATE TABLE IF NOT EXISTS `st_types_of_logistics` (
  `typ_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `typ_log_descr` varchar(45) NOT NULL,
  `typ_log_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`typ_log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `st_types_of_payments`
--

DROP TABLE IF EXISTS `st_types_of_payments`;
CREATE TABLE IF NOT EXISTS `st_types_of_payments` (
  `typ_pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `typ_pay_descr` varchar(45) NOT NULL,
  PRIMARY KEY (`typ_pay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `st_addresses`
--
ALTER TABLE `st_addresses`
  ADD CONSTRAINT `fk_st_addresses_st_customers1` FOREIGN KEY (`st_customers_cus_id`) REFERENCES `st_customers` (`cus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `st_caddies`
--
ALTER TABLE `st_caddies`
  ADD CONSTRAINT `fk_st_customers_has_st_products_st_customers` FOREIGN KEY (`st_customers_cus_id`) REFERENCES `st_customers` (`cus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_customers_has_st_products_st_products1` FOREIGN KEY (`st_products_pro_id`) REFERENCES `st_products` (`pro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `st_orders`
--
ALTER TABLE `st_orders`
  ADD CONSTRAINT `fk_st_orders_st_addresses1` FOREIGN KEY (`st_address_billing`) REFERENCES `st_addresses` (`add_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_orders_st_addresses2` FOREIGN KEY (`st_address_delivery`) REFERENCES `st_addresses` (`add_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_orders_st_customers1` FOREIGN KEY (`st_customers_cus_id`) REFERENCES `st_customers` (`cus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_orders_st_types_of_logistics1` FOREIGN KEY (`st_types_of_logistics_typ_log_id`) REFERENCES `st_types_of_logistics` (`typ_log_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `st_orders_lines`
--
ALTER TABLE `st_orders_lines`
  ADD CONSTRAINT `fk_st_orders_has_st_products_st_orders1` FOREIGN KEY (`st_orders_ord_id`) REFERENCES `st_orders` (`ord_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_orders_has_st_products_st_products1` FOREIGN KEY (`st_products_pro_id`) REFERENCES `st_products` (`pro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `st_payments`
--
ALTER TABLE `st_payments`
  ADD CONSTRAINT `fk_st_payments_st_customers1` FOREIGN KEY (`st_customers_cus_id`) REFERENCES `st_customers` (`cus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_payments_st_orders1` FOREIGN KEY (`st_orders_ord_id`) REFERENCES `st_orders` (`ord_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_payments_st_types_of_payments1` FOREIGN KEY (`st_types_of_payments_typ_pay_id`) REFERENCES `st_types_of_payments` (`typ_pay_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `st_products_has_st_categories`
--
ALTER TABLE `st_products_has_st_categories`
  ADD CONSTRAINT `fk_st_products_has_st_categories_st_categories1` FOREIGN KEY (`st_categories_cat_id`) REFERENCES `st_categories` (`cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_st_products_has_st_categories_st_products1` FOREIGN KEY (`st_products_pro_id`) REFERENCES `st_products` (`pro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
