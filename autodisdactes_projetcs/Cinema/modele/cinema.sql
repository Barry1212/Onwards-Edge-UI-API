-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 28 Avril 2016 à 20:13
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL DEFAULT 'sans titre',
  `date_sortie` date NOT NULL DEFAULT '2016-01-01',
  `realisateur` varchar(255) NOT NULL,
  `acteurs` varchar(255) NOT NULL,
  `genres` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `note_moyenne` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `films`
--

INSERT INTO `films` (`id`, `titre`, `date_sortie`, `realisateur`, `acteurs`, `genres`, `description`, `note_moyenne`) VALUES
(1, 'Forrest Gump', '1994-10-05', 'Robert Zemeckis', 'Tom Hanks, Gary Sinise, Robin Wright', 'Comédie dramatique, Romance', 'Quelques décennies d''histoire américaine, des années 1940 à la fin du XXème siècle, à travers le regard et l''étrange odyssée d''un homme simple et pur, Forrest Gump. ', 4.6),
(2, 'La Ligne verte', '2000-03-01', 'Frank Darabont', 'Tom Hanks, Michael Clarke Duncan', 'Fantastique , Policier ', 'Paul Edgecomb, Gardien-chef du pénitencier de Cold Mountain en 1935, était chargé de veiller au bon déroulement des exécutions capitales. Parmi les prisonniers se trouvait un colosse du nom de John Coffey...', 4.5),
(3, 'Django Unchained', '2013-01-16', 'Quentin Tarantino', 'Jamie Foxx, Christoph Waltz', 'Western', 'Le parcours d''un chasseur de prime allemand et d''un homme noir pour retrouver la femme de ce dernier retenue en esclavage par le propriétaire d''une plantation...', 4),
(4, 'Gran Torino', '2009-02-25', 'Clint Eastwood', 'Clint Eastwood, Bee Vang', 'Drame, Thriller ', 'Walt Kowalski est un ancien de la guerre de Corée, un homme inflexible, amer et pétri de préjugés surannés. Hormis sa chienne Daisy, il ne fait confiance qu''à son M-1, toujours propre, toujours prêt à l''usage... ', 4.3),
(5, 'La Liste de Schindler', '1994-03-02', 'Steven Spielberg', 'Liam Neeson, Ben Kingsley', 'Historique , Drame ', 'Evocation des années de guerre d''Oskar Schindler, industriel autrichien rentré à Cracovie en 1939 avec les troupes allemandes. Il va, tout au long de la guerre, protéger des juifs en les faisant travailler dans sa fabrique.', 4.2),
(6, 'The Dark Knight', '2008-08-13', 'Christopher Nolan', 'Christian Bale, Heath Ledger', 'Action , Drame ', 'Batman entreprend de démanteler les dernières organisations criminelles de Gotham. Mais il se heurte bientôt à un nouveau génie du crime qui répand la terreur et le chaos dans la ville : le Joker... ', 4.2),
(15, 'Le Parrain', '1972-03-15', 'Francis Ford Coppola', 'Abe Vigoda, Marlon Brando', ' Policier , Drame ', 'En 1945, à New York, les Corleone sont une des cinq familles de la mafia. Don Vito Corleone marie sa fille à un bookmaker. Sollozzo, "parrain" de la famille Tattaglia, propose à Don Vito une association dans le trafic de drogue... ', 4),
(16, 'Pulp Fiction', '1994-10-26', 'Quentin Tarantino', 'John Travolta, Samuel L. Jackson', 'Policier , Thriller ', 'L''odyssée sanglante et burlesque de petits malfrats dans la jungle de Hollywood à travers trois histoires qui s''entremêlent. ', 4.6),
(17, 'Le Seigneur des anneaux', '2003-12-17', 'Peter Jackson', 'Elijah Wood, Sean Astin', 'Fantastique , Aventure ', 'Tandis que les ténèbres se répandent sur la Terre du Milieu, Aragorn se révèle être l''héritier caché des rois antiques. Quant à Frodon, toujours tenté par l''Anneau, il voyage à travers les contrées ennemies, se reposant sur Sam et Gollum... ', 4.5),
(7, '12 hommes en colère ', '1957-09-04', 'Sidney Lumet', 'Henry Fonda, Martin Balsam', 'Drame', 'Lors d''un procès, un juré émet l''hypothèse que l''homme qu''il doit juger n''est peut-être pas coupable. Il va tenter de convaincre les onze autres jurés. ', 4.3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `mail`, `password`) VALUES
(1, 'bob@isfce.org', 'ISFCE2016');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
