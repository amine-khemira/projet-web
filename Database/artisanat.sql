-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 05 mai 2022 à 06:46
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `artisanat`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `id_produit` int(50) NOT NULL,
  `id_fab` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 0,
  `qty` int(20) NOT NULL DEFAULT 1,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_produit`, `id_fab`, `id_user`, `status`, `qty`, `date`) VALUES
(12, 19, 4, 1, 0, 1, '2022-05-03 23:48:20'),
(13, 12, 3, 1, 2, 1, '2022-05-03 23:48:20'),
(14, 9, 2, 1, 0, 1, '2022-05-03 23:48:20'),
(15, 2, 1, 1, 0, 1, '2022-05-03 23:48:20'),
(16, 19, 4, 1, 0, 1, '2022-05-03 23:52:48'),
(17, 12, 3, 1, 2, 1, '2022-05-03 23:52:48'),
(18, 9, 2, 1, 0, 1, '2022-05-03 23:52:48'),
(19, 2, 1, 1, 0, 1, '2022-05-03 23:52:48'),
(20, 19, 4, 1, 0, 1, '2022-05-03 23:52:56'),
(21, 12, 3, 1, 33, 1, '2022-05-03 23:52:56'),
(22, 9, 2, 1, 0, 1, '2022-05-03 23:52:56'),
(23, 2, 1, 1, 0, 1, '2022-05-03 23:52:56'),
(24, 3, 1, 15, 0, 1, '2022-05-04 20:13:07'),
(28, 3, 1, 15, 0, 1, '2022-05-04 20:34:19'),
(29, 6, 2, 15, 0, 1, '2022-05-04 20:34:19'),
(30, 15, 3, 15, 2, 1, '2022-05-04 22:42:51'),
(31, 15, 3, 15, 2, 1, '2022-05-04 22:46:13'),
(32, 13, 3, 15, 2, 1, '2022-05-04 22:46:13'),
(33, 15, 3, 15, 2, 1, '2022-05-04 22:47:15'),
(34, 13, 3, 15, 2, 1, '2022-05-04 22:47:15'),
(35, 6, 2, 15, 0, 1, '2022-05-04 22:51:31'),
(36, 12, 3, 15, 2, 1, '2022-05-04 22:52:17'),
(37, 5, 1, 15, 5, 1, '2022-05-04 22:53:23'),
(38, 15, 3, 15, 4, 1, '2022-05-05 02:36:01'),
(39, 13, 3, 16, 2, 1, '2022-05-05 02:57:28'),
(40, 5, 1, 16, 0, 1, '2022-05-05 02:57:28');

-- --------------------------------------------------------

--
-- Structure de la table `fabriquant`
--

CREATE TABLE `fabriquant` (
  `id_fab` int(20) NOT NULL,
  `nom_fab` varchar(20) NOT NULL,
  `adresse_fab` varchar(20) NOT NULL,
  `num_fab` varchar(20) NOT NULL,
  `image_fab` varchar(255) NOT NULL,
  `cov_fab` varchar(50) NOT NULL,
  `desc_fab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fabriquant`
--

INSERT INTO `fabriquant` (`id_fab`, `nom_fab`, `adresse_fab`, `num_fab`, `image_fab`, `cov_fab`, `desc_fab`) VALUES
(1, 'Jardin Amazigh', 'La Marsa', '28 454 158', './assets/artisants/AMAZYGH.png', './assets/product/argile.jpg', 'Inspirés de la tradition des bains du Maghreb et du Moyen-Orient, les produits de soins et de bien-être Jardin Amazigh sont faits à base d’ingrédients tunisiens bio et 100% naturels (miel, huile d’olive, plantes) et sentent les fleurs du bassin méditerranéen comme le jasmin ou la fleur d’oranger. Sa créatrice est diplômée en biochimie et a débuté dans l’apiculture pour finalement créer une gamme de produits de soins à base de miel et élargir par la suite à des matières premières nobles telles que les huiles végétales, les huiles essentielles et les plantes non traitées.'),
(2, 'Samak', 'Lyon,france', '00644885', './assets/artisants/samak.jpg', './assets/artisants/eshop.jpg', 'Samak est un mot arabe qui signifie poisson. Celui-ci est un symbole de prospérité en Tunisie, mais aussi un porte-bonheur et un protecteur. Il est ainsi courant de dire \"poisson sur toi\" pour protéger une personne chère. Le symbole du poisson a été utilisé depuis la nuit des temps par les différentes civilisations et religions qui se sont succédé en Tunisie. On le retrouve aujourd\'hui encore sous de nombreuses formes dans l\'artisanat tunisien.'),
(3, 'Kartysan', 'Nabeul', '92 787 375', './assets/artisants/kartysan.jpg', './assets/artisants/kartysan-banner.jpg', 'Kartysan vous offre le meilleur de l‘artisanat tunisien, directement de nos artisans à votre porte. Les artisans tunisiens, les femmes en particulier, ont des possibilités très limitées de bien gagner leur vie. La plupart des artisans travaillent à domicile et n’ont pas des connaissances digitales ou les moyens pour accéder d’avantages à des nouveaux marchés.'),
(4, 'Little Jnaina', 'Ain Zaghouan', '29 430 024', './assets/artisants/jnaina.png', './assets/artisants/ljn.webp', 'Little Jenaina est une entreprise de distribution de produits régionaux et naturels à travers une boutique en ligne.  Little Jenaina collabore avec des artisan.e.s dans différentes régions de la Tunisie afin de vous proposer une sélection de produits de grande qualité et préparés avec passion.');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `id_produit` int(50) NOT NULL,
  `id_fab` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(50) NOT NULL,
  `nom_produit` varchar(50) NOT NULL,
  `Prix_produit` double(10,2) NOT NULL,
  `id_fab` int(20) NOT NULL,
  `image_produit` varchar(255) NOT NULL,
  `Dajout_produit` datetime DEFAULT current_timestamp(),
  `categorie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `Prix_produit`, `id_fab`, `image_produit`, `Dajout_produit`, `categorie`) VALUES
