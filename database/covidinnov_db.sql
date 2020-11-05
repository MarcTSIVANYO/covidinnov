-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 11 juin 2020 à 22:54
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `covidinnov_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `fixed` varchar(255) NOT NULL,
  `indice` int(11) NOT NULL,
  `publier` tinyint(1) NOT NULL DEFAULT 1,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `albums`
--

INSERT INTO `albums` (`id`, `titre`, `fixed`, `indice`, `publier`, `visible`, `created_at`, `updated_at`) VALUES
(1, 'Accueil Slider', 'home-slider', 1, 1, 1, '2020-04-09 01:08:35', '2020-04-08 23:08:35'),
(2, 'Nos partenaires', 'partenaires', 2, 1, 1, '2020-04-09 14:30:37', '2020-04-09 14:30:37');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `fichier` varchar(255) DEFAULT NULL,
  `indice` int(11) NOT NULL,
  `contenu` text DEFAULT NULL,
  `publier` tinyint(1) NOT NULL DEFAULT 1,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `categorie_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `libelle`, `fichier`, `indice`, `contenu`, `publier`, `visible`, `categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'Origine', 'origine1', NULL, 1, '<p>Nous sommes un service d&rsquo;&eacute;change en ligne de monnaie &eacute;lectronique et de cryptomonnaie.&nbsp;<br />\r\nNous offrons un service rapide fiable et s&eacute;curis&eacute; vous permettant d&rsquo;acheter ou de vendre le dollar &agrave; travers la cryptomonnaie et la monnaie &eacute;lectronique en Afrique et dans le monde.&nbsp;<br />\r\nNous &eacute;changeons des monnaies comme E-dinarcoin, bitcoin, perfectmoney, paypal et autres.&nbsp;<br />\r\nNous esp&eacute;rons pouvoir vous satisfaire !!!.</p>\r\n\r\n<p>Nous sommes un service d&rsquo;&eacute;change en ligne de monnaie &eacute;lectronique et de cryptomonnaie.&nbsp;<br />\r\nNous offrons un service rapide fiable et s&eacute;curis&eacute; vous permettant d&rsquo;acheter ou de vendre le dollar &agrave; travers la cryptomonnaie et la monnaie &eacute;lectronique en Afrique et dans le monde.&nbsp;<br />\r\nNous &eacute;changeons des monnaies comme E-dinarcoin, bitcoin, perfectmoney, paypal et autres.&nbsp;<br />\r\nNous esp&eacute;rons pouvoir vous satisfaire !!!.</p>\r\n\r\n<p>Nous sommes un service d&rsquo;&eacute;change en ligne de monnaie &eacute;lectronique et de cryptomonnaie.&nbsp;<br />\r\nNous offrons un service rapide fiable et s&eacute;curis&eacute; vous permettant d&rsquo;acheter ou de vendre le dollar &agrave; travers la cryptomonnaie et la monnaie &eacute;lectronique en Afrique et dans le monde.&nbsp;<br />\r\nNous &eacute;changeons des monnaies comme E-dinarcoin, bitcoin, perfectmoney, paypal et autres.&nbsp;<br />\r\nNous esp&eacute;rons pouvoir vous satisfaire !!!.</p>\r\n\r\n<p>Nous sommes un service d&rsquo;&eacute;change en ligne de monnaie &eacute;lectronique et de cryptomonnaie.&nbsp;<br />\r\nNous offrons un service rapide fiable et s&eacute;curis&eacute; vous permettant d&rsquo;acheter ou de vendre le dollar &agrave; travers la cryptomonnaie et la monnaie &eacute;lectronique en Afrique et dans le monde.&nbsp;<br />\r\nNous &eacute;changeons des monnaies comme E-dinarcoin, bitcoin, perfectmoney, paypal et autres.&nbsp;<br />\r\nNous esp&eacute;rons pouvoir vous satisfaire !!!.</p>\r\n\r\n<p>Nous sommes un service d&rsquo;&eacute;change en ligne de monnaie &eacute;lectronique et de cryptomonnaie.&nbsp;<br />\r\nNous offrons un service rapide fiable et s&eacute;curis&eacute; vous permettant d&rsquo;acheter ou de vendre le dollar &agrave; travers la cryptomonnaie et la monnaie &eacute;lectronique en Afrique et dans le monde.&nbsp;<br />\r\nNous &eacute;changeons des monnaies comme E-dinarcoin, bitcoin, perfectmoney, paypal et autres.&nbsp;<br />\r\nNous esp&eacute;rons pouvoir vous satisfaire !!!.</p>\r\n', 1, 1, 1, '2017-03-30 06:53:24', '2017-03-30 07:01:23'),
(2, 'Origine', 'origine', NULL, 1, '<p>Nous sommes un service d&rsquo;&eacute;change en ligne de monnaie &eacute;lectronique et de cryptomonnaie.&nbsp;<br />\r\nNous offrons un service rapide fiable et s&eacute;curis&eacute; vous permettant d&rsquo;acheter ou de vendre le dollar &agrave; travers la cryptomonnaie et la monnaie &eacute;lectronique en Afrique et dans le monde.&nbsp;<br />\r\nNous &eacute;changeons des monnaies comme E-dinarcoin, bitcoin, perfectmoney, paypal et autres.&nbsp;<br />\r\nNous esp&eacute;rons pouvoir vous satisfaire !!!.</p>\r\n\r\n<p>Nous sommes un service d&rsquo;&eacute;change en ligne de monnaie &eacute;lectronique et de cryptomonnaie.&nbsp;<br />\r\nNous offrons un service rapide fiable et s&eacute;curis&eacute; vous permettant d&rsquo;acheter ou de vendre le dollar &agrave; travers la cryptomonnaie et la monnaie &eacute;lectronique en Afrique et dans le monde.&nbsp;<br />\r\nNous &eacute;changeons des monnaies comme E-dinarcoin, bitcoin, perfectmoney, paypal et autres.&nbsp;<br />\r\nNous esp&eacute;rons pouvoir vous satisfaire !!!.</p>\r\n', 1, 1, 2, '2017-03-30 06:54:17', '2017-03-30 08:46:40');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `fichier` varchar(255) DEFAULT NULL,
  `indice` int(11) NOT NULL,
  `contenu` text DEFAULT NULL,
  `publier` tinyint(1) NOT NULL DEFAULT 1,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `page_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `titre`, `libelle`, `fichier`, `indice`, `contenu`, `publier`, `visible`, `page_id`, `created_at`, `updated_at`) VALUES
