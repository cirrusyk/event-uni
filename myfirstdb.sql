-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 29 jan. 2021 à 07:44
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
-- Base de données : `myfirstdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_event`
--

DROP TABLE IF EXISTS `tb_event`;
CREATE TABLE IF NOT EXISTS `tb_event` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Description` longtext,
  `Date` varchar(10) DEFAULT NULL,
  `Photo` longtext,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_event`
--

INSERT INTO `tb_event` (`ID`, `Title`, `Description`, `Date`, `Photo`) VALUES
(21, 'Lorem ipsum dolor ', 'Sed dignissim lacinia nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique se', '2021-01-20', 'https://media.discordapp.net/attachments/385506008841191437/804597523678232616/event6.jpg'),
(22, 'Donec lacus', 'Lorem ipsum dolor sit amet, consectetur adiplla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Pralibero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at doloesent mauris.Fusce ne', '2021-01-08', 'https://media.discordapp.net/attachments/385506008841191437/804598158981857320/event10.jpg?width=915&height=610'),
(23, 'Vestibulum ante ipsum', '\r\nQuisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse pote', '2021-01-03', 'https://media.discordapp.net/attachments/385506008841191437/804597454812479538/event9.jpg?width=915&height=610'),
(24, 'Nulla facilisi', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem.', '2021-01-29', 'https://media.discordapp.net/attachments/385506008841191437/804598276137418752/event4.jpg?width=914&height=610'),
(25, 'Proin ut ligula vel ', 'Nullam mauris orci, aliquet et, iaculis et, viverra vitae, ligula. Nulla ut felis in purus aliquam imperdiet. Maecenas aliquet mollullam mauris orci, aliquet et, iaculis et, viverra vitae, ligula. Nulla ut felis in purus aliquam imperdiet. Maecenas aliquet molli', '2021-02-26', 'https://media.discordapp.net/attachments/385506008841191437/804597474516926464/event7.jpg?width=915&height=610'),
(26, 'Lorem ipsum dolor sit ', 'Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper', '2021-02-20', 'https://media.discordapp.net/attachments/385506008841191437/804598135534911498/event3.jpg?width=915&height=610');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
