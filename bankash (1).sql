-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 21 Mai 2017 à 19:41
-- Version du serveur :  5.6.24
-- Version de PHP :  5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bankash`
--

-- --------------------------------------------------------

--
-- Structure de la table `devises`
--

CREATE TABLE IF NOT EXISTS `devises` (
  `id` int(11) NOT NULL,
  `va_aed` varchar(50) NOT NULL,
  `vv_aed` varchar(50) NOT NULL,
  `va_bhd` varchar(50) NOT NULL,
  `vv_bhd` varchar(50) NOT NULL,
  `va_cad` varchar(50) NOT NULL,
  `vv_cad` varchar(50) NOT NULL,
  `va_chf` varchar(50) NOT NULL,
  `vv_chf` varchar(50) NOT NULL,
  `va_cny` varchar(50) NOT NULL,
  `vv_cny` varchar(50) NOT NULL,
  `va_dkk` varchar(50) NOT NULL,
  `vv_dkk` varchar(50) NOT NULL,
  `va_eur` varchar(50) NOT NULL,
  `vv_eur` varchar(50) NOT NULL,
  `va_usd` varchar(50) NOT NULL,
  `vv_usd` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `devises`
--

INSERT INTO `devises` (`id`, `va_aed`, `vv_aed`, `va_bhd`, `vv_bhd`, `va_cad`, `vv_cad`, `va_chf`, `vv_chf`, `va_cny`, `vv_cny`, `va_dkk`, `vv_dkk`, `va_eur`, `vv_eur`, `va_usd`, `vv_usd`) VALUES
(1, '6.100', '6.313', '5.973', '6.182', '1.664', '1.722', '22.453', '23.239', '0.325', '0.336', '32.303', '33.434', '2.450', '2.496', '2.285', '2.327');

-- --------------------------------------------------------

--
-- Structure de la table `googlemaps`
--

CREATE TABLE IF NOT EXISTS `googlemaps` (
  `id` int(11) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `longi` varchar(100) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `snip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `googlemaps`
--

INSERT INTO `googlemaps` (`id`, `lat`, `longi`, `titre`, `snip`) VALUES
(1, '36.508253', '8.786433', 'Bankash Jendouba', 'Rue de la republique');

-- --------------------------------------------------------

--
-- Structure de la table `tb_agence`
--