(1, 'Apropos', 'apropos', NULL, 1, '<p>La question des droits de l&rsquo;homme en g&eacute;n&eacute;ral et celle des droits des enfants et de la jeune fille en particulier, la probl&eacute;matique de la paix et la s&eacute;curit&eacute; en Afrique de l&rsquo;ouest en g&eacute;n&eacute;ral et au Togo en particulier, la probl&eacute;matique de l&rsquo;engagement civique des jeunes togolais et la question de l&rsquo;autonomisation financi&egrave;re des jeunes filles ont suscit&eacute; des interrogations aux jeunes conscients de leur contribution au processus du d&eacute;veloppement au Togo et en Afrique. Pour y parvenir, ces jeunes se sont r&eacute;unis en association d&eacute;nomm&eacute;e ACDIEF.<br />\r\nACDIEF entendue Action Collective pour le D&eacute;veloppement Int&eacute;gral de l&rsquo;Enfance et de la jeune Fille (ACDIEF) est une association &agrave; but non lucratif cr&eacute;&eacute;e en avril 2013. Elle a eu son r&eacute;c&eacute;piss&eacute; le 03 octobre 2019 sous le num&eacute;ro&nbsp;<strong>0923/MATDCL-SG-DLPAP-DOCA.</strong><br />\r\nElle est une association cr&eacute;&eacute;e par des jeunes et dirig&eacute;e par des jeunes dynamiques togolais &eacute;pris de la question du d&eacute;veloppement humain durable dans un contexte de paix et des droits humains.</p>\r\n', 1, 1, 1, '2020-04-09 01:17:16', '2020-04-08 23:17:16'),
(2, 'Notre But', 'but', NULL, 2, '<p>L&rsquo;Organisation a pour but de contribuer &agrave; l&rsquo;&eacute;panouissement de l&rsquo;enfance et de la jeune fille dans une approche de d&eacute;veloppement humain durable et participatif, promouvoir la paix et la s&eacute;curit&eacute;.</p>\r\n', 1, 1, 1, '2020-04-09 01:31:30', '2020-04-08 23:31:30'),
(3, 'Nos objectifs', 'objectifs', NULL, 3, '<p>Promouvoir et prot&eacute;ger les droits humains en g&eacute;n&eacute;ral, les droits des enfants et de la jeune fille en particulier. Promouvoir la paix et la s&eacute;curit&eacute;. Offrir un accompagnement social, psychologique aux enfants et jeunes fille d&eacute;munies. Offrir un accompagnement juridique, psychosocial aux enfants et jeunes filles en conflit avec la loi.</p>\r\n', 1, 1, 1, '2020-04-09 01:32:06', '2020-04-08 23:32:06'),
(4, 'Notre mission', 'mission', NULL, 4, '<p>Informer, &eacute;duquer et communiquer autour de la question des droits humains, li&eacute;e aux groupes vuln&eacute;rables, jeunes et aux communaut&eacute;s &agrave; la base ; mobiliser les jeunes et autres acteurs autours de la question de l&rsquo;engagement civique, la paix et la s&eacute;curit&eacute; et l&rsquo;entrepreneuriat.</p>\r\n', 1, 1, 1, '2020-04-09 01:32:46', '2020-04-08 23:32:46'),
(6, 'GaucheInfos', 'Informations à gauches', NULL, 1, '<ul>\r\n	<li><strong>Enseignement des droits humains dans les &eacute;coles et mise en place des clubs de jeunes promoteurs des droits humains en milieux scolaires</strong></li>\r\n	<li><strong>Monitoring des lieux d&eacute;tention</strong></li>\r\n	<li><strong>Protections des groupes vuln&eacute;rables</strong></li>\r\n	<li><strong>Droits de l&rsquo;homme et moi</strong></li>\r\n	<li><strong>Jeunesse, citoyennet&eacute;, paix et s&eacute;curit&eacute;</strong></li>\r\n	<li><strong>Forum national et international</strong></li>\r\n	<li><strong>Concours des droits de l&rsquo;homme</strong></li>\r\n</ul>\r\n', 1, 1, 5, '2020-04-09 01:17:40', '2020-04-08 23:17:40'),
(7, 'DroiteInfos', 'Informations à droite', NULL, 2, '<ul>\r\n	<li><strong>Un paquet de cahier &agrave; yawa</strong></li>\r\n	<li><strong>Education &agrave; la citoyennet&eacute; et aux valeurs de paix</strong></li>\r\n	<li><strong>Formation en entrepreneuriat</strong></li>\r\n	<li><strong>Organisation des rencontres d&rsquo;opportunit&eacute;</strong></li>\r\n	<li><strong>Organisation des conf&eacute;rences et ateliers</strong></li>\r\n	<li><strong>Organisation des camps de soutien scolaires</strong></li>\r\n	<li><strong>Action humanitaires &agrave; l&rsquo;endroit des enfants et jeunes filles</strong></li>\r\n	<li><strong>Lutte contre les violences bas&eacute;es sur le genre</strong></li>\r\n	<li><strong>TIC et jeunes filles en milieux scolaires</strong></li>\r\n</ul>\r\n', 1, 1, 5, '2020-04-09 01:18:09', '2020-04-08 23:18:09'),
(8, 'FORMATION DES AMBASSADEURS DE LUTTE CONTRE LES VIOLENCES BASÉES SUR LE GENRE.', 'formation-des-ambassadeurs', 'fichiers_siteWeb/1586396726.jpg', 1, '<p>Dans le cadre de ses actions de lutte contre les violences bas&eacute;es sur le genre et donc de promotion de l&rsquo;autonomisation de la jeune fille et de la femme, ACDIEF a initi&eacute; le projet de formation des ambassadeurs de lutte contre les VBG. Ce projet a permis de disposer des ambassadeurs dans la r&eacute;gion Maritime. Il se poursuivra dans la r&eacute;gion des plateaux, centrale, Kara et Savanes. L&rsquo;objectif est de disposer de ces ambassadeurs dans toutes les r&eacute;gions pour servir des cellules d&rsquo;&eacute;coutes et d&rsquo;alerte sur les VBG.</p>\r\n', 1, 1, 6, '2020-04-08 23:45:26', '2020-04-08 23:45:26'),
(9, 'SOUTIEN SCOLAIRE AUX JEUNES FILLES ET ENFANTS DÉMUNIS', 'soutien-scolaire', NULL, 2, '<p>Ce projet consiste &agrave; renforcer les capacit&eacute;s des enfants et jeunes filles d&eacute;munis des zones rurales sur des th&eacute;matiques pr&eacute;cises et &agrave; leur offrir des kits scolaires pour leur rentr&eacute;e scolaire. En 2019, 199 filles et enfants d&eacute;munis de Djagbl&eacute; ont &eacute;t&eacute; familiaris&eacute;s &agrave; l&#39;outil informatique puis b&eacute;n&eacute;fici&eacute; des kits scolaires</p>\r\n', 1, 1, 6, '2020-04-08 23:47:56', '2020-04-08 23:47:56'),
(10, 'Education aux droits humains en milieux scolaires et carcérales', 'Education aux droits humains en milieux scolaires et carcérales', NULL, 1, '<p>Education aux droits humains en milieux scolaires et carc&eacute;rales</p>\r\n', 1, 1, 4, '2020-04-08 23:50:47', '2020-04-08 23:50:47'),
(11, 'Assistance aux victimes de violation des droits humains', 'Assistance aux victimes de violation des droits humains', NULL, 2, '', 1, 1, 4, '2020-04-08 23:51:16', '2020-04-08 23:51:16'),
(12, 'Camps de soutien scolaire aux enfants et jeunes filles démunis', 'Camps de soutien scolaire aux enfants et jeunes filles démunis', NULL, 3, '', 1, 1, 4, '2020-04-08 23:51:39', '2020-04-08 23:51:39'),
(13, 'Jeunesse- Paix et sécurité', 'Jeunesse- Paix et sécurité', NULL, 4, '', 1, 1, 4, '2020-04-08 23:52:04', '2020-04-08 23:52:04'),
(14, 'Autonomisation de la jeune fille et de la femme', 'Autonomisation de la jeune fille et de la femme', NULL, 5, '<p>Autonomisation de la jeune fille et de la femme</p>\r\n', 1, 1, 4, '2020-04-08 23:52:29', '2020-04-08 23:52:29'),
(15, 'Médias –droits humains', 'Médias –droits humains', NULL, 6, '', 1, 1, 4, '2020-04-08 23:52:51', '2020-04-08 23:52:51'),
(16, 'ACDIEF Fellow', 'ACDIEF Fellow', NULL, 7, '', 1, 1, 4, '2020-04-08 23:53:09', '2020-04-08 23:53:09'),
(17, 'Action humanitaire', 'Action humanitaire', NULL, 8, '', 1, 1, 4, '2020-04-08 23:53:38', '2020-04-08 23:53:38'),
(18, 'Formation', 'Formation', NULL, 9, '', 1, 1, 4, '2020-04-08 23:53:52', '2020-04-08 23:53:52'),
(19, 'Promotion et protection des droits humains', 'Droits des enfants et de la jeune fille.', NULL, 1, '<p>Droits des enfants et de la jeune fille.</p>\r\n', 1, 1, 2, '2020-04-08 23:56:20', '2020-04-08 23:56:20'),
(20, 'Paix et Sécurité', 'Paix et Sécurité', NULL, 2, '<p>Paix et S&eacute;curit&eacute;</p>\r\n', 1, 1, 2, '2020-04-09 01:57:25', '2020-04-08 23:57:25'),
(21, 'Entrepreneuriat des jeunes', 'Entrepreneuriat des jeunes', NULL, 3, '<p>Entrepreneuriat des jeunes</p>\r\n', 1, 1, 2, '2020-04-08 23:56:59', '2020-04-08 23:56:59'),
(22, 'Galleries', 'galleries', NULL, 1, 'REST', 1, 1, 1, '2020-05-14 20:55:16', '2020-05-14 20:55:16');

-- --------------------------------------------------------

--
-- Structure de la table `configurations`
--

CREATE TABLE `configurations` (
  `id` int(11) NOT NULL,
  `nom_site` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `cel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse_physique` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `configurations`
--

INSERT INTO `configurations` (`id`, `nom_site`, `telephone`, `cel`, `email`, `adresse_physique`, `logo`, `favicon`, `url`, `visible`, `created_at`, `updated_at`) VALUES
(1, 'COVID INNOVATIONS', '0605698949', '0605698949', 'hello@covid-innov.com', '55 SQUARE PEDRO FLORES', 'fichiers/logo-1591558997.png', 'fichiers/favicon-1591560953.png', 'convid-innovations', 1, '2020-06-07 20:15:53', '2020-06-07 18:15:53');

-- --------------------------------------------------------

--
-- Structure de la table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `objet`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Marc TSIVANYO', 'Demande d\'information', 'marctsivanyo@gmail.com', 'Tetst', '2020-06-07 18:37:58', '2020-06-07 18:37:58'),
(2, 'Marc TSIVANYO', 'Demande d\'information', 'marctsivanyo@gmail.com', 'Tetst', '2020-06-07 18:48:08', '2020-06-07 18:48:08'),
(3, 'Marc TSIVANYO', 'Demande d\'information', 'marctsivanyo@gmail.com', 'Tetst', '2020-06-07 18:48:51', '2020-06-07 18:48:51'),
(4, 'Marc TSIVANYO', 'Demande d\'information', 'marctsivanyo@gmail.com', 'Tetsttdshs\r\nsdhsdjs\r\ndshdjs$\r\ndsd', '2020-06-07 18:52:34', '2020-06-07 18:52:34'),
(5, 'Marc TSIVANYO', 'Demande d\'information', 'marctsivanyo@gmail.com', 'Tets', '2020-06-07 19:09:27', '2020-06-07 19:09:27');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenoms` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `lien_drive` varchar(255) DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `views` text DEFAULT NULL,
  `publier` int(1) DEFAULT 0,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  `recherche_id` int(11) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `localisation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`id`, `nom`, `prenoms`, `email`, `pseudo`, `adresse`, `photo`, `banner`, `lien_drive`, `experience`, `skills`, `views`, `publier`, `facebook`, `linkedin`, `twitter`, `instagram`, `created_at`, `updated_at`, `user_id`, `recherche_id`, `about`, `titre`, `localisation`) VALUES
(1, 'TSIVANYO', 'Marc', 'marctsivanyo@gmail.com', 'MarcTsiv6032', '55 SQUARE PEDRO FLORES', 'public/img/tsivanyomarcus/profils_tsivanyomarcus1590522946.jpg', NULL, 'https://drive.google.com/file/d/1bUtsEns7CLNTQikZFgQZIVnael6Ex-Xp/view?usp=sharing', '<ul>\r\n	<li><strong>AZAZ</strong></li>\r\n	<li><strong>aeazez</strong></li>\r\n	<li><strong>zeze</strong></li>\r\n	<li><strong>ze</strong></li>\r\n	<li><strong>zeze</strong></li>\r\n	<li><strong>zez</strong></li>\r\n	<li><strong>eze</strong></li>\r\n	<li><strong>ze</strong></li>\r\n	<li><strong>zez</strong></li>\r\n	<li><strong>e</strong></li>\r\n</ul>\r\n', 'AZAZ', '14', 1, 'AZ', 'AZ', 'AZ', 'AZ', '2020-05-23 01:56:45', '2020-06-04 11:41:35', 23, 2, 'To create a custom checkbox, wrap a container element, like Tip: If you use labels for accompanying text, add the .custom-control-label class to it. Note that the value of the for attribute should match the id of the checkbox:\r\nTo create a custom checkbox, wrap a container element, like Tip: If you use labels for accompanying text, add the .custom-control-label class to it. Note that the value of the for attribute should match the id of the checkbox:\r\nTo create a custom checkbox, wrap a container element, like Tip: If you use labels for accompanying text, add the .custom-control-label class to it. Note that the value of the for attribute should match the id of the checkbox:', 'Informaticien', 'RENNES');

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

