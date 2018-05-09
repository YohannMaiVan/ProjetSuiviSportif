-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 09 Mai 2018 à 17:02
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.26-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `outil_suivi`
--

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Zainouche', 'zaina@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(2, 'florian', 'flo@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(3, 'lolo', 'lolo@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(4, 'aminou', 'aminou@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(5, 'leila', 'leila@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(6, 'polo', 'polo@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(7, 'thierryzoo', 'thierry@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(8, 'hipo', 'hipo@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(9, 'mbot', 'mbot@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(12, 'testeur', 'test@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(14, 'test2', 'test2@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(15, 'dylanlane', 'dylanlane@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(16, 'robot', 'robot@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(17, 'dydy', 'dydy@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- --------------------------------------------------------

--
-- Structure de la table `workouts`
--

CREATE TABLE `workouts` (
  `id` int(11) NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `workouts`
--

INSERT INTO `workouts` (`id`, `title`, `content`, `created_at`, `updated_at`, `deleted_at`, `user_id`) VALUES
(1, 'Entraînement Dos', 'Cycle de Force:\r\n\r\nSoulevé de terre 3*3 Reps \r\n\r\nCharge: \r\n\r\nEntre 160 et 180 kgs\r\n\r\n', '2018-03-05 10:12:02', '2018-03-05 10:12:02', NULL, 1),
(3, 'Back  & Biceps training', 'Barbell Deadlift:\r\n\r\nwarmup: 3 sets\r\n\r\nset 1: 120 x 10\r\nset 2: 140 x 10\r\nset 3: 160 x 4\r\nset 4: 140 x 10\r\nset 5: 120 x 12\r\n\r\nDumbell rowing:\r\n\r\nset 1: 32 x 10\r\nset 2: 40 x 10\r\nset 3: 40 x 10\r\nset 4: 40 x 10\r\n\r\npullover:\r\n\r\n26 x 10\r\n26 x 10\r\n32 x 10\r\n36 x 10\r\n\r\nArms 3 exercises\r\n\r\nGood feeling, motivated. Reprise du Deadlift.', '2018-03-15 11:29:45', '2018-04-19 08:57:24', NULL, 2),
(4, 'Chest training', 'Bench press: \r\n\r\n3 warm up sets\r\n\r\nset 1: 100 x 12\r\nset 2: 105 x 10\r\nset 3: 110 x 8\r\nset 4: 110 x 8\r\n\r\nDumbell incline chest press:\r\n\r\nset 1: 32 x 12\r\nset 2: 40 x 10\r\nset 3: 40 x 10\r\nset 4: 40 x 10\r\n\r\nPec deck machine 66 to 113 kgs\r\n\r\nCable flys 18 to 36 kgs', '2018-03-15 13:09:38', NULL, NULL, 3),
(5, 'Legs and butt', 'Squat magic', '2018-03-15 14:12:55', NULL, NULL, 4),
(6, 'Force', 'Squat: 5 x 5\r\n', '2018-03-15 14:45:30', NULL, NULL, 5),
(7, 'Footing', '15 min chaque matin tous les jours ', '2018-03-16 11:24:50', NULL, NULL, 6),
(8, 'Entraînement 3x500', '1er tour: 1,10\r\n2 eme tour: 1,20\r\n3 ème tour: 1,30', '2018-03-26 08:37:18', NULL, NULL, 7),
(9, 'Entraînement semi', '26 km en 1H30', '2018-03-26 09:27:28', NULL, NULL, 7),
(13, 'hello', 'world\r\n', '2018-04-03 08:10:05', NULL, NULL, 3),
(16, 'test1', 'test1', '2018-04-03 09:59:03', NULL, NULL, 1),
(19, 'workout test 2', 'workout test 2 is testing workout', '2018-04-06 08:07:12', NULL, NULL, 14),
(21, 'seance abdos', '15 min intensives', '2018-04-18 08:06:54', NULL, NULL, 3),
(22, 'Courir', '15 min tous les soirs', '2018-04-19 11:00:10', NULL, NULL, 16),
(23, 'jambes', '3 serie de squat de 20 kilo x 5 rep et 1 minutes de repos\r\nEnsuite parler a mouloud\r\nparler a camil\r\nparler a shameem\r\nparler a amine\r\ndire au revoir aux amis\r\net aller dans la voiture de mouloud\r\nrevenir 7h plus tard a la maison\r\net dire wah cetait un bon entrainement', '2018-04-26 16:02:12', NULL, NULL, 17);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `workouts`
--
ALTER TABLE `workouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `workouts`
--
ALTER TABLE `workouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `workouts`
--
ALTER TABLE `workouts`
  ADD CONSTRAINT `workouts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
