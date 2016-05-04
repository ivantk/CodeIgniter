-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2016 at 08:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cm2`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `latin_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `pics` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` float NOT NULL,
  `quantity` varchar(250) NOT NULL,
  `sell_pcs` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `latin_name`, `description`, `pics`, `date`, `price`, `quantity`, `sell_pcs`) VALUES
(1, 'Латинка', 'Tropaelum majus', 'Латинките са род от около 80 вида едногодишни и многогодишни тревисти растения Tropaeolum, един от трите рода в семейство Tropaeolaceae.\r\n Родът, произхождащ от Южна и Централна Америка, включва няколко много популярни градински цветя, като най-често се отглеждат T. majus,\r\n T. peregrinum и T. speciosum. Най-издръжливият вид е T. polyphyllum от Чили, чиито многогодишни корени могат да оцеляват под земята при\r\n температури на въздуха до -15°C.Имат ефектни цветове и заоблени щитовидни листа, чиято дръжка е в средата.\r\n Цветовете имат пет венчелистчета (понякога и повече), трипестиков плодник и фуниеобразна нектарна тръбичка отзад.\r\n Цветовете могат да се добавят в салати за получаване на екзотичен вид и вкус. Имат леко остър вкус, подобен на този на кресона.\r\n Неузрелите мариновани семена са използвани за заместител на каперсите. T. tuberosum образува ядлива подземна грудка,\r\n която е основен източник на храна в някои части на Андите.', 'latinka1.jpg;\r\nlatinka2.jpg', '2016-01-14 18:50:24', 2.3, '250', '1.50'),
(2, 'Кукурякът ', 'Helleborus', 'Хелеборусите са род от Европа и Азия от семейство (Ranunculaceae) Лютикови. Кукуряците са група очарователни малки многогодишници,\r\nкоито са популярни и се отглеждат от дълбока древност, често се споменават в разни легенди. Споменават се още в древногръцката и римската литература, \r\nа в средновековието са масово култивирани като лечебни растения – срещат се огромни колонии покрай изоставени и рушащи се манастири.\r\nКукурякът съдържа голяма група алкалоиди, част от които са отровни при поглъщане в големи количества. \r\nТези алкалоиди, извлечени от растенията, и до днес се използват в хомеопатията и народната медицина.', 'kukurqk.JPG', '2016-01-14 18:51:21', 1.85, '150', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `familiq` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `mail`, `address`, `phone`, `ime`, `familiq`, `role`) VALUES
(1, 'Pesho', 'pesho1', '56', 'Самоков', '868441664', 'pesho_ime', 'pesho_familiq', 'user'),
(3, 'admin', 'admin1', 'admin_mail', 'adminovo', 'admin phone', 'admin', 'adminov', 'admin'),
(4, '123', '123', '132', '123  ', '123', '123', '123', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