(1, 'crème pour les mains nature', 15.00, 1, './assets/product/creme-pour-les-mains-nature.jpg', '2022-04-23 06:16:18', 'cosmétique'),
(2, 'body scrub', 27.00, 1, './assets/product/body-scrub.jpg', '2022-04-23 06:16:18', 'cosmétique'),
(3, 'déodorant crème lavandin', 17.00, 1, './assets/product/deodorant-creme-lavandin.jpg', '2022-04-23 06:16:18', 'cosmétique'),
(4, 'Embellisseur Capillaire', 32.00, 1, './assets/product/embellisseur-capillaire.jpg', '2022-04-23 06:16:18', 'cosmétique'),
(5, 'Galet Argile vert ', 11.00, 1, './assets/product/galet-argile-verte.jpg', '2022-04-23 06:16:18', 'cosmétique'),
(6, 'canard-poterie de sejnane', 20.00, 2, './assets/product/canard-poterie-de-sejnane.jpg', '2022-04-23 06:16:18', 'décoration'),
(7, 'plat a tarte en céramique', 25.00, 2, './assets/product/plat-a-tarte-en-ceramique-abbassi.jpg', '2022-04-23 06:16:18', 'décoration'),
(8, 'miroir rectangulaire houta', 40.00, 2, './assets/product/miroir-rectangulaire-houta.jpg', '2022-04-23 06:16:18', 'décoration'),
(9, 'série de bols en bois d\'olivier', 30.00, 2, './assets/product/serie-de-bols-en-bois-d-olivier-zitoun-pm.jpg', '2022-04-23 06:16:18', 'décoration'),
(10, 'table basse fer forge et bois de palmier', 230.00, 2, './assets/product/table-basse-fer-forge-et-bois-de-palmier-basma.jpg', '2022-04-23 06:16:18', 'décoration'),
(11, 'colier radhiya', 150.00, 3, './assets/product/Collier-Radhiya-19.jpg', '2022-04-23 06:16:18', 'bijoux'),
(12, 'colier zohra', 145.00, 3, './assets/product/Collier-Zohra-6.jpg', '2022-04-23 06:16:18', 'bijoux'),
(13, 'colier sawsen', 149.00, 3, './assets/product/parure-kartysan-sawsen-bijoux.jpg', '2022-04-23 06:16:18', 'bijoux'),
(14, 'tellila beya', 239.00, 3, './assets/product/Tellila-Beya.jpg', '2022-04-23 06:16:18', 'bijoux'),
(15, 'Sautoir imen', 129.00, 3, './assets/product/Sautoir-Imen-14.jpg', '2022-04-23 06:16:18', 'bijoux'),
(16, 'bsissa', 5.00, 4, './assets/product/bsissa.jpg', '2022-04-23 06:16:18', 'terroir'),
(17, 'Double Concentré De Tomate', 4.20, 4, './assets/product/double-concentre-de-tomate.jpg', '2022-04-23 06:16:18', 'terroir'),
(18, 'Confiture D\'orange Amère', 6.50, 4, './assets/product/confiture-d-orange-amere.jpg', '2022-04-23 06:16:18', 'terroir'),
(19, 'Eau De Geranium', 6.50, 4, './assets/product/eau-de-geranium.jpg', '2022-04-23 06:16:18', 'terroir'),
(20, 'Eau Floral De Roses', 12.00, 4, './assets/product/eau-florale-de-roses.jpg', '2022-04-23 06:16:18', 'terroir');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nom_user` varchar(20) NOT NULL,
  `prenom_user` varchar(20) NOT NULL,
  `adresse_user` varchar(20) NOT NULL,
  `pwd_user` varchar(255) NOT NULL,
  `id_fab` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `adresse_user`, `pwd_user`, `id_fab`) VALUES
(1, 'Khemira', 'Amine', 'amine@gmail.com', '0000', 0),
(2, 'foulen', 'el fouleni', 'foulen@gmail.com', '00001', 0),
(15, 'hayet', 'khemira', 'amine@amine.com', '$2y$10$PjMMbSE9SpJA0GR8osW1RuxEwIdGpMkUpDlpRiBOmfXl3J89WxSO2', 0),
(16, 'Kartysan', 'alexandrov', 'vadim@vadim.com', '$2y$10$.VjSAo8QBMHMY2NLIFa8p.T3b8VZxZu16PQ3mnDdhaCOi5oV.xAnO', 3),
(17, 'kartysan', 'r', 'kartysna@admin.com', '$2y$10$Oj1q4Qdjm2cw72be.KNTPug88YPBmg6IlL1/9usciiNgYWyPy/FuC', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_produit` (`id_produit`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_fab` (`id_fab`);

--
-- Index pour la table `fabriquant`
--
ALTER TABLE `fabriquant`
  ADD PRIMARY KEY (`id_fab`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produit` (`id_produit`),
  ADD KEY `id_fab` (`id_fab`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `id_fab` (`id_fab`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `fabriquant`
--
ALTER TABLE `fabriquant`
  MODIFY `id_fab` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `commande_ibfk_3` FOREIGN KEY (`id_fab`) REFERENCES `fabriquant` (`id_fab`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`),
  ADD CONSTRAINT `panier_ibfk_3` FOREIGN KEY (`id_fab`) REFERENCES `fabriquant` (`id_fab`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_fab`) REFERENCES `fabriquant` (`id_fab`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
