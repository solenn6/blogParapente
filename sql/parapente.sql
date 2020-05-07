-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 07 mai 2020 à 13:10
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `parapente`
--

-- --------------------------------------------------------

--
-- Structure de la table `experience_comment`
--

DROP TABLE IF EXISTS `experience_comment`;
CREATE TABLE IF NOT EXISTS `experience_comment` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `id_site` int(11) NOT NULL,
  `comment_pseudo` varchar(30) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_content` text NOT NULL,
  `comment_picture` varchar(255) NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `fk_site_comment` (`id_site`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

DROP TABLE IF EXISTS `site`;
CREATE TABLE IF NOT EXISTS `site` (
  `id_site` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `site_location` varchar(50) COLLATE utf8_bin NOT NULL,
  `site_picture` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'img/iconeimage.png',
  `site_description` mediumtext COLLATE utf8_bin NOT NULL,
  `site_altitude` int(11) NOT NULL,
  `site_favourable_winds` varchar(20) COLLATE utf8_bin NOT NULL,
  `site_unfavourable_winds` varchar(20) COLLATE utf8_bin NOT NULL,
  `site_latitude` float NOT NULL,
  `site_longitude` float NOT NULL,
  `site_region` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_site`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `site`
--

INSERT INTO `site` (`id_site`, `site_name`, `site_location`, `site_picture`, `site_description`, `site_altitude`, `site_favourable_winds`, `site_unfavourable_winds`, `site_latitude`, `site_longitude`, `site_region`) VALUES
(1, 'col de la Forclaz', 'Annecy (Montmin)', 'img/montmin.png', 'Aujourd\'hui, aussi connue sous le nom de \'Venise des Alpes\', cette ville aux multiples canaux attire les foules, avides d\'emotions intenses lors d\'un vol au-dessus de la ville et de son lac d\'un bleu azur. Vous ne planerez pas qu\'au-dessus du lac d\'Annecy, mais vous survolerez aussi les parois de calcaire des dents de Lanfon et de la Tournette, ainsi que les cretes des Bauges et des Aravis, qui semblent avoir ete concues pour la pratique du vol en parapente.\r\nConditions ideales : Le site general du bassin, entre le decollage de Montmin et celui de Planfait est un cirque relativement protege par la barriere formee par les reliefs alentours. La brise dominante est en provenance d\'Annecy, presque dans tout les cas (sauf en cas de sud modere a fort). Cette brise de nord simplifie la comprehension des flux et prend l\'ascendant sur les tendances de vent de nord (bise). Jusqu\'a environ 15/20km/h de vent de NO/N/NE/E la brise domine jusqu\'a environ 1600m. Dans le secteur de Montmin et du rocher du Roux (le relief immediatement a droite du decollage) ou dans le secteur des chalet de l\'Aulp (transition entre le Roux et le Lanfonnet) ATTENTION les tendances sud vous placent sous le vent et le vol peut etre tres turbulent. En cas de sud fort le decollage est impossible ou tres perilleux (vent arriere), il est clairement deconseille d\'autant plus que vous n\'etes pas sur de rentrer a l\'atterrissage de Doussard face au vent et vous pourriez vous poser dans le lac....', 1257, 'N; O; NO', 'SE; S', 45.8131, 6.2463, 'Auvergne'),
(3, 'Brunas', 'millau', 'img/brunas.png', 'Au cœur du parc régional naturel des Grands Causses, au sud du massif Central, Millau est une commune de l’Aveyron, à la confluence des Gorges du Tarn et de la Dourbie, au sud-est de Rodez. La commune est marquée par l\'élevage du bétail entretenant des pelouses naturelles et par la diversité de ses paysages, entre champs, prairies temporaires, gorges, et ravins. Le territoire de Millau dispose d’une flore de plus de 2 000 espèces, ainsi que de spots de parapente exceptionnels. Découvrez l’impressionnant viaduc de Millau, le pont routier avec l\'ensemble pile-pylône le plus haut au monde, ainsi que les belles plaines qui l’entourent, légèrement vallonnées, entre haies, bocages et murs de pierres.\r\nDescription : Décollage par vent de Nord Est. Rotors sur le décollage dus à la crête située au Nord Est. Pour l\'utilisation du site lire attentivement la signalisation.\r\nAccès : A partir de Millau par Creissels, puis à la sortie de Creissels, chemin gourdronné sur la gauche.', 736, 'N;NO', '', 44.0714, 3.0647, 'Occitanie\r\n'),
(4, 'Cachette', 'Bourg Saint Maurice', 'img/cachette.jpg', 'Vous aurez tout le loisir de scruter les sommets avoisinants ou encore la belle vallée de la Haute Tarentaise. Le décollage se passe sur les faces Sud de la vallée, face aux Arcs, soit sur le versant du Soleil, ou celui du Fort de La Platte pour un survol de ses alpages et ses villages typiques.\r\nL’accès au décollage des parapentes se fait grâce au funiculaire reliant Bourg-Saint-Maurice aux Arcs 1600 pour rejoindre le télésiège qui vous monte au sommet de la piste de la Cachette, à 2100 mètres d’altitude. De là, l’envol se fait sur une pente douce et herbeuse.\r\nVous découvrez alors une vue imprenable sur la face Sud du Mont Blanc et sur les sommets les plus majestueux de l’arc alpin. En suivant le versant d\'Arc 1600 et ses hameaux, votre vol se termine au-dessus de la ville de Bourg-Saint-Maurice pour un atterrissage en plein centre-ville.\r\nDescription : Ne pas survoler le parc national de la Vanoise / INTERDIT PENDANT LA PERIODE DE SKI / Attention aux lignes électriques, aux remontées mécaniques. Confluence dangereuse à partir de 12h00 entre la brise de vallée en cas de foehn / finesse minimum 5', 2134, 'SO; O', '', 45.5833, 6.8039, 'Auvergne'),
(5, 'Pic du midi', 'Roquefeuil', 'img/roquefeuil.png', 'Autour du village de Roquefeuil, vous serez entouré par les Pyrénées Audoises, des pâturages verdoyants et des forêts de sapins. Vous aurez l\'occasion de découvrir de magnifiques paysages lors de votre vol au-dessus du village et de ses alentours. Vous pourrez également voir le plateau de Sault', 1117, 'N', 'E; SE; S; SO; O', 42.8117, 1.9936, 'Occitanie'),
(6, 'Kervijen plomodiern', 'plomodiern', 'img/kervijen.png', 'À la pointe ouest des Montagnes Noires, dans le département du Finistère, le Ménez Hom domine la rade de Brest et la baie de Douarnenez. Du haut de ses 330 m, cette petite montagne est devenue, il y a plus de 28 ans,  le premier site breton à accueillir une école de vol libre. Le Ménez Hom jouxte l’océan Atlantique et a été classé patrimoine naturel en 2004 pour sa faune et sa flore d’exception. Ce site vous permettra de survoler la baie de Douarnenez et vous offrira offrir une vue panoramique exceptionnelle sur les côtes et le large.\r\n', 45, 'S', 'SE; O', 48.1596, -4.2704, 'Bretagne'),
(7, 'trefeuntec Nord Ouest', 'Trefeuntec', 'img/trefeuntec.png', 'À la pointe ouest des Montagnes Noires, dans le département du Finistère, le Ménez Hom domine la rade de Brest et la baie de Douarnenez. Du haut de ses 330 m, cette petite montagne est devenue, il y a plus de 28 ans,  le premier site breton à accueillir une école de vol libre. Le Ménez Hom jouxte l’océan Atlantique et a été classé patrimoine naturel en 2004 pour sa faune et sa flore d’exception. Ce site vous permettra de survoler la baie de Douarnenez et vous offrira offrir une vue panoramique exceptionnelle sur les côtes et le large.\r\nDescription : A marée basse on peut facilement poser sur la plage se St Anne la Palud au nord, a marée haute repose au décollage obligatoire. ', 37, 'NO', 'N; S; SO; O', 48.1285, -4.2697, 'Bretagne'),
(8, 'Le pic de Vissou', 'Clermont l\'Herault', 'img/picdevissou.png', 'Plouf tranquille au coucher du soleil de Pascal Ensenat sur le site du Pic de Vissou situé à l’ouest de Clermont L’Hérault. Le Pic de Vissou, du haut de ses 480 mètres, domine la plaine viticole de Cabrières offrant une vue panoramique sur le coeur d’Hérault.\r\nDescription : Danger par vent d\\\'Est sous le vent du Pic. Turbulent par Sud Ouest. Site partagé avec les aéromodélistes. Ne pas poser sur le terrain des aéromodélistes (situé sur la droite).\r\n', 353, 'S', '', 43.5968, 3.351, 'Occitanie'),
(9, 'Le pic d\'Andan', 'millau', 'img/picdandan.png', 'Ce site de vol se situe juste au nord de Millau. Il s\'agit d\'un site de repli quand le vent de Sud-Est est trop fort pour voler à la Puncho d\'Agast à cause des turbulences du Larzac. C\'est un petit bout de Causse isolé qui a son charme et permet de faire des vols sympatiques avec une belle vue sur le viaduc et Millau, mais bien que le site soit conventionné,les terrains reste  privés, et l\'accès est difficile(chemin 4x4)', 769, 'SE', '', 44.1358, 3.06444, 'Occitanie'),
(10, 'Puncho d\'Agast', 'millau', 'img/punchodagast.png', 'Pouncho d\'Agast est le site parapente de Millau par excellence ! Situé à l\'extrémité Sud-Ouest du Causse Noir dans la pinède du Parc National des Grands Causses, il offre une très belle vue. En effet, en parapente, nous voyons la ville, la confluence de la Dourbie sur le Tarn, le Viaduc, le Causse du Larzac. On aperçoit aussi au loin les contreforts du Massif du Lévezou.Description : Déco N/O & N exploitable jusqu\\\'à 30 Kmh, au-delà, aller à Brunas.\r\n', 807, 'O', '', 44.11, 3.1008, 'Occitanie');