CREATE TABLE `droits` (
  `id_droits` int(11) NOT NULL,
  `publier_droits` tinyint(1) NOT NULL DEFAULT 1,
  `visible_droits` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_sous_menus` int(11) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `id_type_users` int(11) DEFAULT NULL,
  `id_menus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `droits`
--

INSERT INTO `droits` (`id_droits`, `publier_droits`, `visible_droits`, `created_at`, `updated_at`, `id_sous_menus`, `id_users`, `id_type_users`, `id_menus`) VALUES
(60, 1, 1, '2020-05-23 06:34:48', '2020-05-23 06:34:48', 1, NULL, 1, NULL),
(61, 1, 1, '2020-05-23 06:34:49', '2020-05-23 06:34:49', 2, NULL, 1, NULL),
(62, 1, 1, '2020-05-23 06:34:49', '2020-05-23 06:34:49', 3, NULL, 1, NULL),
(63, 1, 1, '2020-05-23 06:34:49', '2020-05-23 06:34:49', 4, NULL, 1, NULL),
(64, 1, 1, '2020-05-23 06:34:49', '2020-05-23 06:34:49', NULL, NULL, 1, 10),
(65, 1, 1, '2020-05-23 06:34:49', '2020-05-23 06:34:49', NULL, NULL, 1, 11);

-- --------------------------------------------------------

--
-- Structure de la table `groupe_users`
--

CREATE TABLE `groupe_users` (
  `id_groupe_users` int(11) NOT NULL,
  `publier_groupe_users` tinyint(1) NOT NULL DEFAULT 1,
  `visible_groupe_users` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_users` int(11) NOT NULL,
  `id_type_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `groupe_users`
--

INSERT INTO `groupe_users` (`id_groupe_users`, `publier_groupe_users`, `visible_groupe_users`, `created_at`, `updated_at`, `id_users`, `id_type_users`) VALUES
(1, 1, 1, NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `innovations`
--

CREATE TABLE `innovations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_innovation_id` int(10) UNSIGNED NOT NULL,
  `pays_id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenoms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publier` int(11) NOT NULL DEFAULT 0,
  `views` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `innovations`
--

INSERT INTO `innovations` (`id`, `type_innovation_id`, `pays_id`, `titre`, `lien`, `description`, `url`, `nom`, `prenoms`, `email`, `image`, `publier`, `views`, `created_at`, `updated_at`) VALUES
(3, 2, 214, 'Refonte d\'un classe d\'école', 'refontedunclassedecole-523', 'This single route declaration creates multiple routes to handle a variety of RESTful actions on the photo resource. Likewise, the generated controller will already have methods stubbed for each of these actions, including notes informing you which URIs and verbs they handle.', 'https//google.com/', 'TSIVANYO', 'Marc', 'marctsivanyo@gmail.com', '/opt/lampp/temp/phptdtFVR', 1, 19, '2020-06-05 13:59:11', '2020-06-07 22:34:46'),
(4, 3, 4, 'Galleries', 'galleries-46', 'tes', 'www.mastersolut.com ', 'TSIVANYO', 'Marc', 'helloagencehost@gmail.com', 'public/img/innov/galleries-46.png', 1, 21, '2020-06-05 17:22:21', '2020-06-07 20:00:39'),
(5, 2, 5, 'Galleries', 'galleries-88', 'test', 'https//google.com/', 'TSIVANYO', 'Marc', 'marctsivanyo@gmail.com', 'public/img/innov/galleries-88.png', 1, 1, '2020-06-05 17:51:31', '2020-06-05 23:02:35'),
(6, 5, 85, 'Galleries', 'galleries-36', 'f', 'https//google.com/', 'TSIVANYO', 'Marc', 'marctsivanyo@gmail.com', 'public/img/innov/galleries-36.png', 1, 3, '2020-06-05 17:56:00', '2020-06-07 22:55:54'),
(7, 1, 214, 'Galleries', 'galleries-59', 'Votre vie privée est importante pour nous!\r\nLorsque vous visitez notre site, des compagnies pré-sélectionnées peuvent accéder à certaines informations sur votre appareil et sur cette page Web et les utiliser pour diffuser des annonces pertinentes ou du contenu personnalisé. Veuillez noter que ces annonces nous permettent de maintenir notre service gratuit. Les données personnelles seront traitées sur la base du consentement conformément à l\'article 6, paragraphe 1, point a) du RGPD dans le cadre du droit européen, ou en tant qu\'intérêt légitime conformément à l\'article 6, paragraphe 1, point f) du même règlement.', 'https://www.linguee.fr/', 'TSIVANYO', 'Marc', 'masfinance@mastersolut.com', 'public/img/innov/galleries-59.png', 1, 28, '2020-06-05 18:58:38', '2020-06-09 08:04:00'),
(8, 1, 65, 'Votre vie privée est importante pour nous!', 'votre-vie-priv-ee-est-importante-pour-nous--35', 'Lorsque vous visitez notre site, des compagnies pré-sélectionnées peuvent accéder à certaines informations sur votre appareil et sur cette page Web et les utiliser pour diffuser des annonces pertinentes ou du contenu personnalisé. Veuillez noter que ces annonces nous permettent de maintenir notre service gratuit. Les données personnelles seront traitées sur la base du consentement conformément à l\'article 6, paragraphe 1, point a) du RGPD dans le cadre du droit européen, ou en tant qu\'intérêt légitime conformément à l\'article 6, paragraphe 1, point f) du même règlement.\r\nComprenez pourquoi vous voyez cela\r\nNous, «l\'éditeur» et un groupe de partenaires de confiance choisis désignés les «fournisseurs», avons besoin de votre consentement à des fins de traitement des données, telles que la configuration des cookies ou l\'accès aux informations sur l\'appareil. Cela inclus par exemple, l\'accès à votre position et les cookies tiers pour comprendre vos intérêts et vous offrir une meilleure expérience de navigation sur notre site internet. Cela nous permet de vous montrer des annonces plus pertinentes pour vous ainsi que d\'évaluer les paramètres de performance. Afin de gérer ces paramètres de confidentialité, nous utilisons une plateforme de gestion du consentement (PGC) pour obtenir votre consentement explicite. Ces informations relatives au consentement seront stockées sur votre appareil sous forme de cookies codés. Après leur création initiale, vous ne serez plus invité à donner votre consentement à moins que les conditions ne changent.', 'http://mastersolut.com', 'TSIVANYO', 'Kodjo', 'contact@mastersolut.com', 'public/img/innov/votre-vie-priv-ee-est-importante-pour-nous--35.png', 0, 0, '2020-06-05 19:13:14', '2020-06-05 19:13:14'),
(9, 1, 65, 'Votre vie privée est importante pour nous!', 'votre-vie-priv-ee-est-importante-pour-nous--68', 'Lorsque vous visitez notre site, des compagnies pré-sélectionnées peuvent accéder à certaines informations sur votre appareil et sur cette page Web et les utiliser pour diffuser des annonces pertinentes ou du contenu personnalisé. Veuillez noter que ces annonces nous permettent de maintenir notre service gratuit. Les données personnelles seront traitées sur la base du consentement conformément à l\'article 6, paragraphe 1, point a) du RGPD dans le cadre du droit européen, ou en tant qu\'intérêt légitime conformément à l\'article 6, paragraphe 1, point f) du même règlement.\r\nComprenez pourquoi vous voyez cela\r\nNous, «l\'éditeur» et un groupe de partenaires de confiance choisis désignés les «fournisseurs», avons besoin de votre consentement à des fins de traitement des données, telles que la configuration des cookies ou l\'accès aux informations sur l\'appareil. Cela inclus par exemple, l\'accès à votre position et les cookies tiers pour comprendre vos intérêts et vous offrir une meilleure expérience de navigation sur notre site internet. Cela nous permet de vous montrer des annonces plus pertinentes pour vous ainsi que d\'évaluer les paramètres de performance. Afin de gérer ces paramètres de confidentialité, nous utilisons une plateforme de gestion du consentement (PGC) pour obtenir votre consentement explicite. Ces informations relatives au consentement seront stockées sur votre appareil sous forme de cookies codés. Après leur création initiale, vous ne serez plus invité à donner votre consentement à moins que les conditions ne changent.', 'http://mastersolut.com', 'TSIVANYO', 'Kodjo', 'contact@mastersolut.com', 'public/img/innov/votre-vie-priv-ee-est-importante-pour-nous--68.png', 0, 0, '2020-06-05 19:13:52', '2020-06-05 19:13:52'),
(10, 1, 214, 'Galleries', 'galleries-68', 'ezeze', 'https//google.com/', 'TSIVANYO', 'Kodjo', 'contact@mastersolut.com', 'public/img/innov/galleries-68.png', 0, 0, '2020-06-05 19:15:53', '2020-06-05 19:15:53'),
(11, 3, 2, 'Refonte d\'un classe d\'école', 'refonte-d-un-classe-d-ecole-67', 'dsfdsdsds$s\r\nsd\r\nsdsdsdsd', 'lws.fr', 'TSIVANYO', 'Kodjo', 'contact@mastersolut.com', 'public/img/innov/refonte-d-un-classe-d-ecole-67.png', 1, 7, '2020-06-06 00:50:06', '2020-06-07 20:00:28'),
(12, 3, 4, 'Galleries', 'galleries-97', 'c', '', 'AgenceHost', 'Kodjo', 'contact@mastersolut.com', NULL, 0, 0, '2020-06-06 01:08:18', '2020-06-06 01:08:18'),
(13, 4, 4, 'Galleries', 'galleries-76', 'dfdfdsfdf', '', 'TSIVANYO', 'Marc', 'marctsivanyo@gmail.com', 'public/img/innov/galleries-76.png', 0, 0, '2020-06-06 01:09:01', '2020-06-06 01:09:01'),
(14, 3, 3, 'Galleries', 'galleries-25', 'xdsdsdsdsdsd', '', 'AgenceHost', 'Host', 'helloagencehost@gmail.com', NULL, 0, 0, '2020-06-06 01:09:48', '2020-06-06 01:09:48');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id_menus` int(11) NOT NULL,
  `titre_menus` varchar(100) NOT NULL,
  `libelle_menus` varchar(200) NOT NULL,
  `lien_menus` varchar(200) NOT NULL,
  `indice_menus` int(11) NOT NULL,
  `publier_menus` tinyint(1) NOT NULL DEFAULT 1,
  `visible_menus` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id_menus`, `titre_menus`, `libelle_menus`, `lien_menus`, `indice_menus`, `publier_menus`, `visible_menus`, `created_at`, `updated_at`) VALUES
(1, 'Paramétrage', 'fa-key', 'null', 1, 1, 1, '2017-03-29 03:57:08', '2017-04-01 07:31:33'),
(5, 'Section', 'fa-navicon', 'admin/sections', 3, 1, 0, '2017-03-29 12:04:24', '2020-05-16 22:11:14'),
(6, 'Pages', 'fa-book', 'admin/pages', 4, 1, 0, '2017-03-29 13:11:14', '2020-05-16 22:11:17'),
(7, 'Gestion des Partenaires', 'fa fa-file-text', 'admin/albums', 5, 1, 0, '2017-03-30 09:11:05', '2020-05-16 22:11:20'),
(8, 'Gestion du site web', 'fa fa-cog', 'siteweb', 2, 1, 0, '2020-04-08 21:16:57', '2020-04-08 21:16:57'),
(9, 'Gestion des Actualités', 'fa-newspaper-o', 'admin/page/actualites', 5, 1, 0, '2020-04-08 22:47:23', '2020-05-16 22:11:22'),
(10, 'Innovations', 'fa fa-list', 'admin/innovations', 2, 1, 1, '2020-05-16 22:12:19', '2020-06-05 17:09:56'),
(11, 'Dashbord', 'fa fa-home', 'home', 1, 1, 1, '2020-05-23 06:34:28', '2020-05-23 06:34:28');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_06_05_094725_create_pays_table', 1),
(2, '2020_06_05_112916_create_type_innovations_table', 1),
(3, '2020_06_05_114812_create_innovations_table', 1),
(4, '2020_06_06_034611_create_contact_us_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `fixe` varchar(255) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `fichier` varchar(255) DEFAULT NULL,
  `indice` int(11) NOT NULL,
  `contenu` text DEFAULT NULL,
  `publier` tinyint(1) NOT NULL DEFAULT 1,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `section_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `titre`, `fixe`, `libelle`, `fichier`, `indice`, `contenu`, `publier`, `visible`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 'Présentation', 'apropos', 'apropos', NULL, 1, '<p><strong>Nous sommes un service d&rsquo;&eacute;change en ligne de monnaie &eacute;lectronique et de cryptomonnaie.&nbsp;</strong><br />\r\nNous offrons un service rapide fiable et s&eacute;curis&eacute; vous permettant d&rsquo;acheter ou de vendre le dollar &agrave; travers la cryptomonnaie et la monnaie &eacute;lectronique en Afrique et dans le monde.&nbsp;<br />\r\nNous &eacute;changeons des monnaies comme E-dinarcoin, bitcoin, perfectmoney, paypal et autres.&nbsp;<br />\r\nNous esp&eacute;rons pouvoir vous satisfaire !!!.</p>\r\n\r\n<p>Nous sommes un service d&rsquo;&eacute;change en ligne de monnaie &eacute;lectronique et de cryptomonnaie.&nbsp;<br />\r\nNous offrons un service rapide fiable et s&eacute;curis&eacute; vous permettant d&rsquo;acheter ou de vendre le dollar &agrave; travers la cryptomonnaie et la monnaie &eacute;lectronique en Afrique et dans le monde.&nbsp;<br />\r\nNous &eacute;changeons des monnaies comme E-dinarcoin, bitcoin, perfectmoney, paypal et autres.&nbsp;<br />\r\nNous esp&eacute;rons pouvoir vous satisfaire !!!.</p>\r\n', 1, 1, 1, '2020-04-08 23:57:43', '2020-04-08 21:57:43'),
(2, 'Domaines d\'intervention', 'domaines', 'domaines', NULL, 2, '', 1, 1, 1, '2020-04-09 00:29:28', '2020-04-09 00:29:28'),
(4, 'Programmes', 'programmes', 'programmes', NULL, 3, NULL, 1, 1, 1, '2020-04-09 00:28:36', '2020-04-09 00:28:33'),
(5, 'Nos Activités', 'activites', 'activites', NULL, 0, NULL, 1, 1, 1, '2020-04-09 00:50:04', '2020-04-09 00:50:04'),
(6, 'Actualités', 'actualites', 'https://drive.google.com/open?id=1FHB_OnWCvgj5A70SWDmd6FnnayvsGtgy', NULL, 0, NULL, 1, 1, 1, '2020-04-09 14:23:55', '2020-04-09 14:23:55');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', NULL, NULL),
(2, 'Albanie', NULL, NULL),
(3, 'Antarctique', NULL, NULL),
(4, 'Algérie', NULL, NULL),
(5, 'Samoa Américaines', NULL, NULL),
(6, 'Andorre', NULL, NULL),
(7, 'Angola', NULL, NULL),
(8, 'Antigua-et-Barbuda', NULL, NULL),
(9, 'Azerbaïdjan', NULL, NULL),
(10, 'Argentine', NULL, NULL),
(11, 'Australie', NULL, NULL),
(12, 'Autriche', NULL, NULL),
(13, 'Bahamas', NULL, NULL),
(14, 'Bahreïn', NULL, NULL),
(15, 'Bangladesh', NULL, NULL),
(16, 'Arménie', NULL, NULL),
(17, 'Barbade', NULL, NULL),
(18, 'Belgique', NULL, NULL),
(19, 'Bermudes', NULL, NULL),
(20, 'Bhoutan', NULL, NULL),
(21, 'Bolivie', NULL, NULL),
(22, 'Bosnie-Herzégovine', NULL, NULL),
(23, 'Botswana', NULL, NULL),
(24, 'Île Bouvet', NULL, NULL),
(25, 'Brésil', NULL, NULL),
(26, 'Belize', NULL, NULL),
(27, 'Territoire Britannique de l\'Océan Indien', NULL, NULL),
(28, 'Îles Salomon', NULL, NULL),
(29, 'Îles Vierges Britanniques', NULL, NULL),
(30, 'Brunéi Darussalam', NULL, NULL),
(31, 'Bulgarie', NULL, NULL),
(32, 'Myanmar', NULL, NULL),
(33, 'Burundi', NULL, NULL),
(34, 'Bélarus', NULL, NULL),
(35, 'Cambodge', NULL, NULL),
(36, 'Cameroun', NULL, NULL),
(37, 'Canada', NULL, NULL),
(38, 'Cap-vert', NULL, NULL),
(39, 'Îles Caïmanes', NULL, NULL),
(40, 'République Centrafricaine', NULL, NULL),
(41, 'Sri Lanka', NULL, NULL),
(42, 'Tchad', NULL, NULL),
(43, 'Chili', NULL, NULL),
(44, 'Chine', NULL, NULL),
(45, 'Taïwan', NULL, NULL),
(46, 'Île Christmas', NULL, NULL),
(47, 'Îles Cocos (Keeling)', NULL, NULL),
(48, 'Colombie', NULL, NULL),
(49, 'Comores', NULL, NULL),
(50, 'Mayotte', NULL, NULL),
(51, 'République du Congo', NULL, NULL),
(52, 'République Démocratique du Congo', NULL, NULL),
(53, 'Îles Cook', NULL, NULL),
(54, 'Costa Rica', NULL, NULL),
(55, 'Croatie', NULL, NULL),
(56, 'Cuba', NULL, NULL),
(57, 'Chypre', NULL, NULL),
(58, 'République Tchèque', NULL, NULL),
(59, 'Bénin', NULL, NULL),
(60, 'Danemark', NULL, NULL),
(61, 'Dominique', NULL, NULL),
(62, 'République Dominicaine', NULL, NULL),
(63, 'Équateur', NULL, NULL),
(64, 'El Salvador', NULL, NULL),
(65, 'Guinée Équatoriale', NULL, NULL),
(66, 'Éthiopie', NULL, NULL),
(67, 'Érythrée', NULL, NULL),
(68, 'Estonie', NULL, NULL),
(69, 'Îles Féroé', NULL, NULL),
(70, 'Îles (malvinas) Falkland', NULL, NULL),
(71, 'Géorgie du Sud et les Îles Sandwich du Sud', NULL, NULL),
(72, 'Fidji', NULL, NULL),
(73, 'Finlande', NULL, NULL),
(74, 'Îles Åland', NULL, NULL),
(75, 'France', NULL, NULL),
(76, 'Guyane Française', NULL, NULL),
(77, 'Polynésie Française', NULL, NULL),
(78, 'Terres Australes Françaises', NULL, NULL),
(79, 'Djibouti', NULL, NULL),
(80, 'Gabon', NULL, NULL),
(81, 'Géorgie', NULL, NULL),
(82, 'Gambie', NULL, NULL),
(83, 'Territoire Palestinien Occupé', NULL, NULL),
(84, 'Allemagne', NULL, NULL),
(85, 'Ghana', NULL, NULL),
(86, 'Gibraltar', NULL, NULL),
(87, 'Kiribati', NULL, NULL),
(88, 'Grèce', NULL, NULL),
(89, 'Groenland', NULL, NULL),
(90, 'Grenade', NULL, NULL),
(91, 'Guadeloupe', NULL, NULL),
(92, 'Guam', NULL, NULL),
(93, 'Guatemala', NULL, NULL),
(94, 'Guinée', NULL, NULL),
(95, 'Guyana', NULL, NULL),
(96, 'Haïti', NULL, NULL),
(97, 'Îles Heard et Mcdonald', NULL, NULL),
(98, 'Saint-Siège (état de la Cité du Vatican)', NULL, NULL),
(99, 'Honduras', NULL, NULL),
(100, 'Hong-Kong', NULL, NULL),
(101, 'Hongrie', NULL, NULL),
(102, 'Islande', NULL, NULL),
(103, 'Inde', NULL, NULL),
(104, 'Indonésie', NULL, NULL),
(105, 'République Islamique d\'Iran', NULL, NULL),
(106, 'Iraq', NULL, NULL),
(107, 'Irlande', NULL, NULL),
(108, 'Israël', NULL, NULL),
(109, 'Italie', NULL, NULL),
(110, 'Côte d\'Ivoire', NULL, NULL),
(111, 'Jamaïque', NULL, NULL),
(112, 'Japon', NULL, NULL),
(113, 'Kazakhstan', NULL, NULL),
(114, 'Jordanie', NULL, NULL),
(115, 'Kenya', NULL, NULL),
(116, 'République Populaire Démocratique de Corée', NULL, NULL),
(117, 'République de Corée', NULL, NULL),
(118, 'Koweït', NULL, NULL),
(119, 'Kirghizistan', NULL, NULL),
(120, 'République Démocratique Populaire Lao', NULL, NULL),
(121, 'Liban', NULL, NULL),
(122, 'Lesotho', NULL, NULL),
(123, 'Lettonie', NULL, NULL),
(124, 'Libéria', NULL, NULL),
(125, 'Jamahiriya Arabe Libyenne', NULL, NULL),
(126, 'Liechtenstein', NULL, NULL),
(127, 'Lituanie', NULL, NULL),
(128, 'Luxembourg', NULL, NULL),
(129, 'Macao', NULL, NULL),
(130, 'Madagascar', NULL, NULL),
(131, 'Malawi', NULL, NULL),
(132, 'Malaisie', NULL, NULL),
(133, 'Maldives', NULL, NULL),
(134, 'Mali', NULL, NULL),
(135, 'Malte', NULL, NULL),
(136, 'Martinique', NULL, NULL),
(137, 'Mauritanie', NULL, NULL),
(138, 'Maurice', NULL, NULL),
(139, 'Mexique', NULL, NULL),
(140, 'Monaco', NULL, NULL),
(141, 'Mongolie', NULL, NULL),
(142, 'République de Moldova', NULL, NULL),
(143, 'Montserrat', NULL, NULL),
(144, 'Maroc', NULL, NULL),
(145, 'Mozambique', NULL, NULL),
(146, 'Oman', NULL, NULL),
(147, 'Namibie', NULL, NULL),
(148, 'Nauru', NULL, NULL),
(149, 'Népal', NULL, NULL),
(150, 'Pays-Bas', NULL, NULL),
(151, 'Antilles Néerlandaises', NULL, NULL),
(152, 'Aruba', NULL, NULL),
(153, 'Nouvelle-Calédonie', NULL, NULL),
(154, 'Vanuatu', NULL, NULL),
(155, 'Nouvelle-Zélande', NULL, NULL),
(156, 'Nicaragua', NULL, NULL),
(157, 'Niger', NULL, NULL),
(158, 'Nigéria', NULL, NULL),
(159, 'Niué', NULL, NULL),
(160, 'Île Norfolk', NULL, NULL),
(161, 'Norvège', NULL, NULL),
(162, 'Îles Mariannes du Nord', NULL, NULL),
(163, 'Îles Mineures Éloignées des États-Unis', NULL, NULL),
(164, 'États Fédérés de Micronésie', NULL, NULL),
(165, 'Îles Marshall', NULL, NULL),
(166, 'Palaos', NULL, NULL),
(167, 'Pakistan', NULL, NULL),
(168, 'Panama', NULL, NULL),
(169, 'Papouasie-Nouvelle-Guinée', NULL, NULL),
(170, 'Paraguay', NULL, NULL),
(171, 'Pérou', NULL, NULL),
(172, 'Philippines', NULL, NULL),
(173, 'Pitcairn', NULL, NULL),
(174, 'Pologne', NULL, NULL),
(175, 'Portugal', NULL, NULL),
(176, 'Guinée-Bissau', NULL, NULL),
(177, 'Timor-Leste', NULL, NULL),
(178, 'Porto Rico', NULL, NULL),
(179, 'Qatar', NULL, NULL),
(180, 'Réunion', NULL, NULL),
(181, 'Roumanie', NULL, NULL),
(182, 'Fédération de Russie', NULL, NULL),
(183, 'Rwanda', NULL, NULL),
(184, 'Sainte-Hélène', NULL, NULL),
(185, 'Saint-Kitts-et-Nevis', NULL, NULL),
(186, 'Anguilla', NULL, NULL),
(187, 'Sainte-Lucie', NULL, NULL),
(188, 'Saint-Pierre-et-Miquelon', NULL, NULL),
(189, 'Saint-Vincent-et-les Grenadines', NULL, NULL),
(190, 'Saint-Marin', NULL, NULL),
(191, 'Sao Tomé-et-Principe', NULL, NULL),
(192, 'Arabie Saoudite', NULL, NULL),
(193, 'Sénégal', NULL, NULL),
(194, 'Seychelles', NULL, NULL),
(195, 'Sierra Leone', NULL, NULL),
(196, 'Singapour', NULL, NULL),
(197, 'Slovaquie', NULL, NULL),
(198, 'Viet Nam', NULL, NULL),
(199, 'Slovénie', NULL, NULL),
(200, 'Somalie', NULL, NULL),
(201, 'Afrique du Sud', NULL, NULL),
(202, 'Zimbabwe', NULL, NULL),
(203, 'Espagne', NULL, NULL),
(204, 'Sahara Occidental', NULL, NULL),
(205, 'Soudan', NULL, NULL),
(206, 'Suriname', NULL, NULL),
(207, 'Svalbard etÎle Jan Mayen', NULL, NULL),
(208, 'Swaziland', NULL, NULL),
(209, 'Suède', NULL, NULL),
(210, 'Suisse', NULL, NULL),
(211, 'République Arabe Syrienne', NULL, NULL),
(212, 'Tadjikistan', NULL, NULL),
(213, 'Thaïlande', NULL, NULL),
(214, 'Togo', NULL, NULL),
(215, 'Tokelau', NULL, NULL),
(216, 'Tonga', NULL, NULL),
(217, 'Trinité-et-Tobago', NULL, NULL),
(218, 'Émirats Arabes Unis', NULL, NULL),
(219, 'Tunisie', NULL, NULL),
(220, 'Turquie', NULL, NULL),
(221, 'Turkménistan', NULL, NULL),
(222, 'Îles Turks et Caïques', NULL, NULL),
(223, 'Tuvalu', NULL, NULL),
(224, 'Ouganda', NULL, NULL),
(225, 'Ukraine', NULL, NULL),
(226, 'L\'ex-République Yougoslave de Macédoine', NULL, NULL),
(227, 'Égypte', NULL, NULL),
(228, 'Royaume-Uni', NULL, NULL),
(229, 'Île de Man', NULL, NULL),
(230, 'République-Unie de Tanzanie', NULL, NULL),
(231, 'États-Unis', NULL, NULL),
(232, 'Îles Vierges des États-Unis', NULL, NULL),
(233, 'Burkina Faso', NULL, NULL),
(234, 'Uruguay', NULL, NULL),
(235, 'Ouzbékistan', NULL, NULL),
(236, 'Venezuela', NULL, NULL),
(237, 'Wallis et Futuna', NULL, NULL),
(238, 'Samoa', NULL, NULL),
(239, 'Yémen', NULL, NULL),
(240, 'Serbie-et-Monténégro', NULL, NULL),
(241, 'Zambie', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `pays10`
--

CREATE TABLE `pays10` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` int(3) NOT NULL,
  `alpha2` varchar(2) NOT NULL,
  `alpha3` varchar(3) NOT NULL,
  `nom_en_gb` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pays10`
--

INSERT INTO `pays10` (`id`, `code`, `alpha2`, `alpha3`, `nom_en_gb`, `nom`) VALUES
(1, 4, 'AF', 'AFG', 'Afghanistan', 'Afghanistan'),
(2, 8, 'AL', 'ALB', 'Albania', 'Albanie'),
(3, 10, 'AQ', 'ATA', 'Antarctica', 'Antarctique'),
(4, 12, 'DZ', 'DZA', 'Algeria', 'Algérie'),
(5, 16, 'AS', 'ASM', 'American Samoa', 'Samoa Américaines'),
(6, 20, 'AD', 'AND', 'Andorra', 'Andorre'),
(7, 24, 'AO', 'AGO', 'Angola', 'Angola'),
(8, 28, 'AG', 'ATG', 'Antigua and Barbuda', 'Antigua-et-Barbuda'),
(9, 31, 'AZ', 'AZE', 'Azerbaijan', 'Azerbaïdjan'),
(10, 32, 'AR', 'ARG', 'Argentina', 'Argentine'),
(11, 36, 'AU', 'AUS', 'Australia', 'Australie'),
(12, 40, 'AT', 'AUT', 'Austria', 'Autriche'),
(13, 44, 'BS', 'BHS', 'Bahamas', 'Bahamas'),
(14, 48, 'BH', 'BHR', 'Bahrain', 'Bahreïn'),
(15, 50, 'BD', 'BGD', 'Bangladesh', 'Bangladesh'),
(16, 51, 'AM', 'ARM', 'Armenia', 'Arménie'),
(17, 52, 'BB', 'BRB', 'Barbados', 'Barbade'),
(18, 56, 'BE', 'BEL', 'Belgium', 'Belgique'),
(19, 60, 'BM', 'BMU', 'Bermuda', 'Bermudes'),
(20, 64, 'BT', 'BTN', 'Bhutan', 'Bhoutan'),
(21, 68, 'BO', 'BOL', 'Bolivia', 'Bolivie'),
(22, 70, 'BA', 'BIH', 'Bosnia and Herzegovina', 'Bosnie-Herzégovine'),
(23, 72, 'BW', 'BWA', 'Botswana', 'Botswana'),
(24, 74, 'BV', 'BVT', 'Bouvet Island', 'Île Bouvet'),
(25, 76, 'BR', 'BRA', 'Brazil', 'Brésil'),
(26, 84, 'BZ', 'BLZ', 'Belize', 'Belize'),
(27, 86, 'IO', 'IOT', 'British Indian Ocean Territory', 'Territoire Britannique de l\'Océan Indien'),
(28, 90, 'SB', 'SLB', 'Solomon Islands', 'Îles Salomon'),
(29, 92, 'VG', 'VGB', 'British Virgin Islands', 'Îles Vierges Britanniques'),
(30, 96, 'BN', 'BRN', 'Brunei Darussalam', 'Brunéi Darussalam'),
(31, 100, 'BG', 'BGR', 'Bulgaria', 'Bulgarie'),
(32, 104, 'MM', 'MMR', 'Myanmar', 'Myanmar'),
(33, 108, 'BI', 'BDI', 'Burundi', 'Burundi'),
(34, 112, 'BY', 'BLR', 'Belarus', 'Bélarus'),
(35, 116, 'KH', 'KHM', 'Cambodia', 'Cambodge'),
(36, 120, 'CM', 'CMR', 'Cameroon', 'Cameroun'),
(37, 124, 'CA', 'CAN', 'Canada', 'Canada'),
(38, 132, 'CV', 'CPV', 'Cape Verde', 'Cap-vert'),
(39, 136, 'KY', 'CYM', 'Cayman Islands', 'Îles Caïmanes'),
(40, 140, 'CF', 'CAF', 'Central African', 'République Centrafricaine'),
(41, 144, 'LK', 'LKA', 'Sri Lanka', 'Sri Lanka'),
(42, 148, 'TD', 'TCD', 'Chad', 'Tchad'),
(43, 152, 'CL', 'CHL', 'Chile', 'Chili'),
(44, 156, 'CN', 'CHN', 'China', 'Chine'),
(45, 158, 'TW', 'TWN', 'Taiwan', 'Taïwan'),
(46, 162, 'CX', 'CXR', 'Christmas Island', 'Île Christmas'),
(47, 166, 'CC', 'CCK', 'Cocos (Keeling) Islands', 'Îles Cocos (Keeling)'),
(48, 170, 'CO', 'COL', 'Colombia', 'Colombie'),
(49, 174, 'KM', 'COM', 'Comoros', 'Comores'),
(50, 175, 'YT', 'MYT', 'Mayotte', 'Mayotte'),
(51, 178, 'CG', 'COG', 'Republic of the Congo', 'République du Congo'),
(52, 180, 'CD', 'COD', 'The Democratic Republic Of The Congo', 'République Démocratique du Congo'),
(53, 184, 'CK', 'COK', 'Cook Islands', 'Îles Cook'),
(54, 188, 'CR', 'CRI', 'Costa Rica', 'Costa Rica'),
(55, 191, 'HR', 'HRV', 'Croatia', 'Croatie'),
(56, 192, 'CU', 'CUB', 'Cuba', 'Cuba'),
(57, 196, 'CY', 'CYP', 'Cyprus', 'Chypre'),
(58, 203, 'CZ', 'CZE', 'Czech Republic', 'République Tchèque'),
(59, 204, 'BJ', 'BEN', 'Benin', 'Bénin'),
(60, 208, 'DK', 'DNK', 'Denmark', 'Danemark'),
(61, 212, 'DM', 'DMA', 'Dominica', 'Dominique'),
(62, 214, 'DO', 'DOM', 'Dominican Republic', 'République Dominicaine'),
(63, 218, 'EC', 'ECU', 'Ecuador', 'Équateur'),
(64, 222, 'SV', 'SLV', 'El Salvador', 'El Salvador'),
(65, 226, 'GQ', 'GNQ', 'Equatorial Guinea', 'Guinée Équatoriale'),
(66, 231, 'ET', 'ETH', 'Ethiopia', 'Éthiopie'),
(67, 232, 'ER', 'ERI', 'Eritrea', 'Érythrée'),
(68, 233, 'EE', 'EST', 'Estonia', 'Estonie'),
(69, 234, 'FO', 'FRO', 'Faroe Islands', 'Îles Féroé'),
(70, 238, 'FK', 'FLK', 'Falkland Islands', 'Îles (malvinas) Falkland'),
(71, 239, 'GS', 'SGS', 'South Georgia and the South Sandwich Islands', 'Géorgie du Sud et les Îles Sandwich du Sud'),
(72, 242, 'FJ', 'FJI', 'Fiji', 'Fidji'),
(73, 246, 'FI', 'FIN', 'Finland', 'Finlande'),
(74, 248, 'AX', 'ALA', 'Åland Islands', 'Îles Åland'),
(75, 250, 'FR', 'FRA', 'France', 'France'),
(76, 254, 'GF', 'GUF', 'French Guiana', 'Guyane Française'),
(77, 258, 'PF', 'PYF', 'French Polynesia', 'Polynésie Française'),
(78, 260, 'TF', 'ATF', 'French Southern Territories', 'Terres Australes Françaises'),
(79, 262, 'DJ', 'DJI', 'Djibouti', 'Djibouti'),
(80, 266, 'GA', 'GAB', 'Gabon', 'Gabon'),
(81, 268, 'GE', 'GEO', 'Georgia', 'Géorgie'),
(82, 270, 'GM', 'GMB', 'Gambia', 'Gambie'),
(83, 275, 'PS', 'PSE', 'Occupied Palestinian Territory', 'Territoire Palestinien Occupé'),
(84, 276, 'DE', 'DEU', 'Germany', 'Allemagne'),
(85, 288, 'GH', 'GHA', 'Ghana', 'Ghana'),
(86, 292, 'GI', 'GIB', 'Gibraltar', 'Gibraltar'),
(87, 296, 'KI', 'KIR', 'Kiribati', 'Kiribati'),
(88, 300, 'GR', 'GRC', 'Greece', 'Grèce'),
(89, 304, 'GL', 'GRL', 'Greenland', 'Groenland'),
(90, 308, 'GD', 'GRD', 'Grenada', 'Grenade'),
(91, 312, 'GP', 'GLP', 'Guadeloupe', 'Guadeloupe'),
(92, 316, 'GU', 'GUM', 'Guam', 'Guam'),
(93, 320, 'GT', 'GTM', 'Guatemala', 'Guatemala'),
(94, 324, 'GN', 'GIN', 'Guinea', 'Guinée'),
(95, 328, 'GY', 'GUY', 'Guyana', 'Guyana'),
(96, 332, 'HT', 'HTI', 'Haiti', 'Haïti'),
(97, 334, 'HM', 'HMD', 'Heard Island and McDonald Islands', 'Îles Heard et Mcdonald'),
(98, 336, 'VA', 'VAT', 'Vatican City State', 'Saint-Siège (état de la Cité du Vatican)'),
(99, 340, 'HN', 'HND', 'Honduras', 'Honduras'),
(100, 344, 'HK', 'HKG', 'Hong Kong', 'Hong-Kong'),
(101, 348, 'HU', 'HUN', 'Hungary', 'Hongrie'),
(102, 352, 'IS', 'ISL', 'Iceland', 'Islande'),
(103, 356, 'IN', 'IND', 'India', 'Inde'),
(104, 360, 'ID', 'IDN', 'Indonesia', 'Indonésie'),
(105, 364, 'IR', 'IRN', 'Islamic Republic of Iran', 'République Islamique d\'Iran'),
(106, 368, 'IQ', 'IRQ', 'Iraq', 'Iraq'),
(107, 372, 'IE', 'IRL', 'Ireland', 'Irlande'),
(108, 376, 'IL', 'ISR', 'Israel', 'Israël'),
(109, 380, 'IT', 'ITA', 'Italy', 'Italie'),
(110, 384, 'CI', 'CIV', 'Côte d\'Ivoire', 'Côte d\'Ivoire'),
(111, 388, 'JM', 'JAM', 'Jamaica', 'Jamaïque'),
(112, 392, 'JP', 'JPN', 'Japan', 'Japon'),
(113, 398, 'KZ', 'KAZ', 'Kazakhstan', 'Kazakhstan'),
(114, 400, 'JO', 'JOR', 'Jordan', 'Jordanie'),
(115, 404, 'KE', 'KEN', 'Kenya', 'Kenya'),
(116, 408, 'KP', 'PRK', 'Democratic People\'s Republic of Korea', 'République Populaire Démocratique de Corée'),
(117, 410, 'KR', 'KOR', 'Republic of Korea', 'République de Corée'),
(118, 414, 'KW', 'KWT', 'Kuwait', 'Koweït'),
(119, 417, 'KG', 'KGZ', 'Kyrgyzstan', 'Kirghizistan'),
(120, 418, 'LA', 'LAO', 'Lao People\'s Democratic Republic', 'République Démocratique Populaire Lao'),
(121, 422, 'LB', 'LBN', 'Lebanon', 'Liban'),
(122, 426, 'LS', 'LSO', 'Lesotho', 'Lesotho'),
(123, 428, 'LV', 'LVA', 'Latvia', 'Lettonie'),
(124, 430, 'LR', 'LBR', 'Liberia', 'Libéria'),
(125, 434, 'LY', 'LBY', 'Libyan Arab Jamahiriya', 'Jamahiriya Arabe Libyenne'),
(126, 438, 'LI', 'LIE', 'Liechtenstein', 'Liechtenstein'),
(127, 440, 'LT', 'LTU', 'Lithuania', 'Lituanie'),
(128, 442, 'LU', 'LUX', 'Luxembourg', 'Luxembourg'),
(129, 446, 'MO', 'MAC', 'Macao', 'Macao'),
(130, 450, 'MG', 'MDG', 'Madagascar', 'Madagascar'),
(131, 454, 'MW', 'MWI', 'Malawi', 'Malawi'),
(132, 458, 'MY', 'MYS', 'Malaysia', 'Malaisie'),
(133, 462, 'MV', 'MDV', 'Maldives', 'Maldives'),
(134, 466, 'ML', 'MLI', 'Mali', 'Mali'),
(135, 470, 'MT', 'MLT', 'Malta', 'Malte'),
(136, 474, 'MQ', 'MTQ', 'Martinique', 'Martinique'),
(137, 478, 'MR', 'MRT', 'Mauritania', 'Mauritanie'),
(138, 480, 'MU', 'MUS', 'Mauritius', 'Maurice'),
(139, 484, 'MX', 'MEX', 'Mexico', 'Mexique'),
(140, 492, 'MC', 'MCO', 'Monaco', 'Monaco'),
(141, 496, 'MN', 'MNG', 'Mongolia', 'Mongolie'),
(142, 498, 'MD', 'MDA', 'Republic of Moldova', 'République de Moldova'),
(143, 500, 'MS', 'MSR', 'Montserrat', 'Montserrat'),
(144, 504, 'MA', 'MAR', 'Morocco', 'Maroc'),
(145, 508, 'MZ', 'MOZ', 'Mozambique', 'Mozambique'),
(146, 512, 'OM', 'OMN', 'Oman', 'Oman'),
(147, 516, 'NA', 'NAM', 'Namibia', 'Namibie'),
(148, 520, 'NR', 'NRU', 'Nauru', 'Nauru'),
(149, 524, 'NP', 'NPL', 'Nepal', 'Népal'),
(150, 528, 'NL', 'NLD', 'Netherlands', 'Pays-Bas'),
(151, 530, 'AN', 'ANT', 'Netherlands Antilles', 'Antilles Néerlandaises'),
(152, 533, 'AW', 'ABW', 'Aruba', 'Aruba'),
(153, 540, 'NC', 'NCL', 'New Caledonia', 'Nouvelle-Calédonie'),
(154, 548, 'VU', 'VUT', 'Vanuatu', 'Vanuatu'),
(155, 554, 'NZ', 'NZL', 'New Zealand', 'Nouvelle-Zélande'),
(156, 558, 'NI', 'NIC', 'Nicaragua', 'Nicaragua'),
(157, 562, 'NE', 'NER', 'Niger', 'Niger'),
(158, 566, 'NG', 'NGA', 'Nigeria', 'Nigéria'),
(159, 570, 'NU', 'NIU', 'Niue', 'Niué'),
(160, 574, 'NF', 'NFK', 'Norfolk Island', 'Île Norfolk'),
(161, 578, 'NO', 'NOR', 'Norway', 'Norvège'),
(162, 580, 'MP', 'MNP', 'Northern Mariana Islands', 'Îles Mariannes du Nord'),
(163, 581, 'UM', 'UMI', 'United States Minor Outlying Islands', 'Îles Mineures Éloignées des États-Unis'),
(164, 583, 'FM', 'FSM', 'Federated States of Micronesia', 'États Fédérés de Micronésie'),
(165, 584, 'MH', 'MHL', 'Marshall Islands', 'Îles Marshall'),
(166, 585, 'PW', 'PLW', 'Palau', 'Palaos'),
(167, 586, 'PK', 'PAK', 'Pakistan', 'Pakistan'),
(168, 591, 'PA', 'PAN', 'Panama', 'Panama'),
(169, 598, 'PG', 'PNG', 'Papua New Guinea', 'Papouasie-Nouvelle-Guinée'),
(170, 600, 'PY', 'PRY', 'Paraguay', 'Paraguay'),
(171, 604, 'PE', 'PER', 'Peru', 'Pérou'),
(172, 608, 'PH', 'PHL', 'Philippines', 'Philippines'),
(173, 612, 'PN', 'PCN', 'Pitcairn', 'Pitcairn'),
(174, 616, 'PL', 'POL', 'Poland', 'Pologne'),
(175, 620, 'PT', 'PRT', 'Portugal', 'Portugal'),
(176, 624, 'GW', 'GNB', 'Guinea-Bissau', 'Guinée-Bissau'),
(177, 626, 'TL', 'TLS', 'Timor-Leste', 'Timor-Leste'),
(178, 630, 'PR', 'PRI', 'Puerto Rico', 'Porto Rico'),
(179, 634, 'QA', 'QAT', 'Qatar', 'Qatar'),
(180, 638, 'RE', 'REU', 'Réunion', 'Réunion'),
(181, 642, 'RO', 'ROU', 'Romania', 'Roumanie'),
(182, 643, 'RU', 'RUS', 'Russian Federation', 'Fédération de Russie'),
(183, 646, 'RW', 'RWA', 'Rwanda', 'Rwanda'),
(184, 654, 'SH', 'SHN', 'Saint Helena', 'Sainte-Hélène'),
(185, 659, 'KN', 'KNA', 'Saint Kitts and Nevis', 'Saint-Kitts-et-Nevis'),
(186, 660, 'AI', 'AIA', 'Anguilla', 'Anguilla'),
(187, 662, 'LC', 'LCA', 'Saint Lucia', 'Sainte-Lucie'),
(188, 666, 'PM', 'SPM', 'Saint-Pierre and Miquelon', 'Saint-Pierre-et-Miquelon'),
(189, 670, 'VC', 'VCT', 'Saint Vincent and the Grenadines', 'Saint-Vincent-et-les Grenadines'),
(190, 674, 'SM', 'SMR', 'San Marino', 'Saint-Marin'),
(191, 678, 'ST', 'STP', 'Sao Tome and Principe', 'Sao Tomé-et-Principe'),
(192, 682, 'SA', 'SAU', 'Saudi Arabia', 'Arabie Saoudite'),
(193, 686, 'SN', 'SEN', 'Senegal', 'Sénégal'),
(194, 690, 'SC', 'SYC', 'Seychelles', 'Seychelles'),
(195, 694, 'SL', 'SLE', 'Sierra Leone', 'Sierra Leone'),
(196, 702, 'SG', 'SGP', 'Singapore', 'Singapour'),
(197, 703, 'SK', 'SVK', 'Slovakia', 'Slovaquie'),
(198, 704, 'VN', 'VNM', 'Vietnam', 'Viet Nam'),
(199, 705, 'SI', 'SVN', 'Slovenia', 'Slovénie'),
(200, 706, 'SO', 'SOM', 'Somalia', 'Somalie'),
(201, 710, 'ZA', 'ZAF', 'South Africa', 'Afrique du Sud'),
(202, 716, 'ZW', 'ZWE', 'Zimbabwe', 'Zimbabwe'),
(203, 724, 'ES', 'ESP', 'Spain', 'Espagne'),
(204, 732, 'EH', 'ESH', 'Western Sahara', 'Sahara Occidental'),
(205, 736, 'SD', 'SDN', 'Sudan', 'Soudan'),
(206, 740, 'SR', 'SUR', 'Suriname', 'Suriname'),
(207, 744, 'SJ', 'SJM', 'Svalbard and Jan Mayen', 'Svalbard etÎle Jan Mayen'),
(208, 748, 'SZ', 'SWZ', 'Swaziland', 'Swaziland'),
(209, 752, 'SE', 'SWE', 'Sweden', 'Suède'),
(210, 756, 'CH', 'CHE', 'Switzerland', 'Suisse'),
(211, 760, 'SY', 'SYR', 'Syrian Arab Republic', 'République Arabe Syrienne'),
(212, 762, 'TJ', 'TJK', 'Tajikistan', 'Tadjikistan'),
(213, 764, 'TH', 'THA', 'Thailand', 'Thaïlande'),
(214, 768, 'TG', 'TGO', 'Togo', 'Togo'),
(215, 772, 'TK', 'TKL', 'Tokelau', 'Tokelau'),
(216, 776, 'TO', 'TON', 'Tonga', 'Tonga'),
(217, 780, 'TT', 'TTO', 'Trinidad and Tobago', 'Trinité-et-Tobago'),
(218, 784, 'AE', 'ARE', 'United Arab Emirates', 'Émirats Arabes Unis'),
(219, 788, 'TN', 'TUN', 'Tunisia', 'Tunisie'),
(220, 792, 'TR', 'TUR', 'Turkey', 'Turquie'),
(221, 795, 'TM', 'TKM', 'Turkmenistan', 'Turkménistan'),
(222, 796, 'TC', 'TCA', 'Turks and Caicos Islands', 'Îles Turks et Caïques'),
(223, 798, 'TV', 'TUV', 'Tuvalu', 'Tuvalu'),
(224, 800, 'UG', 'UGA', 'Uganda', 'Ouganda'),
(225, 804, 'UA', 'UKR', 'Ukraine', 'Ukraine'),
(226, 807, 'MK', 'MKD', 'The Former Yugoslav Republic of Macedonia', 'L\'ex-République Yougoslave de Macédoine'),
(227, 818, 'EG', 'EGY', 'Egypt', 'Égypte'),
(228, 826, 'GB', 'GBR', 'United Kingdom', 'Royaume-Uni'),
(229, 833, 'IM', 'IMN', 'Isle of Man', 'Île de Man'),
(230, 834, 'TZ', 'TZA', 'United Republic Of Tanzania', 'République-Unie de Tanzanie'),
(231, 840, 'US', 'USA', 'United States', 'États-Unis'),
(232, 850, 'VI', 'VIR', 'U.S. Virgin Islands', 'Îles Vierges des États-Unis'),
(233, 854, 'BF', 'BFA', 'Burkina Faso', 'Burkina Faso'),
(234, 858, 'UY', 'URY', 'Uruguay', 'Uruguay'),
(235, 860, 'UZ', 'UZB', 'Uzbekistan', 'Ouzbékistan'),
(236, 862, 'VE', 'VEN', 'Venezuela', 'Venezuela'),
(237, 876, 'WF', 'WLF', 'Wallis and Futuna', 'Wallis et Futuna'),
(238, 882, 'WS', 'WSM', 'Samoa', 'Samoa'),
(239, 887, 'YE', 'YEM', 'Yemen', 'Yémen'),
(240, 891, 'CS', 'SCG', 'Serbia and Montenegro', 'Serbie-et-Monténégro'),
(241, 894, 'ZM', 'ZMB', 'Zambia', 'Zambie');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `fichier` varchar(255) DEFAULT NULL,
  `indice` int(11) NOT NULL,
  `publier` tinyint(1) NOT NULL DEFAULT 1,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `album_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`id`, `titre`, `libelle`, `fichier`, `indice`, `publier`, `visible`, `album_id`, `created_at`, `updated_at`) VALUES
(1, 'Nous sommes ACDIEF', 'L’Organisation a pour but de contribuer à l’épanouissement de l’enfance et de la jeune fille dans une approche de développement humain durable et participatif, promouvoir la paix et la sécurité', 'photos/photo1586437277.jpg', 1, 1, 1, 1, '2020-04-09 13:01:17', '2020-04-09 11:01:17'),
(2, 'Un domaine d’intervention clair', 'L’Organisation intervient dans le domaine de la promotion et protection de l’homme et de l’enfant et de la jeune fille, la paix et la sécurité, et l’entrepreneuriat des jeunes.', 'photos/photo1586437313.jpg', 2, 1, 1, 1, '2020-04-09 13:01:53', '2020-04-09 11:01:53'),
(3, 'PNUD', 'PNUD', 'photos/photo1586436975.jpg', 1, 1, 1, 2, '2020-04-09 10:56:15', '2020-04-09 10:56:15'),
(4, 'ONU-TOGO', 'ONU-TOGO', 'photos/photo1586436997.jpg', 2, 1, 1, 2, '2020-04-09 10:56:37', '2020-04-09 10:56:37'),
(5, 'UNION EUROPÉENNE', 'UNION EUROPÉENNE', 'photos/photo1586437036.jpg', 3, 1, 1, 2, '2020-04-09 10:57:16', '2020-04-09 10:57:16'),
(6, 'PROCEMA', 'PROCEMA', 'photos/photo1586437068.jpg', 4, 1, 1, 2, '2020-04-09 10:57:48', '2020-04-09 10:57:48'),
(7, 'UNESCO', 'UNESCO', NULL, 4, 1, 1, 2, '2020-04-09 12:59:24', '2020-04-09 10:59:24'),
(8, 'FAIEJ', 'FAIEJ', 'photos/photo1586437111.jpg', 5, 1, 1, 2, '2020-04-09 10:58:31', '2020-04-09 10:58:31'),
(9, 'MADE IN TOGO', 'MADE IN TOGO', NULL, 6, 1, 1, 2, '2020-04-09 12:59:48', '2020-04-09 10:59:48'),
(10, 'Un engagement', 'L’adhésion à l’Organisation est libre et volontaire à toute personne, jouissant de ses droits civiques et moraux sans distinction de race, de sexe ni de religion ni de conviction politique et qui adhère à ses objectifs.', 'photos/photo1586437345.JPG', 3, 1, 1, 1, '2020-04-09 11:02:25', '2020-04-09 11:02:25');

-- --------------------------------------------------------

--
-- Structure de la table `recherches`
--

CREATE TABLE `recherches` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `recherches`
--

INSERT INTO `recherches` (`id`, `titre`) VALUES
(1, 'Stage'),
(2, 'Alternance'),
(3, 'Stage/Alternance'),
(4, 'Emploi'),
(5, 'Déjà en travail'),
(6, 'Aucune');

-- --------------------------------------------------------

--
-- Structure de la table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `fixe_section` varchar(255) DEFAULT NULL,
  `publier` int(1) NOT NULL DEFAULT 1,
  `visible` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `sections`
--

INSERT INTO `sections` (`id`, `titre`, `fixe_section`, `publier`, `visible`, `created_at`, `updated_at`) VALUES
(1, 'Site web Menu', 'menu_h', 1, 1, '2020-04-08 23:31:00', '2020-04-08 23:31:00');

-- --------------------------------------------------------

--
-- Structure de la table `sous_menus`
--

CREATE TABLE `sous_menus` (
  `id_sous_menus` int(11) NOT NULL,
  `titre_sous_menus` varchar(255) NOT NULL,
  `libelle_sous_menus` varchar(200) NOT NULL,
  `lien_sous_menus` varchar(200) NOT NULL,
  `indice_sous_menus` int(11) NOT NULL,
  `publier_sous_menus` tinyint(1) NOT NULL DEFAULT 1,
  `visible_sous_menus` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_menus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `sous_menus`
--

INSERT INTO `sous_menus` (`id_sous_menus`, `titre_sous_menus`, `libelle_sous_menus`, `lien_sous_menus`, `indice_sous_menus`, `publier_sous_menus`, `visible_sous_menus`, `created_at`, `updated_at`, `id_menus`) VALUES
(1, 'Utilisateurs', 'fa-users', 'utilisateurs', 1, 1, 1, '2017-03-29 03:58:21', '2017-03-29 03:58:21', 1),
(2, 'Type d\'utilisateurs', 'fa-street-view', 'type_users', 2, 1, 1, '2017-03-29 04:03:57', '2017-03-29 04:03:57', 1),
(3, 'Menus', 'fa-outdent', 'menus', 3, 1, 1, '2017-03-29 04:05:39', '2017-03-29 04:05:39', 1),
(4, 'Configuration', 'fa-firefox', 'admin/configurations', 5, 1, 1, '2017-03-29 07:14:46', '2017-03-29 07:14:46', 1),
(8, 'Présentation', 'fa fa-book', 'admin/page/apropos', 1, 1, 1, '2020-04-08 22:31:54', '2020-04-08 22:31:54', 8),
(9, 'Domaines', 'fa fa-book', 'admin/page/domaines', 2, 1, 1, '2020-04-08 22:32:47', '2020-04-08 22:32:47', 8),
(10, 'Programmes', 'fa fa-book', 'admin/page/programmes', 3, 1, 1, '2020-04-08 22:33:23', '2020-04-08 22:33:23', 8),
(11, 'Nos Activités', 'fa fa-book', 'admin/page/activites', 4, 1, 1, '2020-04-08 22:34:00', '2020-04-08 22:34:00', 8);

-- --------------------------------------------------------

--
-- Structure de la table `type_innovations`
--

CREATE TABLE `type_innovations` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_innovations`
--

INSERT INTO `type_innovations` (`id`, `titre`, `created_at`, `updated_at`) VALUES
(1, 'Santé', NULL, NULL),
(2, 'Culture', NULL, NULL),
(3, 'Alimentation', NULL, NULL),
(4, 'Education', NULL, NULL),
(5, 'Economie', NULL, NULL),
(6, 'Entraide', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type_users`
--

CREATE TABLE `type_users` (
  `id_type_users` int(11) NOT NULL,
  `libelle_type_users` varchar(150) NOT NULL,
  `visible_type_users` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `type_users`
--

INSERT INTO `type_users` (`id_type_users`, `libelle_type_users`, `visible_type_users`, `created_at`, `updated_at`) VALUES
(1, 'Administrateur', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nom_users` varchar(255) DEFAULT NULL,
  `prenoms_users` varchar(255) DEFAULT NULL,
  `sexe_users` varchar(255) DEFAULT NULL,
  `date_users` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `adresse_users` varchar(255) DEFAULT NULL,
  `contact_users` varchar(255) DEFAULT NULL,
  `logo_users` varchar(255) DEFAULT NULL,
  `ville_users` varchar(255) DEFAULT NULL,
  `login_users` varchar(64) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `publier_users` tinyint(1) NOT NULL DEFAULT 1,
  `visible_users` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` int(1) NOT NULL DEFAULT 0,
  `status` int(1) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `nom_users`, `prenoms_users`, `sexe_users`, `date_users`, `email`, `adresse_users`, `contact_users`, `logo_users`, `ville_users`, `login_users`, `password`, `remember_token`, `publier_users`, `visible_users`, `created_at`, `updated_at`, `admin`, `status`, `token`) VALUES
(1, 'TSIVANYO', 'Marc', 'M', '1970-01-01', 'contact@mastersolut.com', 'Adidogomé', '90337453', 'fichiers/1589495997.jpg', 'Lomé', 'MasterSolut', '$2y$10$PreehdzzqeJJyBUdCUQB/uqWLdKZLGQuysR69TdWLLk9AUPKE.LsO', 'xBugkJXDQgzUNaLT3B6fdhegGxz7i6oGs8V1iL1diy1nFLzHsuS1qJigRw8w', 1, 1, '2017-03-29 03:46:07', '2020-05-14 20:39:57', 1, 1, NULL),
(23, 'TSIVANYO', 'Marcus', 'M', '2020-05-23', 'hello@agencehost.com', 'Lomé-TOGO', '90337453', 'public/img/account/p_tsivanyomarc1590217049.jpg', 'Lomé', NULL, '$2y$10$xsvUDfV088jMq1pRt2j6fOQHD2R8drWtBZ.MNSASwe6Bvct7idg/.', 'VWZcDHJylqIjxgX2VAE2MDpiPQBmGuCAkSJxI022cX5ZXGJnBjjt4ixQRPpu', 1, 1, '2020-05-21 13:16:10', '2020-05-23 04:57:36', 0, NULL, '6q3tNmSe8ewsbAXbDIZ7Ows8QTXWka1590074170');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `categorie_id` (`categorie_id`) USING BTREE;

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `page_id` (`page_id`) USING BTREE;

--
-- Index pour la table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `recherche_id` (`recherche_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Index pour la table `droits`
--
ALTER TABLE `droits`
  ADD PRIMARY KEY (`id_droits`) USING BTREE,
  ADD KEY `id_sous_menus` (`id_sous_menus`) USING BTREE,
  ADD KEY `id_type_users` (`id_type_users`) USING BTREE,
  ADD KEY `id_menus` (`id_menus`) USING BTREE;

--
-- Index pour la table `groupe_users`
--
ALTER TABLE `groupe_users`
  ADD PRIMARY KEY (`id_groupe_users`) USING BTREE,
  ADD KEY `id_users` (`id_users`) USING BTREE,
  ADD KEY `id_type_users` (`id_type_users`) USING BTREE;

--
-- Index pour la table `innovations`
--
ALTER TABLE `innovations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `innovations_type_innovation_id_foreign` (`type_innovation_id`),
  ADD KEY `innovations_pays_id_foreign` (`pays_id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menus`) USING BTREE;

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `section_id` (`section_id`) USING BTREE;

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pays10`
--
ALTER TABLE `pays10`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alpha2` (`alpha2`),
  ADD UNIQUE KEY `alpha3` (`alpha3`),
  ADD UNIQUE KEY `code_unique` (`code`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `album_id` (`album_id`) USING BTREE;

--
-- Index pour la table `recherches`
--
ALTER TABLE `recherches`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `sous_menus`
--
ALTER TABLE `sous_menus`
  ADD PRIMARY KEY (`id_sous_menus`) USING BTREE,
  ADD KEY `id_menus` (`id_menus`) USING BTREE;

--
-- Index pour la table `type_innovations`
--
ALTER TABLE `type_innovations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_users`
--
ALTER TABLE `type_users`
  ADD PRIMARY KEY (`id_type_users`) USING BTREE;

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `droits`
--
ALTER TABLE `droits`
  MODIFY `id_droits` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `groupe_users`
--
ALTER TABLE `groupe_users`
  MODIFY `id_groupe_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `innovations`
--
ALTER TABLE `innovations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id_menus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT pour la table `pays10`
--
ALTER TABLE `pays10`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `recherches`
--
ALTER TABLE `recherches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `sous_menus`
--
ALTER TABLE `sous_menus`
  MODIFY `id_sous_menus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `type_innovations`
--
ALTER TABLE `type_innovations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type_users`
--
ALTER TABLE `type_users`
  MODIFY `id_type_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`recherche_id`) REFERENCES `recherches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cv_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `droits`
--
ALTER TABLE `droits`
  ADD CONSTRAINT `droits_ibfk_1` FOREIGN KEY (`id_sous_menus`) REFERENCES `sous_menus` (`id_sous_menus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `droits_ibfk_2` FOREIGN KEY (`id_type_users`) REFERENCES `type_users` (`id_type_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `droits_ibfk_3` FOREIGN KEY (`id_menus`) REFERENCES `menus` (`id_menus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `groupe_users`
--
ALTER TABLE `groupe_users`
  ADD CONSTRAINT `groupe_users_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `groupe_users_ibfk_2` FOREIGN KEY (`id_type_users`) REFERENCES `type_users` (`id_type_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `innovations`
--
ALTER TABLE `innovations`
  ADD CONSTRAINT `innovations_pays_id_foreign` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `innovations_type_innovation_id_foreign` FOREIGN KEY (`type_innovation_id`) REFERENCES `type_innovations` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sous_menus`
--
ALTER TABLE `sous_menus`
  ADD CONSTRAINT `sous_menus_ibfk_1` FOREIGN KEY (`id_menus`) REFERENCES `menus` (`id_menus`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