CREATE TABLE IF NOT EXISTS `tb_agence` (
  `id_agence` int(3) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb_agence`
--

INSERT INTO `tb_agence` (`id_agence`, `nom`, `ville`, `longitude`, `latitude`) VALUES
(1, 'bankash', 'jandouba', '3000km', '267km'),
(2, 'bankash', 'tunis', '378km', '500km');

-- --------------------------------------------------------

--
-- Structure de la table `tb_compte`
--

CREATE TABLE IF NOT EXISTS `tb_compte` (
  `id_compte` int(3) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `solde` varchar(50) NOT NULL,
  `type_compte` varchar(50) NOT NULL,
  `id_utilisateur` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb_compte`
--

INSERT INTO `tb_compte` (`id_compte`, `numero`, `solde`, `type_compte`, `id_utilisateur`) VALUES
(1, '121004433', '1500', 'courant', 2),
(2, '114001123', '1500', 'epargne', 4),
(3, '121217770', '0', 'courant', 11),
(4, '59452000', '0', 'epargne', 12);

-- --------------------------------------------------------

--
-- Structure de la table `tb_devises`
--

CREATE TABLE IF NOT EXISTS `tb_devises` (
  `id_devise` int(3) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix_achat` text NOT NULL,
  `prix_vente` text NOT NULL,
  `pays` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb_devises`
--

INSERT INTO `tb_devises` (`id_devise`, `nom`, `prix_achat`, `prix_vente`, `pays`) VALUES
(1, 'AED', '6.100', '6.313', 'AED'),
(2, 'BHD', '5.973', '6.182', 'Bahrein'),
(3, 'CAD', '1.664', '1.722', 'CAD'),
(4, 'CHF', '22.453', '23.239', 'CHF'),
(5, 'CNY', '0.325', '0.336', 'CNY'),
(6, 'DKK', '32.303', '33.434', 'DKK'),
(7, 'EUR', '2.450', '2.496', 'EUROPE'),
(8, 'USD', '2.285', '2.327', 'USD');

-- --------------------------------------------------------

--
-- Structure de la table `tb_emploi`
--

CREATE TABLE IF NOT EXISTS `tb_emploi` (
  `id_offre` int(3) NOT NULL,
  `poste` varchar(50) NOT NULL,
  `niveau` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb_emploi`
--

INSERT INTO `tb_emploi` (`id_offre`, `poste`, `niveau`, `ville`, `ref`, `description`) VALUES
(2, 'Guichetier Junior ', 'Baccalaureat (Mathematique/ Economie/ Gestion) ', 'Sfax', '125', 'rien'),
(3, 'Guichetier Junior', 'Baccalaureat (Mathematique/ Economie/ Gestion)', 'Ben Guerdene', '122', ''),
(4, 'ingenieur reseau', 'bac+5', 'Bizerte', '180', ''),
(5, 'Project Management Officer', 'Diplome : Bac+4/Bac+5, ingenieur. Faculte : FST, ENIT, INSAT, ENSI', 'Tunis', '111', ''),
(6, 'Charge de clientele ', 'Diplome d ecole de commerce Master', 'Mahres', '130', ''),
(7, 'caisier', 'Baccalaureat ( Mathematique/ Economie/ Gestion)', 'ghardimaou', '140', ''),
(8, 'caisier', 'Baccalaureat ( Mathematique/ Economie/ Gestion)', 'sousse', '156', ''),
(9, 'Poste: Guichetier junior', 'Baccalaureat ( Mathematique/ Economie/ Gestion)', 'Jandouba', '110', '');

-- --------------------------------------------------------

--
-- Structure de la table `tb_inscription`
--

CREATE TABLE IF NOT EXISTS `tb_inscription` (
  `id_inscription` int(3) NOT NULL,
  `numero` int(3) NOT NULL,
  `date` date NOT NULL,
  `id_utilisateur` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb_inscription`
--

INSERT INTO `tb_inscription` (`id_inscription`, `numero`, `date`, `id_utilisateur`) VALUES
(1, 1, '2017-04-16', '3'),
(2, 3, '2016-11-13', '1');

-- --------------------------------------------------------

--
-- Structure de la table `tb_mouvement`
--

CREATE TABLE IF NOT EXISTS `tb_mouvement` (
  `id_mouvement` int(3) NOT NULL,
  `type_transaction` varchar(50) NOT NULL,
  `date_transaction` varchar(50) NOT NULL,
  `id_compte` int(3) NOT NULL,
  `montant` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb_mouvement`
--

INSERT INTO `tb_mouvement` (`id_mouvement`, `type_transaction`, `date_transaction`, `id_compte`, `montant`) VALUES
(1, 'debit', '2016-10-10', 1, '5000000'),
(2, 'credit', '2017-04-06', 1, '240'),
(3, 'credit', '2017-05-03', 1, '400'),
(4, 'debit', '2017-05-08', 1, '50');

-- --------------------------------------------------------

--
-- Structure de la table `tb_profil`
--

CREATE TABLE IF NOT EXISTS `tb_profil` (
  `id_profil` int(3) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nom`) VALUES
(1, 'client'),
(2, 'candidat'),
(3, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `tb_utilisateur`
--

CREATE TABLE IF NOT EXISTS `tb_utilisateur` (
  `id_utilisateur` int(3) NOT NULL,
  `cin` int(8) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naiss` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `identifiant` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `type_compte` varchar(50) NOT NULL,
  `id_profil` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `vc` varchar(2) NOT NULL,
  `ref_poste` varchar(5) NOT NULL,
  `etudes` varchar(200) NOT NULL,
  `niveau` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb_utilisateur`
--

INSERT INTO `tb_utilisateur` (`id_utilisateur`, `cin`, `nom`, `prenom`, `date_naiss`, `sexe`, `tel`, `ville`, `identifiant`, `login`, `type_compte`, `id_profil`, `email`, `vc`, `ref_poste`, `etudes`, `niveau`) VALUES
(2, 32145678, 'saadni', 'youssef', '2017-04-24', 'homme', '3256789', 'tunis', 'youssef', 'youssef', 'courant', '1', 'youssefsaadni@gmail.com', '1', '_', '', ''),
(3, 9876321, 'rahoui', 'ayoub', '2016-03-14', 'homme', '21098432', 'tunis', '_', '_', '_', '2', 'ayoubrahoui@gmail.com', '_', '122', 'informatique', 'bac+3'),
(4, 9812345, 'oueslati', 'nour el houda', '2014-01-21', 'femme', '21873409', 'sousse', 'nour', 'nour', 'courant', '1', 'nouroueslati@gmail.com', '1', '_', '', ''),
(4, 12345632, '_', '_', '_', '_', '_', '_', 'admin', 'admin', '_', '3', '_', '_', '_', '', ''),
(5, 12984321, 'rahoui', 'iyed', '2016-01-23', 'homme', '98127653', 'sousse', '_', '_', '_', '2', 'iyedrahoui@gmail.com', '_', '134', 'comptabilite', 'bac+5'),
(6, 56789321, 'selmi', 'samira', '2015-06-09', 'femme', '78234167', 'bizerte', '_', '_', '_', '2', 'samiraselmi@gmail.com', '_', '137', 'marketing', 'bac+4'),
(10, 74309812, 'rahoui', 'emna', '2017-04-10', 'femme', '24323412', 'jandouba', 'emna', 'emna', 'courant', '1', 'emna@gmail.com', '1', '_', '', ''),
(11, 12309532, 'sdiri', 'amel', '21_7_1995', 'femme', '43567123', 'tunis', 'amel', 'amel', 'courant', '1', '', '1', '', '', ''),
(12, 87236543, 'aloui', 'asma', '21_10_1995', 'femme', '21345876', 'gabes', 'asma', 'asma', 'epargne', '1', 'aslma@gmail.com', '1', '', '', ''),
(13, 89651055, 'dkhili', 'sarah', '8_12_1992', 'femme', '21456234', 'tunis', 'sarah', 'sarah', 'courant', '1', 'sarag@hotmail.fr', '0', '', '', ''),
(15, 7978718, 'rahoui', 'nouri', '21_5_1972', 'homme', '98553776', 'hammamet', 'nouri', 'nouri', 'epargne', '1', 'nourirahoui2@gmail.com', '0', '', '', ''),
(16, 12387623, 'hanzyy', 'hanzyyy', '', 'homme', '98674523', 'FERNAN', 'HANZYYT', 'azerty', 'azerty', '1', 'hamzarfaoui@yahoo.fr', '0', '', '', ''),
(17, 32567987, 'majdi', 'sdiri', '', 'homme', '32789345', 'sousse', 'majdi', 'majdi', 'courant', '1', 'majdi@gmail.com', '0', '', '', ''),
(18, 7078890, 'benkagi', 'emna', '', 'femme', '27774778', 'TUNIS', 'emnaaa', '12345', '', '1', 'emna.benkagi@gmail.com', '0', '', '', ''),
(19, 27854377, 'mohammed', 'amel', '', 'femme', '226789', 'ghhjk', 'fhhgjgjh', '', '', '1', 'amell@yahoo.com', '0', '', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `devises`
--
ALTER TABLE `devises`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `googlemaps`
--
ALTER TABLE `googlemaps`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_agence`
--
ALTER TABLE `tb_agence`
  ADD PRIMARY KEY (`id_agence`);

--
-- Index pour la table `tb_compte`
--
ALTER TABLE `tb_compte`
  ADD PRIMARY KEY (`id_compte`), ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `tb_devises`
--
ALTER TABLE `tb_devises`
  ADD PRIMARY KEY (`id_devise`,`nom`);

--
-- Index pour la table `tb_emploi`
--
ALTER TABLE `tb_emploi`
  ADD PRIMARY KEY (`id_offre`);

--
-- Index pour la table `tb_inscription`
--
ALTER TABLE `tb_inscription`
  ADD PRIMARY KEY (`id_inscription`,`numero`), ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `tb_mouvement`
--
ALTER TABLE `tb_mouvement`
  ADD PRIMARY KEY (`id_mouvement`), ADD KEY `id_compte` (`id_compte`);

--
-- Index pour la table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Index pour la table `tb_utilisateur`
--
ALTER TABLE `tb_utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`,`cin`), ADD KEY `id_profil` (`id_profil`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `devises`
--
ALTER TABLE `devises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `tb_agence`
--
ALTER TABLE `tb_agence`
  MODIFY `id_agence` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `tb_compte`
--
ALTER TABLE `tb_compte`
  MODIFY `id_compte` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `tb_devises`
--
ALTER TABLE `tb_devises`
  MODIFY `id_devise` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `tb_emploi`
--
ALTER TABLE `tb_emploi`
  MODIFY `id_offre` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `tb_inscription`
--
ALTER TABLE `tb_inscription`
  MODIFY `id_inscription` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `tb_mouvement`
--
ALTER TABLE `tb_mouvement`
  MODIFY `id_mouvement` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `tb_utilisateur`
--
ALTER TABLE `tb_utilisateur`
  MODIFY `id_utilisateur` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