-- --------------------------------------------------------

--
-- Structure de la table `site_landing`
--

DROP TABLE IF EXISTS `site_landing`;
CREATE TABLE IF NOT EXISTS `site_landing` (
  `id_site_landing` int(11) NOT NULL AUTO_INCREMENT,
  `id_site` int(11) NOT NULL,
  `site_landing_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `site_landing_longitude` float NOT NULL,
  `site_landing_lattitude` float NOT NULL,
  `site_landing_altitude` int(11) NOT NULL,
  `site_landing_description` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_site_landing`),
  KEY `id_site` (`id_site`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `site_landing`
--

INSERT INTO `site_landing` (`id_site_landing`, `id_site`, `site_landing_name`, `site_landing_longitude`, `site_landing_lattitude`, `site_landing_altitude`, `site_landing_description`) VALUES
(1, 4, 'Les Ilettes', 6.7508, 45.5908, 754, 'Attention : ligne EDF à moyenne tension longeant le terrain à 100 m côté Hauteville-Les Arcs. En été, forte brise de vallée montante. Site très fréquenté par des écoles. Soyez attentifs à leurs trajectoires.'),
(2, 1, 'Doussard', 6.2222, 45.781, 468, 'Accès: Atterrissage: Salle polyvalente de Doussard à l\'entrée du village.Trajet du parking vers la zone technique : 1 minute.\r\nDangers: Bien que dégagé et assez grand cet atterrissage est très utilisé et les risques de collisions sont réel particulièrement en phase finale de posé.'),
(3, 8, 'Vissou', 3.351, 43.5972, 359, 'Description : Atterrissage au déco. Danger : sous le vent du pic, par vent d\'Est. Turbulent par Sud Ouest. Attention aux rouleaux en arrière du déco. Site partagé avec les aéromodélistes : ne pas poser sur le terrain situé à droite.'),
(4, 7, 'Trefeuntec Nord Ouest', -4.2697, 48.1285, 37, 'A marée basse on peut facilement poser sur la plage se St Anne la Palud au nord, a marée haute repose au décollage obligatoire. \r\n'),
(5, 6, 'Kervijen plomodiern', -4.2704, 48.1596, 45, 'atterrissage soit sur la piste utilisée pour le décollage, soit sur la plage à marée basse. '),
(8, 9, 'St Germain', 3.06889, 44.1342, 673, 'Description : En pente face au vent. Il varie en fonction des cultures. Pas de gonflage ou de pente école sur l\'atterrissage en toute saison.'),
(9, 10, 'millau plage', 44.1169, 3.0886, 360, 'Description : Attention aux cultures. Turbulent par vent d\'Ouest et Sud-Est.'),
(10, 3, 'Brunas', 3.0556, 44.0797, 466, 'Entre Creissels et le décollage sur le bord de la route, sur un plateau intermédiaire.\r\nDescription : Dangers par vent de NE.'),
(11, 5, 'Roquefeuil', 1.9906, 42.8169, 941, 'Description : Aérologie malsaine par vent d\'ouest (déco-attérro). Ligne EDF Haute tension sur l\'attérro (attention). Atterrissage interdit avant coupe du foin.');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `experience_comment`
--
ALTER TABLE `experience_comment`
  ADD CONSTRAINT `fk_site_comment` FOREIGN KEY (`id_site`) REFERENCES `site` (`id_site`);

--
-- Contraintes pour la table `site_landing`
--
ALTER TABLE `site_landing`
  ADD CONSTRAINT `FK_site` FOREIGN KEY (`id_site`) REFERENCES `site` (`id_site`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
